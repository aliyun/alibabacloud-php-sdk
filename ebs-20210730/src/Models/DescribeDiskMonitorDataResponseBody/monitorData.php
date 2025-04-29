<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDiskMonitorDataResponseBody;

use AlibabaCloud\Dara\Model;

class monitorData extends Model
{
    /**
     * @var int
     */
    public $BPSPercent;

    /**
     * @var int
     */
    public $burstIOCount;

    /**
     * @var string
     */
    public $diskId;

    /**
     * @var int
     */
    public $IOPSPercent;

    /**
     * @var int
     */
    public $readBPS;

    /**
     * @var int
     */
    public $readBlockSize;

    /**
     * @var int
     */
    public $readIOPS;

    /**
     * @var int
     */
    public $readLatency;

    /**
     * @var string
     */
    public $timestamp;

    /**
     * @var int
     */
    public $writeBPS;

    /**
     * @var int
     */
    public $writeBlockSize;

    /**
     * @var int
     */
    public $writeIOPS;

    /**
     * @var int
     */
    public $writeLatency;
    protected $_name = [
        'BPSPercent' => 'BPSPercent',
        'burstIOCount' => 'BurstIOCount',
        'diskId' => 'DiskId',
        'IOPSPercent' => 'IOPSPercent',
        'readBPS' => 'ReadBPS',
        'readBlockSize' => 'ReadBlockSize',
        'readIOPS' => 'ReadIOPS',
        'readLatency' => 'ReadLatency',
        'timestamp' => 'Timestamp',
        'writeBPS' => 'WriteBPS',
        'writeBlockSize' => 'WriteBlockSize',
        'writeIOPS' => 'WriteIOPS',
        'writeLatency' => 'WriteLatency',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->readBlockSize) {
            $res['ReadBlockSize'] = $this->readBlockSize;
        }

        if (null !== $this->readIOPS) {
            $res['ReadIOPS'] = $this->readIOPS;
        }

        if (null !== $this->readLatency) {
            $res['ReadLatency'] = $this->readLatency;
        }

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        if (null !== $this->writeBPS) {
            $res['WriteBPS'] = $this->writeBPS;
        }

        if (null !== $this->writeBlockSize) {
            $res['WriteBlockSize'] = $this->writeBlockSize;
        }

        if (null !== $this->writeIOPS) {
            $res['WriteIOPS'] = $this->writeIOPS;
        }

        if (null !== $this->writeLatency) {
            $res['WriteLatency'] = $this->writeLatency;
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

        if (isset($map['ReadBlockSize'])) {
            $model->readBlockSize = $map['ReadBlockSize'];
        }

        if (isset($map['ReadIOPS'])) {
            $model->readIOPS = $map['ReadIOPS'];
        }

        if (isset($map['ReadLatency'])) {
            $model->readLatency = $map['ReadLatency'];
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        if (isset($map['WriteBPS'])) {
            $model->writeBPS = $map['WriteBPS'];
        }

        if (isset($map['WriteBlockSize'])) {
            $model->writeBlockSize = $map['WriteBlockSize'];
        }

        if (isset($map['WriteIOPS'])) {
            $model->writeIOPS = $map['WriteIOPS'];
        }

        if (isset($map['WriteLatency'])) {
            $model->writeLatency = $map['WriteLatency'];
        }

        return $model;
    }
}
