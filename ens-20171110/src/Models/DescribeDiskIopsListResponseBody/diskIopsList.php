<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDiskIopsListResponseBody;

use AlibabaCloud\Dara\Model;

class diskIopsList extends Model
{
    /**
     * @var string
     */
    public $bizTime;

    /**
     * @var string
     */
    public $diskId;

    /**
     * @var int
     */
    public $readBytes;

    /**
     * @var int
     */
    public $readLatency;

    /**
     * @var int
     */
    public $readOps;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $writeBytes;

    /**
     * @var int
     */
    public $writeLatency;

    /**
     * @var int
     */
    public $writeOps;
    protected $_name = [
        'bizTime' => 'BizTime',
        'diskId' => 'DiskId',
        'readBytes' => 'ReadBytes',
        'readLatency' => 'ReadLatency',
        'readOps' => 'ReadOps',
        'regionId' => 'RegionId',
        'writeBytes' => 'WriteBytes',
        'writeLatency' => 'WriteLatency',
        'writeOps' => 'WriteOps',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
