<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetDeviceStateResponseBody\deviceStatusList;
use AlibabaCloud\Tea\Model;

class BatchGetDeviceStateResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var deviceStatusList
     */
    public $deviceStatusList;
    protected $_name = [
        'requestId'        => 'RequestId',
        'success'          => 'Success',
        'code'             => 'Code',
        'errorMessage'     => 'ErrorMessage',
        'deviceStatusList' => 'DeviceStatusList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->deviceStatusList) {
            $res['DeviceStatusList'] = null !== $this->deviceStatusList ? $this->deviceStatusList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchGetDeviceStateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['DeviceStatusList'])) {
            $model->deviceStatusList = deviceStatusList::fromMap($map['DeviceStatusList']);
        }

        return $model;
    }
}
