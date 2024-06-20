<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Destination $destination)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Destination $destination)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Destination $destination)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Destination $destination)
    {
        //
    }

    public function getDistanceMatrix()
    {
        $destinations = Destination::all();

        $distanceMatrix = [];
        $destinationNames = [];

        foreach ($destinations as $destination) {
            // Initialize a row for the current destination
            $row = [];
            $destinationNames[] = $destination->name; // assuming 'name' is the field for destination name

            // Access the toDestinations relationship to get the pivot data
            foreach ($destination->toDestinations as $relatedDestination) {
                // Store the 'jarak' value in the row
                $row[$relatedDestination->id] = $relatedDestination->pivot->jarak;
            }

            // Add the row to the distance matrix with the destination ID as the key
            $distanceMatrix[$destination->id] = $row;
        }

        return [$distanceMatrix, $destinationNames];
    }

    public function simulatedAnnealing()
    {
        list($distanceMatrix, $destinationNames) = $this->getDistanceMatrix();

        $url = 'http://localhost:5000/tsp';
        $data = array(
            'destinations' => $destinationNames,
            'distance_data' => $distanceMatrix
        );

        $options = array(
            'http' => array(
                'header'  => "Content-type: application/json\r\n",
                'method'  => 'POST',
                'content' => json_encode($data),
            ),
        );

        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);

        if ($result === FALSE) {
            return response()->json(['error' => 'Error in API call.'], 500);
        }

        $response = json_decode($result, true);

        return response()->json(['optimal_route' => $response['optimal_route']]);
    }
}
