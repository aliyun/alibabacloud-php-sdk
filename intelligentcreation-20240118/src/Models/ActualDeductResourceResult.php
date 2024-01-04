<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240118\Models;

use AlibabaCloud\Tea\Model;

class ActualDeductResourceResult extends Model
{
    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $errorcode;

    /**
     * @example 3239281273464326823
     *
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorMessage' => 'errorMessage',
        'errorcode'    => 'errorcode',
        'requestId'    => 'requestId',
        'success'      => 'success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }
        if (null !== $this->errorcode) {
            $res['errorcode'] = $this->errorcode;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ActualDeductResourceResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }
        if (isset($map['errorcode'])) {
            $model->errorcode = $map['errorcode'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}
