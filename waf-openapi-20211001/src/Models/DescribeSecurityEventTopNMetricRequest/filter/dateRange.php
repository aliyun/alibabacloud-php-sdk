<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSecurityEventTopNMetricRequest\filter;

use AlibabaCloud\Tea\Model;

class dateRange extends Model
{
    /**
     * @description The end of the time range to query. The value is a Unix timestamp. Unit: seconds.
     *
     * This parameter is required.
     *
     * @example 1713888600
     *
     * @var int
     */
    public $endDate;

    /**
     * @description The beginning of the time range to query. The value is a Unix timestamp. Unit: seconds.
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
