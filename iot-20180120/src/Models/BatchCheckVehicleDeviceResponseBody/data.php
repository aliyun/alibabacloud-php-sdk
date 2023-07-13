<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchCheckVehicleDeviceResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\BatchCheckVehicleDeviceResponseBody\data\invalidDetailList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var invalidDetailList[]
     */
    public $invalidDetailList;

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
    public $invalidDeviceNameList;

    /**
     * @var string[]
     */
    public $invalidManufacturerList;

    /**
     * @var string[]
     */
    public $repeatedDeviceIdList;

    /**
     * @var string[]
     */
    public $repeatedDeviceNameList;
    protected $_name = [
        'invalidDetailList'       => 'InvalidDetailList',
        'invalidDeviceIdList'     => 'InvalidDeviceIdList',
        'invalidDeviceModelList'  => 'InvalidDeviceModelList',
        'invalidDeviceNameList'   => 'InvalidDeviceNameList',
        'invalidManufacturerList' => 'InvalidManufacturerList',
        'repeatedDeviceIdList'    => 'RepeatedDeviceIdList',
        'repeatedDeviceNameList'  => 'RepeatedDeviceNameList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invalidDetailList) {
            $res['InvalidDetailList'] = [];
            if (null !== $this->invalidDetailList && \is_array($this->invalidDetailList)) {
                $n = 0;
                foreach ($this->invalidDetailList as $item) {
                    $res['InvalidDetailList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->invalidDeviceIdList) {
            $res['InvalidDeviceIdList'] = $this->invalidDeviceIdList;
        }
        if (null !== $this->invalidDeviceModelList) {
            $res['InvalidDeviceModelList'] = $this->invalidDeviceModelList;
        }
        if (null !== $this->invalidDeviceNameList) {
            $res['InvalidDeviceNameList'] = $this->invalidDeviceNameList;
        }
        if (null !== $this->invalidManufacturerList) {
            $res['InvalidManufacturerList'] = $this->invalidManufacturerList;
        }
        if (null !== $this->repeatedDeviceIdList) {
            $res['RepeatedDeviceIdList'] = $this->repeatedDeviceIdList;
        }
        if (null !== $this->repeatedDeviceNameList) {
            $res['RepeatedDeviceNameList'] = $this->repeatedDeviceNameList;
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
        if (isset($map['InvalidDetailList'])) {
            if (!empty($map['InvalidDetailList'])) {
                $model->invalidDetailList = [];
                $n                        = 0;
                foreach ($map['InvalidDetailList'] as $item) {
                    $model->invalidDetailList[$n++] = null !== $item ? invalidDetailList::fromMap($item) : $item;
                }
            }
        }
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
        if (isset($map['InvalidDeviceNameList'])) {
            if (!empty($map['InvalidDeviceNameList'])) {
                $model->invalidDeviceNameList = $map['InvalidDeviceNameList'];
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
        if (isset($map['RepeatedDeviceNameList'])) {
            if (!empty($map['RepeatedDeviceNameList'])) {
                $model->repeatedDeviceNameList = $map['RepeatedDeviceNameList'];
            }
        }

        return $model;
    }
}
