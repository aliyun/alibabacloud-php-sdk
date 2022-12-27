<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainsUsageByDayResponseBody\usageByDays;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainsUsageByDayResponseBody\usageTotal;
use AlibabaCloud\Tea\Model;

class DescribeDomainsUsageByDayResponseBody extends Model
{
    /**
     * @description The time interval between the data entries. Unit: seconds.
     *
     * @example 86400
     *
     * @var string
     */
    public $dataInterval;

    /**
     * @description The information about the accelerated domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end of the time range that was queried.
     *
     * @example 2019-12-23T09:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the request.
     *
     * @example C88EF8ED-72F0-45EA-9E86-95114E224FC5
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The start of the time range that was queried.
     *
     * @example 2019-12-22T08:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The monitoring data collected at each time interval.
     *
     * @var usageByDays
     */
    public $usageByDays;

    /**
     * @description The summarized monitoring data.
     *
     * @var usageTotal
     */
    public $usageTotal;
    protected $_name = [
        'dataInterval' => 'DataInterval',
        'domainName'   => 'DomainName',
        'endTime'      => 'EndTime',
        'requestId'    => 'RequestId',
        'startTime'    => 'StartTime',
        'usageByDays'  => 'UsageByDays',
        'usageTotal'   => 'UsageTotal',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataInterval) {
            $res['DataInterval'] = $this->dataInterval;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->usageByDays) {
            $res['UsageByDays'] = null !== $this->usageByDays ? $this->usageByDays->toMap() : null;
        }
        if (null !== $this->usageTotal) {
            $res['UsageTotal'] = null !== $this->usageTotal ? $this->usageTotal->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainsUsageByDayResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataInterval'])) {
            $model->dataInterval = $map['DataInterval'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['UsageByDays'])) {
            $model->usageByDays = usageByDays::fromMap($map['UsageByDays']);
        }
        if (isset($map['UsageTotal'])) {
            $model->usageTotal = usageTotal::fromMap($map['UsageTotal']);
        }

        return $model;
    }
}
