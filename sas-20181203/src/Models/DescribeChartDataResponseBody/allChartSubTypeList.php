<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeChartDataResponseBody;

use AlibabaCloud\Tea\Model;

class allChartSubTypeList extends Model
{
    /**
     * @description The subtype of the chart.
     *
     * @example CID_SUSPICIOUS_TREND-ALL
     *
     * @var string
     */
    public $subType;

    /**
     * @description The name of the chart subtype.
     *
     * @example All Alerts
     *
     * @var string
     */
    public $subTypeName;
    protected $_name = [
        'subType'     => 'SubType',
        'subTypeName' => 'SubTypeName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subType) {
            $res['SubType'] = $this->subType;
        }
        if (null !== $this->subTypeName) {
            $res['SubTypeName'] = $this->subTypeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return allChartSubTypeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubType'])) {
            $model->subType = $map['SubType'];
        }
        if (isset($map['SubTypeName'])) {
            $model->subTypeName = $map['SubTypeName'];
        }

        return $model;
    }
}
