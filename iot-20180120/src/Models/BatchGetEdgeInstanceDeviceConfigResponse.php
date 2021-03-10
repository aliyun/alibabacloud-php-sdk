<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetEdgeInstanceDeviceConfigResponse\deviceConfigList;
use AlibabaCloud\Tea\Model;

class BatchGetEdgeInstanceDeviceConfigResponse extends Model
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
     * @var deviceConfigList[]
     */
    public $deviceConfigList;
    protected $_name = [
        'requestId'        => 'RequestId',
        'success'          => 'Success',
        'code'             => 'Code',
        'errorMessage'     => 'ErrorMessage',
        'deviceConfigList' => 'DeviceConfigList',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('errorMessage', $this->errorMessage, true);
        Model::validateRequired('deviceConfigList', $this->deviceConfigList, true);
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
        if (null !== $this->deviceConfigList) {
            $res['DeviceConfigList'] = [];
            if (null !== $this->deviceConfigList && \is_array($this->deviceConfigList)) {
                $n = 0;
                foreach ($this->deviceConfigList as $item) {
                    $res['DeviceConfigList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchGetEdgeInstanceDeviceConfigResponse
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
        if (isset($map['DeviceConfigList'])) {
            if (!empty($map['DeviceConfigList'])) {
                $model->deviceConfigList = [];
                $n                       = 0;
                foreach ($map['DeviceConfigList'] as $item) {
                    $model->deviceConfigList[$n++] = null !== $item ? deviceConfigList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
