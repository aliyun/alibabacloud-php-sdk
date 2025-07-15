<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveDomainBpsDataByLayerRequest extends Model
{
    /**
     * @description The streaming domain. You can specify multiple domain names by separating them with commas (,). If you leave this parameter empty, the data of all domain names within your Alibaba Cloud account is returned.
     *
     * @example pull.aliyundoc.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end of the time range to query. The end time must be later than the start time. Specify the time in the ISO 8601 standard in the *yyyy-MM-ddTHH:mm:ssZ* format. The time must be displayed in UTC.
     *
     * @example 2022-03-16T16:59:59Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The time granularity of the query. Unit: seconds. Valid values:
     *
     *   **300**
     *   **3600**
     *   **86400**
     *
     * >
     *
     *   If the time range specified by the StartTime and EndTime parameters is smaller than or equal to 3 days, the supported time granularities include 300, 3,600, and 86,400 seconds.
     *
     *   If the time range is larger than 3 days but smaller than or equal to 31 days, the supported time granularities include 3,600 and 86,400 seconds.
     *
     *   If the time range is larger than 31 days, the supported time granularity is 86,400 seconds.
     *
     *   If you specify an invalid value or do not specify this parameter, the default time granularity of 300 seconds is used.
     *
     * @example 300
     *
     * @var string
     */
    public $interval;

    /**
     * @description The name of the Internet service provider (ISP). If you do not specify this parameter, the data of all ISPs is returned.
     *
     * >  You can call the [DescribeLiveRegionAndIsp](https://help.aliyun.com/document_detail/91077.html) operation to query available regions and ISPs.
     *
     * @example tele***
     *
     * @var string
     */
    public $ispNameEn;

    /**
     * @description The layer at which you want to query the data. Valid values:
     *
     *   IPv4 and IPv6 (network layer)
     *   http, https, and quic (application layer)
     *   all (default)
     *
     * @example all
     *
     * @var string
     */
    public $layer;

    /**
     * @description The name of the region. If you do not specify this parameter, the data of all regions is returned.
     *
     * >  You can call the [DescribeLiveRegionAndIsp](https://help.aliyun.com/document_detail/91077.html) operation to query available regions and ISPs.
     *
     * @example hangzhou
     *
     * @var string
     */
    public $locationNameEn;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the *yyyy-MM-ddTHH:mm:ssZ* format. The time must be displayed in UTC.
     *
     * >  If you do not specify this parameter, the data of the last 24 hours is returned by default. The minimum time granularity is 5 minutes.
     *
     * @example 2022-03-15T16:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'domainName' => 'DomainName',
        'endTime' => 'EndTime',
        'interval' => 'Interval',
        'ispNameEn' => 'IspNameEn',
        'layer' => 'Layer',
        'locationNameEn' => 'LocationNameEn',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
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
        if (null !== $this->ispNameEn) {
            $res['IspNameEn'] = $this->ispNameEn;
        }
        if (null !== $this->layer) {
            $res['Layer'] = $this->layer;
        }
        if (null !== $this->locationNameEn) {
            $res['LocationNameEn'] = $this->locationNameEn;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveDomainBpsDataByLayerRequest
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
        if (isset($map['IspNameEn'])) {
            $model->ispNameEn = $map['IspNameEn'];
        }
        if (isset($map['Layer'])) {
            $model->layer = $map['Layer'];
        }
        if (isset($map['LocationNameEn'])) {
            $model->locationNameEn = $map['LocationNameEn'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
