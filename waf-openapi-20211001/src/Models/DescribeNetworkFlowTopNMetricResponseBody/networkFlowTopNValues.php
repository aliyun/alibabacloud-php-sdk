<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeNetworkFlowTopNMetricResponseBody;

use AlibabaCloud\Tea\Model;

class networkFlowTopNValues extends Model
{
    /**
     * @description Returns additional information, such as the country, province, or city to which an IP address belongs.
     *
     * @example ""
     *
     * @var string
     */
    public $attribute;

    /**
     * @description The value of this field varies depending on the queried Metric.
     *
     * @example 127.0.0.1
     *
     * @var string
     */
    public $name;

    /**
     * @description Counts for top ranking.
     *
     * @example 1123
     *
     * @var int
     */
    public $value;
    protected $_name = [
        'attribute' => 'Attribute',
        'name' => 'Name',
        'value' => 'Value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->attribute) {
            $res['Attribute'] = $this->attribute;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkFlowTopNValues
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attribute'])) {
            $model->attribute = $map['Attribute'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
