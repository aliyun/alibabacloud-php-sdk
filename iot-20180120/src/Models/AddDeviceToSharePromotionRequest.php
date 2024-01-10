<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\AddDeviceToSharePromotionRequest\deviceSimpleInfoList;
use AlibabaCloud\Tea\Model;

class AddDeviceToSharePromotionRequest extends Model
{
    /**
     * @var deviceSimpleInfoList[]
     */
    public $deviceSimpleInfoList;

    /**
     * @example iot-cv3********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example 61******_****_4901_****_47***********
     *
     * @var string
     */
    public $sharePromotionActivityId;

    /**
     * @example 52******_7**e_4**3_9**e_61**********
     *
     * @var string
     */
    public $shareTaskCode;
    protected $_name = [
        'deviceSimpleInfoList'     => 'DeviceSimpleInfoList',
        'iotInstanceId'            => 'IotInstanceId',
        'sharePromotionActivityId' => 'SharePromotionActivityId',
        'shareTaskCode'            => 'ShareTaskCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceSimpleInfoList) {
            $res['DeviceSimpleInfoList'] = [];
            if (null !== $this->deviceSimpleInfoList && \is_array($this->deviceSimpleInfoList)) {
                $n = 0;
                foreach ($this->deviceSimpleInfoList as $item) {
                    $res['DeviceSimpleInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return AddDeviceToSharePromotionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceSimpleInfoList'])) {
            if (!empty($map['DeviceSimpleInfoList'])) {
                $model->deviceSimpleInfoList = [];
                $n                           = 0;
                foreach ($map['DeviceSimpleInfoList'] as $item) {
                    $model->deviceSimpleInfoList[$n++] = null !== $item ? deviceSimpleInfoList::fromMap($item) : $item;
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
