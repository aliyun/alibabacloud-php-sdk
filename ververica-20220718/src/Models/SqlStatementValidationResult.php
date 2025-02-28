<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class SqlStatementValidationResult extends Model
{
    /**
     * @var ErrorDetails
     */
    public $errorDetails;
    /**
     * @var string
     */
    public $message;
    /**
     * @var bool
     */
    public $success;
    /**
     * @var string
     */
    public $validationResult;
    protected $_name = [
        'errorDetails'     => 'errorDetails',
        'message'          => 'message',
        'success'          => 'success',
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

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->success) {
            $res['success'] = $this->success;
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
            $model->errorDetails = ErrorDetails::fromMap($map['errorDetails']);
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        if (isset($map['validationResult'])) {
            $model->validationResult = $map['validationResult'];
        }

        return $model;
    }
}
