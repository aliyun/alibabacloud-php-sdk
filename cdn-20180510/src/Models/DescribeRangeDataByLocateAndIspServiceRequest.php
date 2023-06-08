<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeRangeDataByLocateAndIspServiceRequest extends Model
{
    /**
     * @description The accelerated domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainNames;

    /**
     * @description The end of the time range to query.
     *
     * > The end time must be later than the start time. The maximum time range that can be specified is 1 hour.
     * @example 2019-11-30T05:40:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The name of the ISP. You can specify only one ISP name in each call.
     *
     * You can call the [DescribeCdnRegionAndIsp](~~91077~~) operation to query ISPs.
     * @example unicom
     *
     * @var string
     */
    public $ispNames;

    /**
     * @description The names of the regions. Separate multiple region names with commas (,).
     *
     * You can call the [DescribeCdnRegionAndIsp](~~91077~~) operation to query the most recent region list.
     * @example liaoning,guangxi
     *
     * @var string
     */
    public $locationNames;

    /**
     * @description The beginning of the time range to query.
     *
     * Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     * @example 2019-11-30T05:33:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'domainNames'   => 'DomainNames',
        'endTime'       => 'EndTime',
        'ispNames'      => 'IspNames',
        'locationNames' => 'LocationNames',
        'startTime'     => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainNames) {
            $res['DomainNames'] = $this->domainNames;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->ispNames) {
            $res['IspNames'] = $this->ispNames;
        }
        if (null !== $this->locationNames) {
            $res['LocationNames'] = $this->locationNames;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRangeDataByLocateAndIspServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainNames'])) {
            $model->domainNames = $map['DomainNames'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['IspNames'])) {
            $model->ispNames = $map['IspNames'];
        }
        if (isset($map['LocationNames'])) {
            $model->locationNames = $map['LocationNames'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
