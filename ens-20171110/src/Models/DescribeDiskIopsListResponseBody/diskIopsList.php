<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDiskIopsListResponseBody;

use AlibabaCloud\Tea\Model;

class diskIopsList extends Model
{
    /**
     * @description The business time . The time is displayed in the yyyy-MM-dd HH:mm:ss.
     *
     * @example 2023-12-14 00:00:00
     *
     * @var string
     */
    public $bizTime;

    /**
     * @description The ID of the disk.
     *
     * @example d-5tzm9wnhzlhjzcbtxo465****
     *
     * @var string
     */
    public $diskId;

    /**
     * @description The read throughput. Unit: bytes.
     *
     * @example 10054
     *
     * @var int
     */
    public $readBytes;

    /**
     * @description The read latency. Unit: ms.
     *
     * @example 15646532
     *
     * @var int
     */
    public $readLatency;

    /**
     * @description The read IOPS.
     *
     * @example 4
     *
     * @var int
     */
    public $readOps;

    /**
     * @description The ID of the node.
     *
     * @example cn-hangzhou-3
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The write throughput. Unit: bytes.
     *
     * @example 0
     *
     * @var int
     */
    public $writeBytes;

    /**
     * @description The write latency. Unit: microseconds.
     *
     * @example 0
     *
     * @var int
     */
    public $writeLatency;

    /**
     * @description The write IOPS.
     *
     * @example 0
     *
     * @var int
     */
    public $writeOps;
    protected $_name = [
        'bizTime'      => 'BizTime',
        'diskId'       => 'DiskId',
        'readBytes'    => 'ReadBytes',
        'readLatency'  => 'ReadLatency',
        'readOps'      => 'ReadOps',
        'regionId'     => 'RegionId',
        'writeBytes'   => 'WriteBytes',
        'writeLatency' => 'WriteLatency',
        'writeOps'     => 'WriteOps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizTime) {
            $res['BizTime'] = $this->bizTime;
        }
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->readBytes) {
            $res['ReadBytes'] = $this->readBytes;
        }
        if (null !== $this->readLatency) {
            $res['ReadLatency'] = $this->readLatency;
        }
        if (null !== $this->readOps) {
            $res['ReadOps'] = $this->readOps;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->writeBytes) {
            $res['WriteBytes'] = $this->writeBytes;
        }
        if (null !== $this->writeLatency) {
            $res['WriteLatency'] = $this->writeLatency;
        }
        if (null !== $this->writeOps) {
            $res['WriteOps'] = $this->writeOps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diskIopsList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizTime'])) {
            $model->bizTime = $map['BizTime'];
        }
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['ReadBytes'])) {
            $model->readBytes = $map['ReadBytes'];
        }
        if (isset($map['ReadLatency'])) {
            $model->readLatency = $map['ReadLatency'];
        }
        if (isset($map['ReadOps'])) {
            $model->readOps = $map['ReadOps'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['WriteBytes'])) {
            $model->writeBytes = $map['WriteBytes'];
        }
        if (isset($map['WriteLatency'])) {
            $model->writeLatency = $map['WriteLatency'];
        }
        if (isset($map['WriteOps'])) {
            $model->writeOps = $map['WriteOps'];
        }

        return $model;
    }
}
