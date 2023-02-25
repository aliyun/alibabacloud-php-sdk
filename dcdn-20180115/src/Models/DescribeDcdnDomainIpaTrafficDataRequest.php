<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnDomainIpaTrafficDataRequest extends Model
{
    /**
     * @description The name of the accelerated domain name.
     *
     * You can specify one or more accelerated domain names. Separate them with commas (,). By default, all accelerated domain names that belong to your Alibaba Cloud account are queried.
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end of the time range to query.
     *
     * >  The end time must be later than the start time.
     * @example 2017-12-10T21:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description Specify whether to implement padding with zeros. Valid values:
     *
     *   **true**: Yes
     *   **false**: No
     *
     * @example false
     *
     * @var string
     */
    public $fixTimeGap;

    /**
     * @description The time interval between the data entries returned. Unit: seconds.
     *
     * The valid values vary based on the values of the **StartTime** and **EndTime** parameters. Valid values:
     *
     *   If the time range between StartTime and EndTime is less than 3 days, valid values are **300**, **3600**, and **86400**. Default value: **300**.
     *   If the time range between StartTime and EndTime is from 3 to 31 days (31 days excluded), valid values are **3600** and **86400**. Default value: **3600**.
     *   If the time range between StartTime and EndTime is 31 days or longer, the valid value is **86400**. Default value: **86400**.
     *
     * @example 300
     *
     * @var string
     */
    public $interval;

    /**
     * @description The name of the Internet service provider (ISP) for Dynamic Route for CDN (DCDN).
     *
     * You can call the [DescribeCdnRegionAndIsp](~~207199~~) operation to query the most recent ISP list. If you do not specify an ISP, all ISPs are queried.
     * @example unicom
     *
     * @var string
     */
    public $ispNameEn;

    /**
     * @description The name of the region.
     *
     * You can call the [DescribeCdnRegionAndIsp](~~207199~~) operation to query the most recent region list. If you do not specify a region, all regions are queried.
     * @example beijing
     *
     * @var string
     */
    public $locationNameEn;

    /**
     * @description The beginning of the time range to query.
     *
     * The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC+0.
     * @example 2017-12-10T20:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description Specify whether to automatically calculate the value of the **Interval** parameter. If you set the **TimeMerge** parameter to **1**, the value of the **Interval** parameter is automatically assigned based on the **StartTime** and **EndTime** parameters. You can set this parameter or the **Interval** parameter.
     *
     * @example 1
     *
     * @var string
     */
    public $timeMerge;
    protected $_name = [
        'domainName'     => 'DomainName',
        'endTime'        => 'EndTime',
        'fixTimeGap'     => 'FixTimeGap',
        'interval'       => 'Interval',
        'ispNameEn'      => 'IspNameEn',
        'locationNameEn' => 'LocationNameEn',
        'startTime'      => 'StartTime',
        'timeMerge'      => 'TimeMerge',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->fixTimeGap) {
            $res['FixTimeGap'] = $this->fixTimeGap;
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
     * @return DescribeDcdnDomainIpaTrafficDataRequest
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
        if (isset($map['FixTimeGap'])) {
            $model->fixTimeGap = $map['FixTimeGap'];
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
