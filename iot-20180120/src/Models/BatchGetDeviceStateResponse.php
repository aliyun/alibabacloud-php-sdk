<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetDeviceStateResponse\deviceStatusList;
use AlibabaCloud\Tea\Model;

class BatchGetDeviceStateResponse extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var deviceStatusList
     */
    public $deviceStatusList;
    protected $_name = [
        'code'             => 'Code',
        'errorMessage'     => 'ErrorMessage',
        'requestId'        => 'RequestId',
        'success'          => 'Success',
        'deviceStatusList' => 'DeviceStatusList',
    ];

    public function validate()
    {
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('errorMessage', $this->errorMessage, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('deviceStatusList', $this->deviceStatusList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->deviceStatusList) {
            $res['DeviceStatusList'] = null !== $this->deviceStatusList ? $this->deviceStatusList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchGetDeviceStateResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['DeviceStatusList'])) {
            $model->deviceStatusList = deviceStatusList::fromMap($map['DeviceStatusList']);
        }

        return $model;
    }
}
