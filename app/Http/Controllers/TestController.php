<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller;
use Swagger\Annotations as OAS;

class TestController extends Controller
{
    /**
     * @OAS\Info(title="Test API", version="1.0")
     */

    /**
     * @OAS\Get(
     *     path="/v1/api/test/index/{id}?id={id223}",
     *     @OAS\Parameter(name="id", in="path", required=true,@OAS\Schema(type="number"), description="用户id"), 
     *     @OAS\Parameter(name="id223", in="query", required=true,@OAS\Schema(type="number"),description="业务id"), 
     *     @OAS\Response(
     *          response="200", description="",
     *          @OAS\MediaType(
     *             mediaType="application/json",
     *             @OAS\Schema(
     *                @OAS\Property(property="result",type="string"),
     *                @OAS\Property(property="code",type="string"),
     *                @OAS\Property(property="msg",type="string"),
     *                @OAS\Property(property="data",type="object"),
     *                example={"result":"success","code":"1000","msg":"操作成功","data":"[{$id,$name,...}]"}
     *             ) 
     *          ),
     *     )
     * )
     */
     public function index()
     {
        //  return response()->json([
        //      'result' => 'success'
        //  ]);

        return view('admin.test.index');
     }   

}
