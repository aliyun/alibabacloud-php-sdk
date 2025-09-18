<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models\QueryDeviceListResponseBody\deviceList;

class QueryDeviceListResponseBody extends Model
{
    /**
     * @var deviceList[]
     */
    public $deviceList;

    /**
     * @var string
     */
    public $encodeKey;

    /**
     * @var string
     */
    public $encodeType;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deviceList' => 'DeviceList',
        'encodeKey' => 'EncodeKey',
        'encodeType' => 'EncodeType',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->deviceList)) {
            Model::validateArray($this->deviceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceList) {
            if (\is_array($this->deviceList)) {
                $res['DeviceList'] = [];
                $n1 = 0;
                foreach ($this->deviceList as $item1) {
                    $res['DeviceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->encodeKey) {
            $res['EncodeKey'] = $this->encodeKey;
        }

        if (null !== $this->encodeType) {
            $res['EncodeType'] = $this->encodeType;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DeviceList'])) {
            if (!empty($map['DeviceList'])) {
                $model->deviceList = [];
                $n1 = 0;
                foreach ($map['DeviceList'] as $item1) {
                    $model->deviceList[$n1] = deviceList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['EncodeKey'])) {
            $model->encodeKey = $map['EncodeKey'];
        }

        if (isset($map['EncodeType'])) {
            $model->encodeType = $map['EncodeType'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
