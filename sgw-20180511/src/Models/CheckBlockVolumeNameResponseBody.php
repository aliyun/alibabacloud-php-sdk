<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class CheckBlockVolumeNameResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $isAlreadyExist;

    /**
     * @example false
     *
     * @var string
     */
    public $isRequireRecovery;

    /**
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @example 735B642E-6564-4A87-99A0-3609F67C787E
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'              => 'Code',
        'isAlreadyExist'    => 'IsAlreadyExist',
        'isRequireRecovery' => 'IsRequireRecovery',
        'message'           => 'Message',
        'requestId'         => 'RequestId',
        'success'           => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->isAlreadyExist) {
            $res['IsAlreadyExist'] = $this->isAlreadyExist;
        }
        if (null !== $this->isRequireRecovery) {
            $res['IsRequireRecovery'] = $this->isRequireRecovery;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckBlockVolumeNameResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['IsAlreadyExist'])) {
            $model->isAlreadyExist = $map['IsAlreadyExist'];
        }
        if (isset($map['IsRequireRecovery'])) {
            $model->isRequireRecovery = $map['IsRequireRecovery'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
