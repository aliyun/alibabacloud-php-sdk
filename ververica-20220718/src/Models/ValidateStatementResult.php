<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class ValidateStatementResult extends Model
{
    /**
     * @var ValidationErrorDetails
     */
    public $errorDetails;
    /**
     * @var string
     */
    public $validationResult;
    protected $_name = [
        'errorDetails'     => 'errorDetails',
        'validationResult' => 'validationResult',
    ];

    public function validate()
    {
        if (null !== $this->errorDetails) {
            $this->errorDetails->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorDetails) {
            $res['errorDetails'] = null !== $this->errorDetails ? $this->errorDetails->toArray($noStream) : $this->errorDetails;
        }

        if (null !== $this->validationResult) {
            $res['validationResult'] = $this->validationResult;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['errorDetails'])) {
            $model->errorDetails = ValidationErrorDetails::fromMap($map['errorDetails']);
        }

        if (isset($map['validationResult'])) {
            $model->validationResult = $map['validationResult'];
        }

        return $model;
    }
}
