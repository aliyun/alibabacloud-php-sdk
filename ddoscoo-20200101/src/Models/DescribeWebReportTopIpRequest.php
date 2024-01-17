<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeWebReportTopIpRequest extends Model
{
    /**
     * @example app.bmjqxvb.cn
     *
     * @var string
     */
    public $domain;

    /**
     * @example 1687228200
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 300
     *
     * @var int
     */
    public $interval;

    /**
     * @example block
     *
     * @var string
     */
    public $queryType;

    /**
     * @example 1680424200
     *
     * @var int
     */
    public $startTime;

    /**
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
