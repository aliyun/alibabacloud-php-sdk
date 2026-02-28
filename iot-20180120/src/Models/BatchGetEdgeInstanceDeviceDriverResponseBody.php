<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetEdgeInstanceDeviceDriverResponseBody\deviceDriverList;

class BatchGetEdgeInstanceDeviceDriverResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var deviceDriverList[]
     */
    public $deviceDriverList;

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
        'deviceDriverList' => 'DeviceDriverList',
        'errorMessage' => 'ErrorMessage',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->deviceDriverList)) {
            Model::validateArray($this->deviceDriverList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->deviceDriverList) {
            if (\is_array($this->deviceDriverList)) {
                $res['DeviceDriverList'] = [];
                $n1 = 0;
                foreach ($this->deviceDriverList as $item1) {
                    $res['DeviceDriverList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['DeviceDriverList'])) {
            if (!empty($map['DeviceDriverList'])) {
                $model->deviceDriverList = [];
                $n1 = 0;
                foreach ($map['DeviceDriverList'] as $item1) {
                    $model->deviceDriverList[$n1] = deviceDriverList::fromMap($item1);
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
