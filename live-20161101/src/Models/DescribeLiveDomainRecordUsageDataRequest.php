<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveDomainRecordUsageDataRequest extends Model
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
     * @description The end of the time range to query. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC. Value requirements:
     *
     *   The end time is later than the start time.
     *   The time range between the start time and end time is up to 31 days. If the time range is more than 31 days, the request fails and an error is reported.
     *
     * @example 2021-05-10T21:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The time granularity of the query. Unit: seconds. Valid values:
     *
     *   60
     *   300
     *   3600
     *   86400
     *
     * > If you do not specify this parameter or specify an invalid value: The time granularity of the query for a time range that is less than or equal to 31 days is 300 seconds by default. The time granularity of the query for a time range that is more than 31 days is 86400 seconds by default.
     *
     * @example 300
     *
     * @var string
     */
    public $interval;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the region. Valid values:
     *
     *   **cn-beijing**: China (Beijing)
     *   **cn-shanghai**: China (Shanghai)
     *   **cn-shenzhen**: China (Shenzhen)
     *   **cn-qingdao**: China (Qingdao)
     *   **ap-southeast-1**: Singapore
     *   **eu-central-1**: Germany (Frankfurt)
     *   **ap-northeast-1**: Japan (Tokyo)
     *   **ap-southeast-5**: Indonesia (Jakarta)
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
     * @description The key that is used to group data. Valid values:
     *
     *   **domain**: groups results by domain name.
     *   **record_fmt**: groups results by recording type.
     *
     * >  You can select one option or both. If you want to select both options, separate them with a comma (,). The default value is `domain,record_fmt`. If you leave this parameter empty or set the value to `null`, this parameter is ignored.
     *
     * @example domain,record_fmt
     *
     * @var string
     */
    public $splitBy;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     *   The minimum data granularity is 5 minutes.
     *   If you do not specify this parameter, the data in the last 24 hours is returned.
     *
     * > The earliest start time that you can specify is 90 days back from the current time, accurate to seconds.
     *
     * @example 2021-05-10T20:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'domainName' => 'DomainName',
        'endTime' => 'EndTime',
        'interval' => 'Interval',
        'ownerId' => 'OwnerId',
        'region' => 'Region',
        'regionId' => 'RegionId',
        'splitBy' => 'SplitBy',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveDomainRecordUsageDataRequest
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

        return $model;
    }
}
