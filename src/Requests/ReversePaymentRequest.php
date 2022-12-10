<?php

namespace Tripsome\Paybox\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReversePaymentRequest  extends FormRequest
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
        return [
            'pg_merchant_id' => ['string', 'required'],
            'pg_payment_id' => ['integer', 'required'],
            'pg_salt' => ['required', 'string'],
        ];
    }
}
