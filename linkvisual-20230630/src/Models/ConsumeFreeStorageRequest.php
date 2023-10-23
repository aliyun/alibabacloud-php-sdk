<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20230630\Models;

use AlibabaCloud\Tea\Model;

class ConsumeFreeStorageRequest extends Model
{
    /**
     * @var string
     */
    public $deviceName;

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
    public $preRecordDuration;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var int
     */
    public $quota;
    protected $_name = [
        'deviceName'          => 'DeviceName',
        'enableDefaultPlan'   => 'EnableDefaultPlan',
        'eventRecordDuration' => 'EventRecordDuration',
        'eventRecordProlong'  => 'EventRecordProlong',
        'immediateUse'        => 'ImmediateUse',
        'iotId'               => 'IotId',
        'preRecordDuration'   => 'PreRecordDuration',
        'productKey'          => 'ProductKey',
        'quota'               => 'Quota',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
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
        if (null !== $this->preRecordDuration) {
            $res['PreRecordDuration'] = $this->preRecordDuration;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->quota) {
            $res['Quota'] = $this->quota;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConsumeFreeStorageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
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
        if (isset($map['PreRecordDuration'])) {
            $model->preRecordDuration = $map['PreRecordDuration'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['Quota'])) {
            $model->quota = $map['Quota'];
        }

        return $model;
    }
}
