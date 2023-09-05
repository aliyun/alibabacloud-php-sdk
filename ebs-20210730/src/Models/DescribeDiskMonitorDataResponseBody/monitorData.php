<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDiskMonitorDataResponseBody;

use AlibabaCloud\Tea\Model;

class monitorData extends Model
{
    /**
     * @description The percentage of BPS.
     *
     * @example 80(%)
     *
     * @var int
     */
    public $BPSPercent;

    /**
     * @description The number of burst I/O operations.
     *
     * @example 0
     *
     * @var int
     */
    public $burstIOCount;

    /**
     * @description The ID of the disk.
     *
     * @example d-bp1bq5g3dxxo1x4o****
     *
     * @var string
     */
    public $diskId;

    /**
     * @description The percentage of IOPS.
     *
     * @example 80(%)
     *
     * @var int
     */
    public $IOPSPercent;

    /**
     * @description The read bandwidth of the disk. Unit: Mbit/s.
     *
     * @example 10
     *
     * @var int
     */
    public $readBPS;

    /**
     * @description The maximum number of read IOPS.
     *
     * @example 2000
     *
     * @var int
     */
    public $readIOPS;

    /**
     * @description The timestamp that is used to query the near real-time monitoring data of the disk. The time follows the [ISO 8601](~~25696~~) standard in the `yyyy-MM-ddTHH:mm:ssZ` format. The time is displayed in UTC.
     *
     * @example 2022-06-01T08:00:00Z
     *
     * @var string
     */
    public $timestamp;

    /**
     * @description The write bandwidth of the disk. Unit: Mbit/s.
     *
     * @example 204
     *
     * @var int
     */
    public $writeBPS;

    /**
     * @description The maximum number of write IOPS.
     *
     * @example 2000
     *
     * @var int
     */
    public $writeIOPS;
    protected $_name = [
        'BPSPercent'   => 'BPSPercent',
        'burstIOCount' => 'BurstIOCount',
        'diskId'       => 'DiskId',
        'IOPSPercent'  => 'IOPSPercent',
        'readBPS'      => 'ReadBPS',
        'readIOPS'     => 'ReadIOPS',
        'timestamp'    => 'Timestamp',
        'writeBPS'     => 'WriteBPS',
        'writeIOPS'    => 'WriteIOPS',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->BPSPercent) {
            $res['BPSPercent'] = $this->BPSPercent;
        }
        if (null !== $this->burstIOCount) {
            $res['BurstIOCount'] = $this->burstIOCount;
        }
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->IOPSPercent) {
            $res['IOPSPercent'] = $this->IOPSPercent;
        }
        if (null !== $this->readBPS) {
            $res['ReadBPS'] = $this->readBPS;
        }
        if (null !== $this->readIOPS) {
            $res['ReadIOPS'] = $this->readIOPS;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->writeBPS) {
            $res['WriteBPS'] = $this->writeBPS;
        }
        if (null !== $this->writeIOPS) {
            $res['WriteIOPS'] = $this->writeIOPS;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return monitorData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BPSPercent'])) {
            $model->BPSPercent = $map['BPSPercent'];
        }
        if (isset($map['BurstIOCount'])) {
            $model->burstIOCount = $map['BurstIOCount'];
        }
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['IOPSPercent'])) {
            $model->IOPSPercent = $map['IOPSPercent'];
        }
        if (isset($map['ReadBPS'])) {
            $model->readBPS = $map['ReadBPS'];
        }
        if (isset($map['ReadIOPS'])) {
            $model->readIOPS = $map['ReadIOPS'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['WriteBPS'])) {
            $model->writeBPS = $map['WriteBPS'];
        }
        if (isset($map['WriteIOPS'])) {
            $model->writeIOPS = $map['WriteIOPS'];
        }

        return $model;
    }
}
