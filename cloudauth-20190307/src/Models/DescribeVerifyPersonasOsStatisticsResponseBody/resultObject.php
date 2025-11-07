<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyPersonasOsStatisticsResponseBody;

use AlibabaCloud\Dara\Model;

class resultObject extends Model
{
    /**
     * @var int
     */
    public $allDeviceCnt;

    /**
     * @var int
     */
    public $deviceAndroidCnt;

    /**
     * @var string
     */
    public $deviceAndroidRate;

    /**
     * @var int
     */
    public $deviceIosCnt;

    /**
     * @var string
     */
    public $deviceIosRate;
    protected $_name = [
        'allDeviceCnt' => 'AllDeviceCnt',
        'deviceAndroidCnt' => 'DeviceAndroidCnt',
        'deviceAndroidRate' => 'DeviceAndroidRate',
        'deviceIosCnt' => 'DeviceIosCnt',
        'deviceIosRate' => 'DeviceIosRate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allDeviceCnt) {
            $res['AllDeviceCnt'] = $this->allDeviceCnt;
        }

        if (null !== $this->deviceAndroidCnt) {
            $res['DeviceAndroidCnt'] = $this->deviceAndroidCnt;
        }

        if (null !== $this->deviceAndroidRate) {
            $res['DeviceAndroidRate'] = $this->deviceAndroidRate;
        }

        if (null !== $this->deviceIosCnt) {
            $res['DeviceIosCnt'] = $this->deviceIosCnt;
        }

        if (null !== $this->deviceIosRate) {
            $res['DeviceIosRate'] = $this->deviceIosRate;
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
        if (isset($map['AllDeviceCnt'])) {
            $model->allDeviceCnt = $map['AllDeviceCnt'];
        }

        if (isset($map['DeviceAndroidCnt'])) {
            $model->deviceAndroidCnt = $map['DeviceAndroidCnt'];
        }

        if (isset($map['DeviceAndroidRate'])) {
            $model->deviceAndroidRate = $map['DeviceAndroidRate'];
        }

        if (isset($map['DeviceIosCnt'])) {
            $model->deviceIosCnt = $map['DeviceIosCnt'];
        }

        if (isset($map['DeviceIosRate'])) {
            $model->deviceIosRate = $map['DeviceIosRate'];
        }

        return $model;
    }
}
