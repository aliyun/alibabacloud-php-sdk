<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSecurityEventTopNMetricResponseBody;

use AlibabaCloud\Tea\Model;

class securityEventTopNValues extends Model
{
    /**
     * @description The additional information, such as the protection module for a protection rule whose ID is returned.
     *
     * @example waf_base
     *
     * @var string
     */
    public $attribute;

    /**
     * @description The field value, which varies based on the metric.
     *
     * @example 10000
     *
     * @var string
     */
    public $name;

    /**
     * @description The count for the data entry.
     *
     * @example 1111
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
     * @return securityEventTopNValues
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
