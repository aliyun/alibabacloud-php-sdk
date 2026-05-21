<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models;

use AlibabaCloud\Dara\Model;

class UpdateScheduledBackupConfigRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $dataKeepQuantity;

    /**
     * @var string
     */
    public $dstRegion;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var int
     */
    public $hour;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $manualDataKeepQuantity;

    /**
     * @var string
     */
    public $scheduleType;

    /**
     * @var string
     */
    public $week;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'regionId' => 'RegionId',
        'dataKeepQuantity' => 'dataKeepQuantity',
        'dstRegion' => 'dstRegion',
        'enabled' => 'enabled',
        'hour' => 'hour',
        'instanceId' => 'instanceId',
        'manualDataKeepQuantity' => 'manualDataKeepQuantity',
        'scheduleType' => 'scheduleType',
        'week' => 'week',
        'zoneId' => 'zoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->dataKeepQuantity) {
            $res['dataKeepQuantity'] = $this->dataKeepQuantity;
        }

        if (null !== $this->dstRegion) {
            $res['dstRegion'] = $this->dstRegion;
        }

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->hour) {
            $res['hour'] = $this->hour;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->manualDataKeepQuantity) {
            $res['manualDataKeepQuantity'] = $this->manualDataKeepQuantity;
        }

        if (null !== $this->scheduleType) {
            $res['scheduleType'] = $this->scheduleType;
        }

        if (null !== $this->week) {
            $res['week'] = $this->week;
        }

        if (null !== $this->zoneId) {
            $res['zoneId'] = $this->zoneId;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['dataKeepQuantity'])) {
            $model->dataKeepQuantity = $map['dataKeepQuantity'];
        }

        if (isset($map['dstRegion'])) {
            $model->dstRegion = $map['dstRegion'];
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['hour'])) {
            $model->hour = $map['hour'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['manualDataKeepQuantity'])) {
            $model->manualDataKeepQuantity = $map['manualDataKeepQuantity'];
        }

        if (isset($map['scheduleType'])) {
            $model->scheduleType = $map['scheduleType'];
        }

        if (isset($map['week'])) {
            $model->week = $map['week'];
        }

        if (isset($map['zoneId'])) {
            $model->zoneId = $map['zoneId'];
        }

        return $model;
    }
}
