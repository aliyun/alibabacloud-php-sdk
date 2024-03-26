<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DescribeVodTranscodeDataRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @description The end of the time range to query. The end time must be later than the start time. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * @example 2019-02-01T15:59:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The interval at which you want to query data. Valid values:
     *
     *   **day**: days
     *   **hour**: hours
     *
     * @example day
     *
     * @var string
     */
    public $interval;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region in which you want to query data. If you leave this parameter empty, data in all regions is returned. Separate multiple regions with commas (,). Valid values:
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
     * @description The transcoding specification. If you leave this parameter empty, data of all transcoding specifications is returned. Separate multiple transcoding specifications with commas (,). Valid values:
     *
     *   **Audio**: audio transcoding
     *   **Segmentation**: container format conversion
     *   **H264.LD**, **H264.SD**, **H264.HD**, **H264.2K**, **H264.4K**, and more
     *
     * @example Audio
     *
     * @var string
     */
    public $specification;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * @example 2019-02-01T15:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The name of the Object Storage Service (OSS) bucket. If you leave this parameter empty, data of all buckets is returned. Separate multiple bucket names with commas (,).
     *
     * @example bucket01
     *
     * @var string
     */
    public $storage;
    protected $_name = [
        'appId'         => 'AppId',
        'endTime'       => 'EndTime',
        'interval'      => 'Interval',
        'ownerId'       => 'OwnerId',
        'region'        => 'Region',
        'specification' => 'Specification',
        'startTime'     => 'StartTime',
        'storage'       => 'Storage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->specification) {
            $res['Specification'] = $this->specification;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->storage) {
            $res['Storage'] = $this->storage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVodTranscodeDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Specification'])) {
            $model->specification = $map['Specification'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Storage'])) {
            $model->storage = $map['Storage'];
        }

        return $model;
    }
}
