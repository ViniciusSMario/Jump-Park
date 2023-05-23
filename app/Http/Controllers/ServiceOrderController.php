<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceOrderRequest;
use App\Models\ServiceOrder;
use Exception;
use Illuminate\Http\Request;

class ServiceOrderController extends Controller
{
    public function index(Request $request)
    {
        try {
            $search = $request->search;

            return ServiceOrder::with('users')
                ->where(function ($query) use ($search){
                    if ($search || (strlen($search) > 0)) {
                        $query->where('service_orders.vehiclePlate', 'LIKE', "%{$search}%");
                    }
                })
                ->paginate(5);
        } catch (Exception $e) {
            return response()->json([
                "success" => false,
                "message" => $e->getMessage(),
            ], 500);
        }
    }

    public function store(ServiceOrderRequest $request)
    {
        try {
            $serviceOrder = new ServiceOrder($request->validated());

            if($serviceOrder->save() ){
                return response()->json([
                    "success" => true,
                    "message" => "Service Order Created.",
                    "data" => $serviceOrder
                ], 201);
            }

            return response()->json([
                "success" => false,
                "message" => "Service Order could not created.",
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                "success" => false,
                "message" => $e->getMessage(),
            ], 500);
        }
    }
}
