<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveDelayedStreamingUsageRequest extends Model
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
     * @description The end of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC. The end time must be later than the start time. We recommend that you specify a time range that is less than or equal to 10 hours.
     *
     * @example 2022-10-10T21:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The time granularity of the query. Unit: seconds. Valid values:
     *
     *   300
     *   3600
     *   86400
     *
     * If you specify an invalid value or do not specify this parameter, the default value 3600 is used.
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
     * @description The ID of the region. Separate multiple region IDs with commas (,). Valid values:
     *
     *   cn-beijing: China (Beijing)
     *   cn-shanghai: China (Shanghai)
     *   cn-shenzhen: China (Shenzhen)
     *   cn-qingdao: China (Qingdao)
     *   ap-southeast-1: Singapore
     *   eu-central-1: Germany (Frankfurt)
     *   ap-northeast-1: Japan (Tokyo)
     *   ap-southeast-5: Indonesia (Jakarta)
     *
     * If you leave this parameter empty, data of all regions is aggregated and returned by default.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The key that is used to group data. If you leave this parameter empty, data is aggregated and returned. Valid values:
     *
     *   domain: The DomainName parameter in the response takes effect only if SplitBy is set to domain.
     *   region: The Region parameter in the response takes effect only if SplitBy is set to region.
     *   stream: The StreamName parameter in the response takes effect only if SplitBy is set to stream.
     *
     * >  This parameter takes effect only if the parameter corresponding to the value of this parameter is not left empty. Otherwise, an error is returned. For example, you cannot set this parameter to domain if the DomainName parameter is left empty.
     *
     * @example domain
     *
     * @var string
     */
    public $splitBy;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC. By default, data in the last seven days is returned.
     *
     * @example 2022-10-10T20:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The name of the stream. Separate multiple stream names with commas (,). By default, data of all streams is aggregated and returned.
     *
     * @example liveStream****
     *
     * @var string
     */
    public $streamName;
    protected $_name = [
        'domainName' => 'DomainName',
        'endTime' => 'EndTime',
        'interval' => 'Interval',
        'ownerId' => 'OwnerId',
        'region' => 'Region',
        'regionId' => 'RegionId',
        'splitBy' => 'SplitBy',
        'startTime' => 'StartTime',
        'streamName' => 'StreamName',
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
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->splitBy) {
            $res['SplitBy'] = $this->splitBy;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveDelayedStreamingUsageRequest
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
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SplitBy'])) {
            $model->splitBy = $map['SplitBy'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }

        return $model;
    }
}
