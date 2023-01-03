<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchCheckVehicleDeviceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $invalidDeviceIdList;

    /**
     * @var string[]
     */
    public $invalidDeviceModelList;

    /**
     * @var string[]
     */
    public $invalidManufacturerList;

    /**
     * @var string[]
     */
    public $repeatedDeviceIdList;
    protected $_name = [
        'invalidDeviceIdList'     => 'InvalidDeviceIdList',
        'invalidDeviceModelList'  => 'InvalidDeviceModelList',
        'invalidManufacturerList' => 'InvalidManufacturerList',
        'repeatedDeviceIdList'    => 'RepeatedDeviceIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invalidDeviceIdList) {
            $res['InvalidDeviceIdList'] = $this->invalidDeviceIdList;
        }
        if (null !== $this->invalidDeviceModelList) {
            $res['InvalidDeviceModelList'] = $this->invalidDeviceModelList;
        }
        if (null !== $this->invalidManufacturerList) {
            $res['InvalidManufacturerList'] = $this->invalidManufacturerList;
        }
        if (null !== $this->repeatedDeviceIdList) {
            $res['RepeatedDeviceIdList'] = $this->repeatedDeviceIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InvalidDeviceIdList'])) {
            if (!empty($map['InvalidDeviceIdList'])) {
                $model->invalidDeviceIdList = $map['InvalidDeviceIdList'];
            }
        }
        if (isset($map['InvalidDeviceModelList'])) {
            if (!empty($map['InvalidDeviceModelList'])) {
                $model->invalidDeviceModelList = $map['InvalidDeviceModelList'];
            }
        }
        if (isset($map['InvalidManufacturerList'])) {
            if (!empty($map['InvalidManufacturerList'])) {
                $model->invalidManufacturerList = $map['InvalidManufacturerList'];
            }
        }
        if (isset($map['RepeatedDeviceIdList'])) {
            if (!empty($map['RepeatedDeviceIdList'])) {
                $model->repeatedDeviceIdList = $map['RepeatedDeviceIdList'];
            }
        }

        return $model;
    }
}
