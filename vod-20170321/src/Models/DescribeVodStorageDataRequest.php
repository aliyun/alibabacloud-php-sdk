<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DescribeVodStorageDataRequest extends Model
{
    /**
     * @description The end of the time range to query. The end time must be later than the start time. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * @example 2019-02-01T15:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region in which you want to query storage data. If you leave this parameter empty, data in all regions is returned. Separate multiple regions with commas (,). Valid values:
     *
     *   **cn-shanghai**: China (Shanghai)
     *   **cn-beijing**: China (Beijing)
     *   **eu-central-1**: Germany (Frankfurt)
     *   **ap-southeast-1**: Singapore
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * @example 2019-02-01T14:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The name of the Object Storage Service (OSS) bucket. If you leave this parameter empty, data of all buckets is returned. Separate multiple bucket names with commas (,).
     *
     * @example bucket
     *
     * @var string
     */
    public $storage;

    /**
     * @description The storage type. Set the value to **OSS**.
     *
     * @example OSS
     *
     * @var string
     */
    public $storageType;
    protected $_name = [
        'endTime'     => 'EndTime',
        'ownerId'     => 'OwnerId',
        'region'      => 'Region',
        'startTime'   => 'StartTime',
        'storage'     => 'Storage',
        'storageType' => 'StorageType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->storage) {
            $res['Storage'] = $this->storage;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Storage'])) {
            $model->storage = $map['Storage'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        return $model;
    }
}
