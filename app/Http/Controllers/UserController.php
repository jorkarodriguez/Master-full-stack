<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class UserController extends Controller
{
    public function pruebas(Request $request)
    {
        return "accion de pruebas de user-controller";
    }
    public function register(Request $request)
    {
        //recoger los datos del usuario por post 
        $json = $request->input('json', null);
        // decodificar el json
        $params = json_decode($json);
        $params_array = json_decode($json, true);

        if (!empty($params) && !empty($params_array)) {
            // limpiando datos del array 
            $params_array = array_map('trim', $params_array);
            //validar datos 
            $validate =  \Validator::make($params_array, [
                'name' => 'required|alpha',
                'surname' => 'required|alpha',
                'emai' => 'required|email',
                'password' => 'required'
            ]);
            if ($validate->fails()) {

                $data = array(
                    'status' => 'error',
                    'code' =>     404,
                    'mensaje' => 'Falta algun dato',
                    'erros' => $validate->errors()
                );
            } else {
                // comprobar si el usuario ya exite
                //crear el usuario
                //cifrar la contraseña 
                $data = array(
                    'status' => 'success',
                    'code' =>     200,
                    'mensaje' => 'Datos completos',
                    'erros' => $validate->errors()
                );
            }
        } else {
            $data = array(
                'status' => 'error',
                'code' =>     404,
                'mensaje' => 'el Json no existe o el json no esta bien formado'
            );
        }
        //para devolver datos en json 
        return response()->json($data, $data['code']);
    }
    public function login(Request $request)
    {
        return "accion de login de usuario ";
    }
}
