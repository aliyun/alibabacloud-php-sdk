<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportVehicleDeviceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportVehicleDeviceResponseBody\data\invalidDetailList;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportVehicleDeviceResponseBody\data\invalidDeviceIdList;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportVehicleDeviceResponseBody\data\invalidDeviceModelList;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportVehicleDeviceResponseBody\data\invalidDeviceNameList;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportVehicleDeviceResponseBody\data\invalidManufacturerList;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportVehicleDeviceResponseBody\data\repeatedDeviceIdList;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportVehicleDeviceResponseBody\data\repeatedDeviceNameList;

class data extends Model
{
    /**
     * @var int
     */
    public $applyId;

    /**
     * @var invalidDetailList
     */
    public $invalidDetailList;

    /**
     * @var invalidDeviceIdList
     */
    public $invalidDeviceIdList;

    /**
     * @var invalidDeviceModelList
     */
    public $invalidDeviceModelList;

    /**
     * @var invalidDeviceNameList
     */
    public $invalidDeviceNameList;

    /**
     * @var invalidManufacturerList
     */
    public $invalidManufacturerList;

    /**
     * @var repeatedDeviceIdList
     */
    public $repeatedDeviceIdList;

    /**
     * @var repeatedDeviceNameList
     */
    public $repeatedDeviceNameList;
    protected $_name = [
        'applyId' => 'ApplyId',
        'invalidDetailList' => 'InvalidDetailList',
        'invalidDeviceIdList' => 'InvalidDeviceIdList',
        'invalidDeviceModelList' => 'InvalidDeviceModelList',
        'invalidDeviceNameList' => 'InvalidDeviceNameList',
        'invalidManufacturerList' => 'InvalidManufacturerList',
        'repeatedDeviceIdList' => 'RepeatedDeviceIdList',
        'repeatedDeviceNameList' => 'RepeatedDeviceNameList',
    ];

    public function validate()
    {
        if (null !== $this->invalidDetailList) {
            $this->invalidDetailList->validate();
        }
        if (null !== $this->invalidDeviceIdList) {
            $this->invalidDeviceIdList->validate();
        }
        if (null !== $this->invalidDeviceModelList) {
            $this->invalidDeviceModelList->validate();
        }
        if (null !== $this->invalidDeviceNameList) {
            $this->invalidDeviceNameList->validate();
        }
        if (null !== $this->invalidManufacturerList) {
            $this->invalidManufacturerList->validate();
        }
        if (null !== $this->repeatedDeviceIdList) {
            $this->repeatedDeviceIdList->validate();
        }
        if (null !== $this->repeatedDeviceNameList) {
            $this->repeatedDeviceNameList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyId) {
            $res['ApplyId'] = $this->applyId;
        }

        if (null !== $this->invalidDetailList) {
            $res['InvalidDetailList'] = null !== $this->invalidDetailList ? $this->invalidDetailList->toArray($noStream) : $this->invalidDetailList;
        }

        if (null !== $this->invalidDeviceIdList) {
            $res['InvalidDeviceIdList'] = null !== $this->invalidDeviceIdList ? $this->invalidDeviceIdList->toArray($noStream) : $this->invalidDeviceIdList;
        }

        if (null !== $this->invalidDeviceModelList) {
            $res['InvalidDeviceModelList'] = null !== $this->invalidDeviceModelList ? $this->invalidDeviceModelList->toArray($noStream) : $this->invalidDeviceModelList;
        }

        if (null !== $this->invalidDeviceNameList) {
            $res['InvalidDeviceNameList'] = null !== $this->invalidDeviceNameList ? $this->invalidDeviceNameList->toArray($noStream) : $this->invalidDeviceNameList;
        }

        if (null !== $this->invalidManufacturerList) {
            $res['InvalidManufacturerList'] = null !== $this->invalidManufacturerList ? $this->invalidManufacturerList->toArray($noStream) : $this->invalidManufacturerList;
        }

        if (null !== $this->repeatedDeviceIdList) {
            $res['RepeatedDeviceIdList'] = null !== $this->repeatedDeviceIdList ? $this->repeatedDeviceIdList->toArray($noStream) : $this->repeatedDeviceIdList;
        }

        if (null !== $this->repeatedDeviceNameList) {
            $res['RepeatedDeviceNameList'] = null !== $this->repeatedDeviceNameList ? $this->repeatedDeviceNameList->toArray($noStream) : $this->repeatedDeviceNameList;
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
        if (isset($map['ApplyId'])) {
            $model->applyId = $map['ApplyId'];
        }

        if (isset($map['InvalidDetailList'])) {
            $model->invalidDetailList = invalidDetailList::fromMap($map['InvalidDetailList']);
        }

        if (isset($map['InvalidDeviceIdList'])) {
            $model->invalidDeviceIdList = invalidDeviceIdList::fromMap($map['InvalidDeviceIdList']);
        }

        if (isset($map['InvalidDeviceModelList'])) {
            $model->invalidDeviceModelList = invalidDeviceModelList::fromMap($map['InvalidDeviceModelList']);
        }

        if (isset($map['InvalidDeviceNameList'])) {
            $model->invalidDeviceNameList = invalidDeviceNameList::fromMap($map['InvalidDeviceNameList']);
        }

        if (isset($map['InvalidManufacturerList'])) {
            $model->invalidManufacturerList = invalidManufacturerList::fromMap($map['InvalidManufacturerList']);
        }

        if (isset($map['RepeatedDeviceIdList'])) {
            $model->repeatedDeviceIdList = repeatedDeviceIdList::fromMap($map['RepeatedDeviceIdList']);
        }

        if (isset($map['RepeatedDeviceNameList'])) {
            $model->repeatedDeviceNameList = repeatedDeviceNameList::fromMap($map['RepeatedDeviceNameList']);
        }

        return $model;
    }
}
