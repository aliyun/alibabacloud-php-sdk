<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DescribeVodStorageDataRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var string
     */
    public $storage;

    /**
     * @var string
     */
    public $interval;
    protected $_name = [
        'ownerId'     => 'OwnerId',
        'startTime'   => 'StartTime',
        'endTime'     => 'EndTime',
        'region'      => 'Region',
        'storageType' => 'StorageType',
        'storage'     => 'Storage',
        'interval'    => 'Interval',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->storage) {
            $res['Storage'] = $this->storage;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVodStorageDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['Storage'])) {
            $model->storage = $map['Storage'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }

        return $model;
    }
}
