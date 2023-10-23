<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20230630\Models;

use AlibabaCloud\Tea\Model;

class CreateAndPayStorageOrderRequest extends Model
{
    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var int
     */
    public $copies;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var bool
     */
    public $deviceNoOwner;

    /**
     * @var bool
     */
    public $enableDefaultPlan;

    /**
     * @var int
     */
    public $eventRecordDuration;

    /**
     * @var bool
     */
    public $eventRecordProlong;

    /**
     * @var bool
     */
    public $immediateUse;

    /**
     * @var string
     */
    public $iotId;

    /**
     * @var int
     */
    public $maxRecordFileDuration;

    /**
     * @var int
     */
    public $preRecordDuration;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $specification;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'commodityCode'         => 'CommodityCode',
        'copies'                => 'Copies',
        'deviceName'            => 'DeviceName',
        'deviceNoOwner'         => 'DeviceNoOwner',
        'enableDefaultPlan'     => 'EnableDefaultPlan',
        'eventRecordDuration'   => 'EventRecordDuration',
        'eventRecordProlong'    => 'EventRecordProlong',
        'immediateUse'          => 'ImmediateUse',
        'iotId'                 => 'IotId',
        'maxRecordFileDuration' => 'MaxRecordFileDuration',
        'preRecordDuration'     => 'PreRecordDuration',
        'productKey'            => 'ProductKey',
        'specification'         => 'Specification',
        'userId'                => 'UserId',
        'userName'              => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->copies) {
            $res['Copies'] = $this->copies;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->deviceNoOwner) {
            $res['DeviceNoOwner'] = $this->deviceNoOwner;
        }
        if (null !== $this->enableDefaultPlan) {
            $res['EnableDefaultPlan'] = $this->enableDefaultPlan;
        }
        if (null !== $this->eventRecordDuration) {
            $res['EventRecordDuration'] = $this->eventRecordDuration;
        }
        if (null !== $this->eventRecordProlong) {
            $res['EventRecordProlong'] = $this->eventRecordProlong;
        }
        if (null !== $this->immediateUse) {
            $res['ImmediateUse'] = $this->immediateUse;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->maxRecordFileDuration) {
            $res['MaxRecordFileDuration'] = $this->maxRecordFileDuration;
        }
        if (null !== $this->preRecordDuration) {
            $res['PreRecordDuration'] = $this->preRecordDuration;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->specification) {
            $res['Specification'] = $this->specification;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAndPayStorageOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['Copies'])) {
            $model->copies = $map['Copies'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['DeviceNoOwner'])) {
            $model->deviceNoOwner = $map['DeviceNoOwner'];
        }
        if (isset($map['EnableDefaultPlan'])) {
            $model->enableDefaultPlan = $map['EnableDefaultPlan'];
        }
        if (isset($map['EventRecordDuration'])) {
            $model->eventRecordDuration = $map['EventRecordDuration'];
        }
        if (isset($map['EventRecordProlong'])) {
            $model->eventRecordProlong = $map['EventRecordProlong'];
        }
        if (isset($map['ImmediateUse'])) {
            $model->immediateUse = $map['ImmediateUse'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['MaxRecordFileDuration'])) {
            $model->maxRecordFileDuration = $map['MaxRecordFileDuration'];
        }
        if (isset($map['PreRecordDuration'])) {
            $model->preRecordDuration = $map['PreRecordDuration'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['Specification'])) {
            $model->specification = $map['Specification'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
