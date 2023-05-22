<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnDomainIpaBpsDataRequest extends Model
{
    /**
     * @description The accelerated domain name.
     *
     * Separate multiple domain names with commas (,). If you leave this parameter empty, all accelerated domain names are queried.
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end of the time range to query.
     *
     * > The end time must be later than the start time.
     * @example 2017-12-10T21:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description Specifies whether to implement padding with zeros. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var string
     */
    public $fixTimeGap;

    /**
     * @description The time granularity of data entries. Unit: seconds.
     *
     * The time granularity varies with the time range specified by **StartTime** and **EndTime**.
     *
     *   If the time range between StartTime and EndTime is less than 3 days, the valid values are **300**, **3600**, and **86400**. If you leave this parameter empty, **300** is used.
     *   If the time range between StartTime and EndTime is greater than or equal to 3 days and less than 31 days, the valid values are **3600** and **86400**. Default value: **3600**.
     *   If the time range between StartTime and EndTime is 31 days or longer, the valid value is **86400**. Default value: **86400**.
     *
     * @example 300
     *
     * @var string
     */
    public $interval;

    /**
     * @description The name of the Internet service provider (ISP).
     *
     * You can call the [DescribeDcdnRegionAndIsp](~~207199~~) operation to query ISPs.
     * @example Unicom
     *
     * @var string
     */
    public $ispNameEn;

    /**
     * @description The name of the region.
     *
     * You can call the [DescribeDcdnRegionAndIsp](~~207199~~) operation to query regions.
     * @example beijing
     *
     * @var string
     */
    public $locationNameEn;

    /**
     * @description The beginning of the time range to query.
     *
     * Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     * @example 2017-12-10T20:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description Specifies whether to automatically set the interval. If you set **TimeMerge** to **1**, the value of the **Interval** parameter is automatically assigned based on the **startTime** and **endTime** parameters. You can specify either this parameter or the **Interval** parameter.
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
     * @return DescribeDcdnDomainIpaBpsDataRequest
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
