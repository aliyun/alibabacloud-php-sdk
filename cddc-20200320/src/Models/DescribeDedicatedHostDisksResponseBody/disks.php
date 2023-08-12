<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostDisksResponseBody;

use AlibabaCloud\Tea\Model;

class disks extends Model
{
    /**
     * @example cloud_essd
     *
     * @var string
     */
    public $category;

    /**
     * @example rm-bp121zcqr5h8m****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @example /dev/xvdb
     *
     * @var string
     */
    public $device;

    /**
     * @example d-bp1dffpog8r2eowd****
     *
     * @var string
     */
    public $diskId;

    /**
     * @example true
     *
     * @var bool
     */
    public $hasDBInstance;

    /**
     * @example 18250
     *
     * @var int
     */
    public $maxIOPS;

    /**
     * @example 284
     *
     * @var int
     */
    public $maxThroughput;

    /**
     * @example PL1
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @example 329
     *
     * @var int
     */
    public $size;

    /**
     * @example In_use
     *
     * @var string
     */
    public $status;

    /**
     * @example data
     *
     * @var string
     */
    public $type;

    /**
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'category'         => 'Category',
        'DBInstanceId'     => 'DBInstanceId',
        'device'           => 'Device',
        'diskId'           => 'DiskId',
        'hasDBInstance'    => 'HasDBInstance',
        'maxIOPS'          => 'MaxIOPS',
        'maxThroughput'    => 'MaxThroughput',
        'performanceLevel' => 'PerformanceLevel',
        'size'             => 'Size',
        'status'           => 'Status',
        'type'             => 'Type',
        'zoneId'           => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->device) {
            $res['Device'] = $this->device;
        }
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->hasDBInstance) {
            $res['HasDBInstance'] = $this->hasDBInstance;
        }
        if (null !== $this->maxIOPS) {
            $res['MaxIOPS'] = $this->maxIOPS;
        }
        if (null !== $this->maxThroughput) {
            $res['MaxThroughput'] = $this->maxThroughput;
        }
        if (null !== $this->performanceLevel) {
            $res['PerformanceLevel'] = $this->performanceLevel;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['Device'])) {
            $model->device = $map['Device'];
        }
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['HasDBInstance'])) {
            $model->hasDBInstance = $map['HasDBInstance'];
        }
        if (isset($map['MaxIOPS'])) {
            $model->maxIOPS = $map['MaxIOPS'];
        }
        if (isset($map['MaxThroughput'])) {
            $model->maxThroughput = $map['MaxThroughput'];
        }
        if (isset($map['PerformanceLevel'])) {
            $model->performanceLevel = $map['PerformanceLevel'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
