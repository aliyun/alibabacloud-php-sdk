<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainBpsDataByTimeStampRequest extends Model
{
    /**
     * @description The accelerated domain name. You can specify only one domain name in each query.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The names of the Internet service providers (ISPs). Separate multiple ISP names with commas (,).
     *
     * You can call the [DescribeCdnRegionAndIsp](~~91077~~) operation to query regions.
     * @example uni***,tele***
     *
     * @var string
     */
    public $ispNames;

    /**
     * @description The names of the regions. Separate multiple regions with commas (,).
     *
     * You can call the [DescribeCdnRegionAndIsp](~~91077~~) operation to query regions.
     * @example liaoning,guangxi
     *
     * @var string
     */
    public $locationNames;

    /**
     * @description The beginning of the time range that was queried. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC+0.
     *
     * The data is collected at an interval of five minutes.
     * @example 2019-11-30T05:40:00Z
     *
     * @var string
     */
    public $timePoint;
    protected $_name = [
        'domainName'    => 'DomainName',
        'ispNames'      => 'IspNames',
        'locationNames' => 'LocationNames',
        'timePoint'     => 'TimePoint',
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
        if (null !== $this->ispNames) {
            $res['IspNames'] = $this->ispNames;
        }
        if (null !== $this->locationNames) {
            $res['LocationNames'] = $this->locationNames;
        }
        if (null !== $this->timePoint) {
            $res['TimePoint'] = $this->timePoint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainBpsDataByTimeStampRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['IspNames'])) {
            $model->ispNames = $map['IspNames'];
        }
        if (isset($map['LocationNames'])) {
            $model->locationNames = $map['LocationNames'];
        }
        if (isset($map['TimePoint'])) {
            $model->timePoint = $map['TimePoint'];
        }

        return $model;
    }
}
