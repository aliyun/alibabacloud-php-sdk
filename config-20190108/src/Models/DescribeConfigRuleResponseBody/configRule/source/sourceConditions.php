<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models\DescribeConfigRuleResponseBody\configRule\source;

use AlibabaCloud\Tea\Model;

class sourceConditions extends Model
{
    /**
     * @var string
     */
    public $desiredValue;

    /**
     * @var string
     */
    public $tips;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'desiredValue' => 'DesiredValue',
        'tips'         => 'Tips',
        'operator'     => 'Operator',
        'name'         => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desiredValue) {
            $res['DesiredValue'] = $this->desiredValue;
        }
        if (null !== $this->tips) {
            $res['Tips'] = $this->tips;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceConditions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesiredValue'])) {
            $model->desiredValue = $map['DesiredValue'];
        }
        if (isset($map['Tips'])) {
            $model->tips = $map['Tips'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
