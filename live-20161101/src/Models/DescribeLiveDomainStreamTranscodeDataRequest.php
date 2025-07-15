<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveDomainStreamTranscodeDataRequest extends Model
{
    /**
     * @description The main streaming domain to query.
     *
     *   You can query one or more domain names. If you specify multiple domain names, separate them with commas (,).
     *   If you leave this parameter empty, the data of all domain names within your Alibaba Cloud account is returned.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end of the time range to query. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * This parameter is required.
     *
     * @example 2017-12-10T22:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The time granularity of the query. Unit: seconds. Valid values:
     *
     *   **3600**: 1 hour
     *   **86400**: 1 day
     *
     * >  If you do not specify this parameter, the time granularity of 1 hour is used by default.
     *
     * @example 3600
     *
     * @var string
     */
    public $interval;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The time precision of the query. Valid values:
     *
     *   **min** (default): in minutes.
     *   **sec**: in seconds.
     *
     * @example min
     *
     * @var string
     */
    public $precision;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The key that is used to group data. Valid values:
     *
     *   **domain**: The DomainName parameter is available in the response only if Split is set to domain.
     *   **region**: The Region parameter is available in the response only if Split is set to region.
     *   **transcode_type**: The TanscodeType parameter is available in the response only if Split is set to transcode_type.
     *   **resolution**: The Resolution parameter is available in the response only if Split is set to resolution.
     *   **fps**: The Fps parameter is available in the response only if Split is set to fps.
     *
     * You can specify one or more keys. If you specify multiple keys, separate them with commas (,).
     *
     * Default value: `domain,region,transcode_type,resolution,fps`.
     *
     * @example domain
     *
     * @var string
     */
    public $split;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     *   The minimum query interval is 1 hour.
     *   If you do not set this parameter, the transcoding length for the last 24 hours is returned.
     *
     * This parameter is required.
     *
     * @example 2017-12-10T20:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'domainName' => 'DomainName',
        'endTime' => 'EndTime',
        'interval' => 'Interval',
        'ownerId' => 'OwnerId',
        'precision' => 'Precision',
        'regionId' => 'RegionId',
        'split' => 'Split',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
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
        if (null !== $this->precision) {
            $res['Precision'] = $this->precision;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->split) {
            $res['Split'] = $this->split;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveDomainStreamTranscodeDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
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
        if (isset($map['Precision'])) {
            $model->precision = $map['Precision'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Split'])) {
            $model->split = $map['Split'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
