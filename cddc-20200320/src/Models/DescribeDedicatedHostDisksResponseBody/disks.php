<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostDisksResponseBody;

use AlibabaCloud\Tea\Model;

class disks extends Model
{
    /**
     * @description The storage type of the host. Valid values:
     *
     *   **cloud_ssd**: local SSD.
     *   **cloud_essd**: ESSD.
     *
     * @example cloud_essd
     *
     * @var string
     */
    public $category;

    /**
     * @description The ID of the instance that uses the disk.
     *
     * @example rm-bp121zcqr5h8m****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The device name of the instance to which the ESSD or local SSD is attached.
     *
     * @example /dev/xvdb
     *
     * @var string
     */
    public $device;

    /**
     * @description The ID of the ESSD or local SSD.
     *
     * @example d-bp1dffpog8r2eowd****
     *
     * @var string
     */
    public $diskId;

    /**
     * @description Indicates whether the disk is attached to instances. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $hasDBInstance;

    /**
     * @description The maximum IOPS of the disk, which is displayed after being divided by 10,000.
     *
     * @example 18250
     *
     * @var int
     */
    public $maxIOPS;

    /**
     * @description The maximum throughput of the disk. Unit: MB/s.
     *
     * @example 284
     *
     * @var int
     */
    public $maxThroughput;

    /**
     * @description The performance level of the ESSD.
     *
     * >  ApsaraDB for MyBase provides the following types of ESSDs: **ESSD**, **PL2 ESSD**, and **PL3 ESSD**. The higher performance level delivers better ESSD performance.
     * @example PL1
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @description The size of the ESSD or local SSD. Unit: GB.
     *
     * @example 329
     *
     * @var int
     */
    public $size;

    /**
     * @description The state of the ESSD. Valid values:
     *
     *   **In_use**
     *   **Available**
     *   **Attaching**
     *   **Detaching**
     *   **Creating**
     *   **ReIniting**
     *
     * @example In_use
     *
     * @var string
     */
    public $status;

    /**
     * @description The disk type of the enhanced SSD (ESSD) or local SSD. Valid values:
     *
     *   **system**: system disk.
     *   **data**: data disk.
     *
     * @example data
     *
     * @var string
     */
    public $type;

    /**
     * @description The zone ID of the ESSD or local SSD.
     *
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
