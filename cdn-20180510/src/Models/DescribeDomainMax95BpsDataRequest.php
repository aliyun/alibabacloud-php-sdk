<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainMax95BpsDataRequest extends Model
{
    /**
     * @description The cycle to query the 95th percentile bandwidth data. Default value: **day**. Valid values:
     *
     *   **day**: queries the 95th percentile bandwidth data by day.
     *   **month**: queries the 95th percentile bandwidth data by month.
     *
     * @example month
     *
     * @var string
     */
    public $cycle;

    /**
     * @description The accelerated domain name. If you do not specify this parameter, data of all accelerated domain names under your account is queried.
     *
     * > You cannot specify multiple domain names at a time.
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end of the time range to query.
     *
     * > The end time must be later than the start time.
     * @example 2017-12-22T08:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The beginning of the time range to query.
     *
     * Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     * @example 2017-12-21T08:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The beginning of the time range to query.
     *
     * Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     * @example 2017-12-21T10:00:00Z
     *
     * @var string
     */
    public $timePoint;
    protected $_name = [
        'cycle'      => 'Cycle',
        'domainName' => 'DomainName',
        'endTime'    => 'EndTime',
        'startTime'  => 'StartTime',
        'timePoint'  => 'TimePoint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cycle) {
            $res['Cycle'] = $this->cycle;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->timePoint) {
            $res['TimePoint'] = $this->timePoint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainMax95BpsDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cycle'])) {
            $model->cycle = $map['Cycle'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TimePoint'])) {
            $model->timePoint = $map['TimePoint'];
        }

        return $model;
    }
}
