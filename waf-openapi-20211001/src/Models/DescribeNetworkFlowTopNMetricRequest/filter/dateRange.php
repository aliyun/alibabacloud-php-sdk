<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeNetworkFlowTopNMetricRequest\filter;

use AlibabaCloud\Tea\Model;

class dateRange extends Model
{
    /**
     * @description End time of the query range (Unix timestamp, seconds).
     *
     * This parameter is required.
     *
     * @example 1713888600
     *
     * @var int
     */
    public $endDate;

    /**
     * @description Start time of the query range (Unix timestamp, seconds).
     *
     * This parameter is required.
     *
     * @example 1713888000
     *
     * @var int
     */
    public $startDate;
    protected $_name = [
        'endDate' => 'EndDate',
        'startDate' => 'StartDate',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dateRange
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        return $model;
    }
}
