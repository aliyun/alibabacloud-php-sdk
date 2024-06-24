<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody\data\properties\tableLifecycleConfig\tierToLowFrequency;

use AlibabaCloud\Tea\Model;

class daysAfterLastAccessGreaterThan extends Model
{
    /**
     * @var string
     */
    public $conditionCode;

    /**
     * @var int
     */
    public $value;
    protected $_name = [
        'conditionCode' => 'conditionCode',
        'value'         => 'value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditionCode) {
            $res['conditionCode'] = $this->conditionCode;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return daysAfterLastAccessGreaterThan
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['conditionCode'])) {
            $model->conditionCode = $map['conditionCode'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
