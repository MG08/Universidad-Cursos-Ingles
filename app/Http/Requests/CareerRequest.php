<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Career;

class CareerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {


      $career = Career::find($this->career);

      if (isset($career)) {
        return [
            //
            'nombre'=>'min:10|max:50|required|string|unique:careers,nombre,'.$career->id,

        ];
      }
      else{
        return [
            //
            'nombre'=>'min:10|max:50|required|string|unique:careers,nombre',

        ];
      }

    }
}
