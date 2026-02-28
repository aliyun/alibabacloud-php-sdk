<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\AddDeviceToSharePromotionRequest\deviceSimpleInfoList;

class AddDeviceToSharePromotionRequest extends Model
{
    /**
     * @var deviceSimpleInfoList[]
     */
    public $deviceSimpleInfoList;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $sharePromotionActivityId;

    /**
     * @var string
     */
    public $shareTaskCode;
    protected $_name = [
        'deviceSimpleInfoList' => 'DeviceSimpleInfoList',
        'iotInstanceId' => 'IotInstanceId',
        'sharePromotionActivityId' => 'SharePromotionActivityId',
        'shareTaskCode' => 'ShareTaskCode',
    ];

    public function validate()
    {
        if (\is_array($this->deviceSimpleInfoList)) {
            Model::validateArray($this->deviceSimpleInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceSimpleInfoList) {
            if (\is_array($this->deviceSimpleInfoList)) {
                $res['DeviceSimpleInfoList'] = [];
                $n1 = 0;
                foreach ($this->deviceSimpleInfoList as $item1) {
                    $res['DeviceSimpleInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        if (null !== $this->sharePromotionActivityId) {
            $res['SharePromotionActivityId'] = $this->sharePromotionActivityId;
        }

        if (null !== $this->shareTaskCode) {
            $res['ShareTaskCode'] = $this->shareTaskCode;
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
        if (isset($map['DeviceSimpleInfoList'])) {
            if (!empty($map['DeviceSimpleInfoList'])) {
                $model->deviceSimpleInfoList = [];
                $n1 = 0;
                foreach ($map['DeviceSimpleInfoList'] as $item1) {
                    $model->deviceSimpleInfoList[$n1] = deviceSimpleInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        if (isset($map['SharePromotionActivityId'])) {
            $model->sharePromotionActivityId = $map['SharePromotionActivityId'];
        }

        if (isset($map['ShareTaskCode'])) {
            $model->shareTaskCode = $map['ShareTaskCode'];
        }

        return $model;
    }
}
