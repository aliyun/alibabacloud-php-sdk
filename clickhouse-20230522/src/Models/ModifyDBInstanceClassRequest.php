<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models;

use AlibabaCloud\Dara\Model;

class ModifyDBInstanceClassRequest extends Model
{
    /**
     * @var string
     */
    public $computingGroupId;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var int
     */
    public $nodeCount;

    /**
     * @var int
     */
    public $nodeScaleMax;

    /**
     * @var int
     */
    public $nodeScaleMin;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $scaleMax;

    /**
     * @var int
     */
    public $scaleMin;

    /**
     * @var int
     */
    public $storageQuota;

    /**
     * @var string
     */
    public $storageType;
    protected $_name = [
        'computingGroupId' => 'ComputingGroupId',
        'DBInstanceId' => 'DBInstanceId',
        'nodeCount' => 'NodeCount',
        'nodeScaleMax' => 'NodeScaleMax',
        'nodeScaleMin' => 'NodeScaleMin',
        'regionId' => 'RegionId',
        'scaleMax' => 'ScaleMax',
        'scaleMin' => 'ScaleMin',
        'storageQuota' => 'StorageQuota',
        'storageType' => 'StorageType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->computingGroupId) {
            $res['ComputingGroupId'] = $this->computingGroupId;
        }

        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->nodeCount) {
            $res['NodeCount'] = $this->nodeCount;
        }

        if (null !== $this->nodeScaleMax) {
            $res['NodeScaleMax'] = $this->nodeScaleMax;
        }

        if (null !== $this->nodeScaleMin) {
            $res['NodeScaleMin'] = $this->nodeScaleMin;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->scaleMax) {
            $res['ScaleMax'] = $this->scaleMax;
        }

        if (null !== $this->scaleMin) {
            $res['ScaleMin'] = $this->scaleMin;
        }

        if (null !== $this->storageQuota) {
            $res['StorageQuota'] = $this->storageQuota;
        }

        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
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
        if (isset($map['ComputingGroupId'])) {
            $model->computingGroupId = $map['ComputingGroupId'];
        }

        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['NodeCount'])) {
            $model->nodeCount = $map['NodeCount'];
        }

        if (isset($map['NodeScaleMax'])) {
            $model->nodeScaleMax = $map['NodeScaleMax'];
        }

        if (isset($map['NodeScaleMin'])) {
            $model->nodeScaleMin = $map['NodeScaleMin'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ScaleMax'])) {
            $model->scaleMax = $map['ScaleMax'];
        }

        if (isset($map['ScaleMin'])) {
            $model->scaleMin = $map['ScaleMin'];
        }

        if (isset($map['StorageQuota'])) {
            $model->storageQuota = $map['StorageQuota'];
        }

        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        return $model;
    }
}
