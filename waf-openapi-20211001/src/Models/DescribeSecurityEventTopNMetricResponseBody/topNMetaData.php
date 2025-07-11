<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSecurityEventTopNMetricResponseBody;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSecurityEventTopNMetricResponseBody\topNMetaData\dateRange;
use AlibabaCloud\Tea\Model;

class topNMetaData extends Model
{
    /**
     * @description The time range that is used for the query.
     *
     * @var dateRange
     */
    public $dateRange;

    /**
     * @description The unit of the statistics returned. It is fixed as requests.
     *
     * @example requests
     *
     * @var string
     */
    public $units;
    protected $_name = [
        'dateRange' => 'DateRange',
        'units' => 'Units',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dateRange) {
            $res['DateRange'] = null !== $this->dateRange ? $this->dateRange->toMap() : null;
        }
        if (null !== $this->units) {
            $res['Units'] = $this->units;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return topNMetaData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DateRange'])) {
            $model->dateRange = dateRange::fromMap($map['DateRange']);
        }
        if (isset($map['Units'])) {
            $model->units = $map['Units'];
        }

        return $model;
    }
}
