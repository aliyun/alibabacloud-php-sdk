<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetEdgeInstanceDeviceChannelResponseBody\deviceChannelList;

class BatchGetEdgeInstanceDeviceChannelResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var deviceChannelList[]
     */
    public $deviceChannelList;

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
    protected $_name = [
        'code' => 'Code',
        'deviceChannelList' => 'DeviceChannelList',
        'errorMessage' => 'ErrorMessage',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->deviceChannelList)) {
            Model::validateArray($this->deviceChannelList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->deviceChannelList) {
            if (\is_array($this->deviceChannelList)) {
                $res['DeviceChannelList'] = [];
                $n1 = 0;
                foreach ($this->deviceChannelList as $item1) {
                    $res['DeviceChannelList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['DeviceChannelList'])) {
            if (!empty($map['DeviceChannelList'])) {
                $model->deviceChannelList = [];
                $n1 = 0;
                foreach ($map['DeviceChannelList'] as $item1) {
                    $model->deviceChannelList[$n1] = deviceChannelList::fromMap($item1);
                    ++$n1;
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
