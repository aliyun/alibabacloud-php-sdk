<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeWebReportTopIpRequest extends Model
{
    /**
     * @description The domain name of the website.
     *
     * >  A forwarding rule must be configured for the domain name. You can call the [DescribeDomains](https://help.aliyun.com/document_detail/91724.html) operation to query the domain names for which forwarding rules are configured.
     * @example app.bmjqxvb.cn
     *
     * @var string
     */
    public $domain;

    /**
     * @description The end of the time range to query. The value is a UNIX timestamp. Unit: seconds.
     *
     * This parameter is required.
     * @example 1687228200
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The interval at which data is collected. Unit: seconds. Valid values are 300, 3600, and 86400.
     *
     *   If the time span between StartTime and EndTime is less than 3 days (3 days excluded), valid values are 300, 3600, and 86400.
     *   If the time span between StartTime and EndTime is from 3 to 31 days (31 days excluded), valid values are 3600 and 86400.
     *   If the time span between StartTime and EndTime is 31 days or longer, the valid value is 86400.
     *
     * This parameter is required.
     * @example 300
     *
     * @var int
     */
    public $interval;

    /**
     * @description The source of the statistics. Valid value:
     *
     *   **visit**: indicates all IP addresses.
     *   **block**: indicates blocked IP addresses.
     *
     * This parameter is required.
     * @example block
     *
     * @var string
     */
    public $queryType;

    /**
     * @description The beginning of the time range to query. The value is a UNIX timestamp. Unit: seconds.
     *
     * This parameter is required.
     * @example 1680424200
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The maximum number of entries to return.
     *
     * @example 5
     *
     * @var int
     */
    public $top;
    protected $_name = [
        'domain'    => 'Domain',
        'endTime'   => 'EndTime',
        'interval'  => 'Interval',
        'queryType' => 'QueryType',
        'startTime' => 'StartTime',
        'top'       => 'Top',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->queryType) {
            $res['QueryType'] = $this->queryType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->top) {
            $res['Top'] = $this->top;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWebReportTopIpRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['QueryType'])) {
            $model->queryType = $map['QueryType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Top'])) {
            $model->top = $map['Top'];
        }

        return $model;
    }
}
