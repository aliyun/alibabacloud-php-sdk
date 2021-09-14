<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostDisksResponseBody;

use AlibabaCloud\Tea\Model;

class disks extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $performanceLevel;

    /**
     * @var string
     */
    public $diskId;

    /**
     * @var int
     */
    public $maxThroughput;

    /**
     * @var int
     */
    public $maxIOPS;

    /**
     * @var bool
     */
    public $hasDBInstance;

    /**
     * @var string
     */
    public $device;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $DBInstanceId;
    protected $_name = [
        'type'             => 'Type',
        'status'           => 'Status',
        'performanceLevel' => 'PerformanceLevel',
        'diskId'           => 'DiskId',
        'maxThroughput'    => 'MaxThroughput',
        'maxIOPS'          => 'MaxIOPS',
        'hasDBInstance'    => 'HasDBInstance',
        'device'           => 'Device',
        'size'             => 'Size',
        'zoneId'           => 'ZoneId',
        'category'         => 'Category',
        'DBInstanceId'     => 'DBInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->performanceLevel) {
            $res['PerformanceLevel'] = $this->performanceLevel;
        }
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->maxThroughput) {
            $res['MaxThroughput'] = $this->maxThroughput;
        }
        if (null !== $this->maxIOPS) {
            $res['MaxIOPS'] = $this->maxIOPS;
        }
        if (null !== $this->hasDBInstance) {
            $res['HasDBInstance'] = $this->hasDBInstance;
        }
        if (null !== $this->device) {
            $res['Device'] = $this->device;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return disks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['PerformanceLevel'])) {
            $model->performanceLevel = $map['PerformanceLevel'];
        }
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['MaxThroughput'])) {
            $model->maxThroughput = $map['MaxThroughput'];
        }
        if (isset($map['MaxIOPS'])) {
            $model->maxIOPS = $map['MaxIOPS'];
        }
        if (isset($map['HasDBInstance'])) {
            $model->hasDBInstance = $map['HasDBInstance'];
        }
        if (isset($map['Device'])) {
            $model->device = $map['Device'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        return $model;
    }
}
