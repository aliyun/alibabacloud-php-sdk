<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DescribeVodTieringStorageDataRequest extends Model
{
    /**
     * @description The end time at which data is obtained. The end time must be later than the start time. The difference cannot exceed 31 days. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * @example 2023-05-29T02:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region in which you want to query data. If you leave this parameter empty, data in all regions is returned. Separate multiple regions with commas (,).
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $region;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC. If you leave this parameter empty, data in the last 24 hours is queried.
     *
     * @example 2023-05-29T01:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The storage type. By default, all storage types are returned. Valid values:
     *
     *   **IA**
     *   **Archive**
     *   **ColdArchive**
     *
     * @example IA
     *
     * @var string
     */
    public $storageClass;
    protected $_name = [
        'endTime'      => 'EndTime',
        'ownerId'      => 'OwnerId',
        'region'       => 'Region',
        'startTime'    => 'StartTime',
        'storageClass' => 'StorageClass',
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
        if (null !== $this->storageClass) {
            $res['StorageClass'] = $this->storageClass;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVodTieringStorageDataRequest
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
        if (isset($map['StorageClass'])) {
            $model->storageClass = $map['StorageClass'];
        }

        return $model;
    }
}
