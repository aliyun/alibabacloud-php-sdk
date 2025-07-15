<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveProducerUsageDataRequest extends Model
{
    /**
     * @description The streaming domain of the production studio.
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
     * @description The end of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * >  The end time must be later than the start time.
     *
     * @example 2018-10-31T15:59:59Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The production studio instance that you want to query. You can specify one or more production studio instances. Separate multiple instances with commas (,).
     *
     * >  If you do not set this parameter, the usage data of all production studio instances is returned.
     *
     * @example a17d0184-462d-4630-b2a6-8c26dde2****
     *
     * @var string
     */
    public $instance;

    /**
     * @description The time granularity for a query. Valid values: 3600 and 86400. Unit: seconds.
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
     * @description The region in which the domain name resides. If you leave this parameter empty, the data of all regions is returned. You can specify multiple regions by separating them with commas (,).
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
     * @description The key that is used to group data. You can specify one or more keys. Separate multiple keys with commas (,). Valid values: domain, region, instance, and type. The data for a key that you specify by using the SplitBy parameter is returned by group.
     *
     * >  If you do not set this parameter, the aggregated data is returned.
     *
     * @example type
     *
     * @var string
     */
    public $splitBy;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example 2018-09-30T16:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The type of the production studio. You can specify one or more production studio types. Separate multiple types with commas (,). Valid values:
     *
     *   **slidelive**: playlist-mode studio.
     *   **universal**: general studio.
     *
     * >  If you do not set this parameter, the usage data of all types of production studios is returned.
     *
     * @example slidelive
     *
     * @var string
     */
    public $type;

    /**
     * @description The name of the application to which the live stream belongs.
     *
     * @example liveApp****
     *
     * @var string
     */
    public $app;
    protected $_name = [
        'domainName' => 'DomainName',
        'endTime' => 'EndTime',
        'instance' => 'Instance',
        'interval' => 'Interval',
        'ownerId' => 'OwnerId',
        'region' => 'Region',
        'regionId' => 'RegionId',
        'splitBy' => 'SplitBy',
        'startTime' => 'StartTime',
        'type' => 'Type',
        'app' => 'app',
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
        if (null !== $this->instance) {
            $res['Instance'] = $this->instance;
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->app) {
            $res['app'] = $this->app;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveProducerUsageDataRequest
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
        if (isset($map['Instance'])) {
            $model->instance = $map['Instance'];
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['app'])) {
            $model->app = $map['app'];
        }

        return $model;
    }
}
