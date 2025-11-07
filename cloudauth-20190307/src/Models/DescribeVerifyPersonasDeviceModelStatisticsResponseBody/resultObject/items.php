<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyPersonasDeviceModelStatisticsResponseBody\resultObject;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var int
     */
    public $deviceCnt;

    /**
     * @var string
     */
    public $deviceModel;

    /**
     * @var string
     */
    public $deviceRate;
    protected $_name = [
        'deviceCnt' => 'DeviceCnt',
        'deviceModel' => 'DeviceModel',
        'deviceRate' => 'DeviceRate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceCnt) {
            $res['DeviceCnt'] = $this->deviceCnt;
        }

        if (null !== $this->deviceModel) {
            $res['DeviceModel'] = $this->deviceModel;
        }

        if (null !== $this->deviceRate) {
            $res['DeviceRate'] = $this->deviceRate;
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
        if (isset($map['DeviceCnt'])) {
            $model->deviceCnt = $map['DeviceCnt'];
        }

        if (isset($map['DeviceModel'])) {
            $model->deviceModel = $map['DeviceModel'];
        }

        if (isset($map['DeviceRate'])) {
            $model->deviceRate = $map['DeviceRate'];
        }

        return $model;
    }
}
