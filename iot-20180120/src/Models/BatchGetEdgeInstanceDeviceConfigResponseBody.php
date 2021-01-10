<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetEdgeInstanceDeviceConfigResponseBody\deviceConfigList;
use AlibabaCloud\Tea\Model;

class BatchGetEdgeInstanceDeviceConfigResponseBody extends Model
{
    /**
     * @var deviceConfigList[]
     */
    public $deviceConfigList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'deviceConfigList' => 'DeviceConfigList',
        'requestId'        => 'RequestId',
        'errorMessage'     => 'ErrorMessage',
        'code'             => 'Code',
        'success'          => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceConfigList) {
            $res['DeviceConfigList'] = [];
            if (null !== $this->deviceConfigList && \is_array($this->deviceConfigList)) {
                $n = 0;
                foreach ($this->deviceConfigList as $item) {
                    $res['DeviceConfigList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchGetEdgeInstanceDeviceConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceConfigList'])) {
            if (!empty($map['DeviceConfigList'])) {
                $model->deviceConfigList = [];
                $n                       = 0;
                foreach ($map['DeviceConfigList'] as $item) {
                    $model->deviceConfigList[$n++] = null !== $item ? deviceConfigList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
