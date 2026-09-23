<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ReduceCreditSeatsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorInfo;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorCode' => 'ErrorCode',
        'errorInfo' => 'ErrorInfo',
        'instanceId' => 'InstanceId',
        'success' => 'Success',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorInfo) {
            $res['ErrorInfo'] = $this->errorInfo;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorInfo'])) {
            $model->errorInfo = $map['ErrorInfo'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
