<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeNetworkFlowTopNMetricResponseBody;

use AlibabaCloud\Dara\Model;

class networkFlowTopNValues extends Model
{
    /**
     * @var string
     */
    public $attribute;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $value;
    protected $_name = [
        'attribute' => 'Attribute',
        'name' => 'Name',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
