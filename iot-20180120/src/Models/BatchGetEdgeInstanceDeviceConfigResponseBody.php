<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetEdgeInstanceDeviceConfigResponseBody\deviceConfigList;
use AlibabaCloud\Tea\Model;

class BatchGetEdgeInstanceDeviceConfigResponseBody extends Model
{
    /**
     * @description The return code of the operation. A value of Success indicates that the call was successful. Other values indicate that specific errors occurred. For more information, see [Error codes](~~135200~~).
     *
     * @example Success
     *
     * @var string
     */
    public $code;

    /**
     * @description The device configuration information that is returned if the call was successful.
     *
     * @var deviceConfigList[]
     */
    public $deviceConfigList;

    /**
     * @description The error message that is returned if the call failed.
     *
     * @example request parameter error
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The ID of the request.
     *
     * @example D4A102C2-36A5-4964-9694-0F8EFF95CCA8
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the call was successful. A value of true indicates that the call was successful. A value of false indicates that the call failed.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'             => 'Code',
        'deviceConfigList' => 'DeviceConfigList',
        'errorMessage'     => 'ErrorMessage',
        'requestId'        => 'RequestId',
        'success'          => 'Success',
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
        if (null !== $this->deviceConfigList) {
            $res['DeviceConfigList'] = [];
            if (null !== $this->deviceConfigList && \is_array($this->deviceConfigList)) {
                $n = 0;
                foreach ($this->deviceConfigList as $item) {
                    $res['DeviceConfigList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
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
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
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
