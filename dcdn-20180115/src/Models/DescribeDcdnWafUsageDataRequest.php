<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnWafUsageDataRequest extends Model
{
    /**
     * @description The timestamp of the data returned.
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
     * @example 2018-10-01T16:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The number of used SeCUs.
     *
     * @example 300
     *
     * @var string
     */
    public $interval;

    /**
     * @description The WAF information about the accelerated domain name.
     *
     * @example domain
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
    protected $_name = [
        'domainName' => 'DomainName',
        'endTime'    => 'EndTime',
        'interval'   => 'Interval',
        'splitBy'    => 'SplitBy',
        'startTime'  => 'StartTime',
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
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
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
     * @return DescribeDcdnWafUsageDataRequest
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
        if (isset($map['SplitBy'])) {
            $model->splitBy = $map['SplitBy'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
