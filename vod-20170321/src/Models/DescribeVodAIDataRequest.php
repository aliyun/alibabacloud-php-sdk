<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DescribeVodAIDataRequest extends Model
{
    /**
     * @description The type of video AI. If you leave this parameter empty, statistics on video AI of all types are returned. Separate multiple types with commas (,). Valid values:
     *
     *   **AIVideoCensor**: automated review
     *   **AIVideoFPShot**: media fingerprinting
     *   **AIVideoTag**: smart tagging
     *
     * @example AIVideoCensor
     *
     * @var string
     */
    public $AIType;

    /**
     * @description The end of the time range to query. The end time must be later than the start time. Specify the time in the ISO 8601 standard in the `yyyy-MM-ddTHH:mm:ssZ` format. The time must be in UTC.
     *
     * This parameter is required.
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
     * @description The region in which you want to query data. If you leave this parameter empty, data in all regions is returned. Separate multiple regions with commas (,). Valid values:
     *
     *   **cn-shanghai**: China (Shanghai)
     *   **cn-beijing**: China (Beijing)
     *   **eu-central-1**: Germany (Frankfurt)
     *   **ap-southeast-1**: Singapore
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $region;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the `yyyy-MM-ddTHH:mm:ssZ` format. The time must be in UTC.
     *
     * This parameter is required.
     * @example 2019-02-01T13:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'AIType'    => 'AIType',
        'endTime'   => 'EndTime',
        'ownerId'   => 'OwnerId',
        'region'    => 'Region',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->AIType) {
            $res['AIType'] = $this->AIType;
        }
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVodAIDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AIType'])) {
            $model->AIType = $map['AIType'];
        }
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

        return $model;
    }
}
