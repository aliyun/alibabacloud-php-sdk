<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainsUsageByDayResponseBody\usageByDays;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainsUsageByDayResponseBody\usageTotal;

class DescribeDomainsUsageByDayResponseBody extends Model
{
    /**
     * @var string
     */
    public $dataInterval;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var usageByDays
     */
    public $usageByDays;

    /**
     * @var usageTotal
     */
    public $usageTotal;
    protected $_name = [
        'dataInterval' => 'DataInterval',
        'domainName' => 'DomainName',
        'endTime' => 'EndTime',
        'requestId' => 'RequestId',
        'startTime' => 'StartTime',
        'usageByDays' => 'UsageByDays',
        'usageTotal' => 'UsageTotal',
    ];

    public function validate()
    {
        if (null !== $this->usageByDays) {
            $this->usageByDays->validate();
        }
        if (null !== $this->usageTotal) {
            $this->usageTotal->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['UsageByDays'] = null !== $this->usageByDays ? $this->usageByDays->toArray($noStream) : $this->usageByDays;
        }

        if (null !== $this->usageTotal) {
            $res['UsageTotal'] = null !== $this->usageTotal ? $this->usageTotal->toArray($noStream) : $this->usageTotal;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
