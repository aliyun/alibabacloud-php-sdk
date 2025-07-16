<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainAverageResponseTimeRequest extends Model
{
    /**
     * @description The accelerated domain name. Separate multiple accelerated domain names with commas (,).
     *
     * By default, this operation queries the geographic distribution of users for all accelerated domain names.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The type of the query condition. When you set the value to dynamic, this operation queries the average response time of dynamic resources and static resources. If you do not set this parameter, this operation queries the average response time of only static resources.
     *
     * @example domaintype
     *
     * @var string
     */
    public $domainType;

    /**
     * @description The end of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * The end time must be later than the start time.
     *
     * @example 2019-11-30T05:40:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The time interval between the data entries. Unit: seconds. The value varies based on the values of the **StartTime** and **EndTime** parameters. Valid values:
     *
     *   If the time span between StartTime and EndTime is less than 3 days, valid values are **300**, **3600**, and **86400**. Default value: **300**.
     *   If the time span between StartTime and EndTime is greater than or equal to 3 days and less than 31 days, valid values are **3600** and **86400**. Default value: **3600**.
     *   If the time range between StartTime and EndTime is 31 days or longer, the valid value is **86400**. Default value: **86400**.
     *
     * @example 300
     *
     * @var string
     */
    public $interval;

    /**
     * @description The name of the Internet service provider (ISP) for your Alibaba Cloud CDN service. You can call the [DescribeCdnRegionAndIsp](https://help.aliyun.com/document_detail/91077.html) operation to query ISPs. If you do not set this parameter, data of all ISPs is queried.
     *
     * @example unicom
     *
     * @var string
     */
    public $ispNameEn;

    /**
     * @description The name of the region. You can call the [DescribeCdnRegionAndIsp](https://help.aliyun.com/document_detail/91077.html) operation to query regions. If you do not set this parameter, data in all regions is queried.
     *
     * @example beijing
     *
     * @var string
     */
    public $locationNameEn;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example 2019-11-30T05:33:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description Specifies whether to automatically set the interval. If you set the value to 1, the value of the Interval parameter is automatically assigned based on the StartTime and EndTime parameters. You can set this parameter or the Interval parameter.
     *
     * @example 1
     *
     * @var string
     */
    public $timeMerge;
    protected $_name = [
        'domainName' => 'DomainName',
        'domainType' => 'DomainType',
        'endTime' => 'EndTime',
        'interval' => 'Interval',
        'ispNameEn' => 'IspNameEn',
        'locationNameEn' => 'LocationNameEn',
        'startTime' => 'StartTime',
        'timeMerge' => 'TimeMerge',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->domainType) {
            $res['DomainType'] = $this->domainType;
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
        if (null !== $this->locationNameEn) {
            $res['LocationNameEn'] = $this->locationNameEn;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->timeMerge) {
            $res['TimeMerge'] = $this->timeMerge;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainAverageResponseTimeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DomainType'])) {
            $model->domainType = $map['DomainType'];
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
        if (isset($map['LocationNameEn'])) {
            $model->locationNameEn = $map['LocationNameEn'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TimeMerge'])) {
            $model->timeMerge = $map['TimeMerge'];
        }

        return $model;
    }
}
