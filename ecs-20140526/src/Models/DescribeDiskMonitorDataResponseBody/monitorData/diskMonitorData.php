<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDiskMonitorDataResponseBody\monitorData;

use AlibabaCloud\Tea\Model;

class diskMonitorData extends Model
{
    /**
     * @description The read bandwidth of the system disk. Unit: byte/s.
     *
     * @example 0
     *
     * @var int
     */
    public $BPSRead;

    /**
     * @description The total read and write bandwidth of the system disk. Unit: byte/s.
     *
     * @example 204
     *
     * @var int
     */
    public $BPSTotal;

    /**
     * @description The write bandwidth of the system disk. Unit: byte/s.
     *
     * @example 204
     *
     * @var int
     */
    public $BPSWrite;

    /**
     * @description The disk ID.
     *
     * @example d-bp1bq5g3dxxo1x4o****
     *
     * @var string
     */
    public $diskId;

    /**
     * @description The number of read I/O operations per second on the system disk.
     *
     * @example 0
     *
     * @var int
     */
    public $IOPSRead;

    /**
     * @description The total number of read and write I/O operations per second on the system disk.
     *
     * @example 0
     *
     * @var int
     */
    public $IOPSTotal;

    /**
     * @description The number of write I/O operations per second on the system disk.
     *
     * @example 0
     *
     * @var int
     */
    public $IOPSWrite;

    /**
     * @description The read latency of the disk. Unit: microseconds.
     *
     * @example 0
     *
     * @var int
     */
    public $latencyRead;

    /**
     * @description The write latency of the disk. Unit: microseconds.
     *
     * @example 0
     *
     * @var int
     */
    public $latencyWrite;

    /**
     * @description The timestamp to query the monitoring data. The time follows the [ISO 8601](~~25696~~) standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2014-07-23T12:07:00Z
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'BPSRead'      => 'BPSRead',
        'BPSTotal'     => 'BPSTotal',
        'BPSWrite'     => 'BPSWrite',
        'diskId'       => 'DiskId',
        'IOPSRead'     => 'IOPSRead',
        'IOPSTotal'    => 'IOPSTotal',
        'IOPSWrite'    => 'IOPSWrite',
        'latencyRead'  => 'LatencyRead',
        'latencyWrite' => 'LatencyWrite',
        'timeStamp'    => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->BPSRead) {
            $res['BPSRead'] = $this->BPSRead;
        }
        if (null !== $this->BPSTotal) {
            $res['BPSTotal'] = $this->BPSTotal;
        }
        if (null !== $this->BPSWrite) {
            $res['BPSWrite'] = $this->BPSWrite;
        }
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->IOPSRead) {
            $res['IOPSRead'] = $this->IOPSRead;
        }
        if (null !== $this->IOPSTotal) {
            $res['IOPSTotal'] = $this->IOPSTotal;
        }
        if (null !== $this->IOPSWrite) {
            $res['IOPSWrite'] = $this->IOPSWrite;
        }
        if (null !== $this->latencyRead) {
            $res['LatencyRead'] = $this->latencyRead;
        }
        if (null !== $this->latencyWrite) {
            $res['LatencyWrite'] = $this->latencyWrite;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diskMonitorData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BPSRead'])) {
            $model->BPSRead = $map['BPSRead'];
        }
        if (isset($map['BPSTotal'])) {
            $model->BPSTotal = $map['BPSTotal'];
        }
        if (isset($map['BPSWrite'])) {
            $model->BPSWrite = $map['BPSWrite'];
        }
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['IOPSRead'])) {
            $model->IOPSRead = $map['IOPSRead'];
        }
        if (isset($map['IOPSTotal'])) {
            $model->IOPSTotal = $map['IOPSTotal'];
        }
        if (isset($map['IOPSWrite'])) {
            $model->IOPSWrite = $map['IOPSWrite'];
        }
        if (isset($map['LatencyRead'])) {
            $model->latencyRead = $map['LatencyRead'];
        }
        if (isset($map['LatencyWrite'])) {
            $model->latencyWrite = $map['LatencyWrite'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
