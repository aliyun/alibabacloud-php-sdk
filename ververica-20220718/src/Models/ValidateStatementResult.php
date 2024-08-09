<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class ValidateStatementResult extends Model
{
    /**
     * @var ValidationErrorDetails
     */
    public $errorDetails;

    /**
     * @example "there have some errors""
     *
     * @var string
     */
    public $validationResult;
    protected $_name = [
        'errorDetails'     => 'errorDetails',
        'validationResult' => 'validationResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorDetails) {
            $res['errorDetails'] = null !== $this->errorDetails ? $this->errorDetails->toMap() : null;
        }
        if (null !== $this->validationResult) {
            $res['validationResult'] = $this->validationResult;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ValidateStatementResult
     */
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
