<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportVehicleDeviceResponse;

use AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportVehicleDeviceResponse\data\invalidDetailList;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportVehicleDeviceResponse\data\invalidDeviceIdList;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportVehicleDeviceResponse\data\invalidDeviceModelList;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportVehicleDeviceResponse\data\invalidDeviceNameList;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportVehicleDeviceResponse\data\invalidManufacturerList;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportVehicleDeviceResponse\data\repeatedDeviceIdList;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportVehicleDeviceResponse\data\repeatedDeviceNameList;
use AlibabaCloud\Tea\Model;

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
        'applyId'                 => 'ApplyId',
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
        Model::validateRequired('applyId', $this->applyId, true);
        Model::validateRequired('invalidDetailList', $this->invalidDetailList, true);
        Model::validateRequired('invalidDeviceIdList', $this->invalidDeviceIdList, true);
        Model::validateRequired('invalidDeviceModelList', $this->invalidDeviceModelList, true);
        Model::validateRequired('invalidDeviceNameList', $this->invalidDeviceNameList, true);
        Model::validateRequired('invalidManufacturerList', $this->invalidManufacturerList, true);
        Model::validateRequired('repeatedDeviceIdList', $this->repeatedDeviceIdList, true);
        Model::validateRequired('repeatedDeviceNameList', $this->repeatedDeviceNameList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyId) {
            $res['ApplyId'] = $this->applyId;
        }
        if (null !== $this->invalidDetailList) {
            $res['InvalidDetailList'] = null !== $this->invalidDetailList ? $this->invalidDetailList->toMap() : null;
        }
        if (null !== $this->invalidDeviceIdList) {
            $res['InvalidDeviceIdList'] = null !== $this->invalidDeviceIdList ? $this->invalidDeviceIdList->toMap() : null;
        }
        if (null !== $this->invalidDeviceModelList) {
            $res['InvalidDeviceModelList'] = null !== $this->invalidDeviceModelList ? $this->invalidDeviceModelList->toMap() : null;
        }
        if (null !== $this->invalidDeviceNameList) {
            $res['InvalidDeviceNameList'] = null !== $this->invalidDeviceNameList ? $this->invalidDeviceNameList->toMap() : null;
        }
        if (null !== $this->invalidManufacturerList) {
            $res['InvalidManufacturerList'] = null !== $this->invalidManufacturerList ? $this->invalidManufacturerList->toMap() : null;
        }
        if (null !== $this->repeatedDeviceIdList) {
            $res['RepeatedDeviceIdList'] = null !== $this->repeatedDeviceIdList ? $this->repeatedDeviceIdList->toMap() : null;
        }
        if (null !== $this->repeatedDeviceNameList) {
            $res['RepeatedDeviceNameList'] = null !== $this->repeatedDeviceNameList ? $this->repeatedDeviceNameList->toMap() : null;
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
