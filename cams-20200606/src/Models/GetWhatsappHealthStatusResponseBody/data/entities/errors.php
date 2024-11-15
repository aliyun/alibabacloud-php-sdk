<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\GetWhatsappHealthStatusResponseBody\data\entities;

use AlibabaCloud\Tea\Model;

class errors extends Model
{
    /**
     * @description The error code.
     *
     * @example 141006
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The description of the error.
     *
     * @example There is an error with the payment method.
     *
     * @var string
     */
    public $errorDescription;

    /**
     * @description The possible solution to the error.
     *
     * @example There was an error with your payment method. Please add a new payment method to the account.
     *
     * @var string
     */
    public $possibleSolution;
    protected $_name = [
        'errorCode'        => 'ErrorCode',
        'errorDescription' => 'ErrorDescription',
        'possibleSolution' => 'PossibleSolution',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorDescription) {
            $res['ErrorDescription'] = $this->errorDescription;
        }
        if (null !== $this->possibleSolution) {
            $res['PossibleSolution'] = $this->possibleSolution;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return errors
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorDescription'])) {
            $model->errorDescription = $map['ErrorDescription'];
        }
        if (isset($map['PossibleSolution'])) {
            $model->possibleSolution = $map['PossibleSolution'];
        }

        return $model;
    }
}
