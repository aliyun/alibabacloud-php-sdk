<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\DescribeApplicationScalingRulesResponseBody\appScalingRules\result\behaviour\scaleDown;

use AlibabaCloud\Tea\Model;

class policies extends Model
{
    /**
     * @var int
     */
    public $periodSeconds;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'periodSeconds' => 'PeriodSeconds',
        'type'          => 'Type',
        'value'         => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->periodSeconds) {
            $res['PeriodSeconds'] = $this->periodSeconds;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PeriodSeconds'])) {
            $model->periodSeconds = $map['PeriodSeconds'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
