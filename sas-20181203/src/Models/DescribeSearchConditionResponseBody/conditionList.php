<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSearchConditionResponseBody;

use AlibabaCloud\Tea\Model;

class conditionList extends Model
{
    /**
     * @example system
     *
     * @var string
     */
    public $conditionType;

    /**
     * @example {\"filterParams\":[{\"labelKey\":\"a|b\",\"value\":\"{\\\"name\\\":\\\"sadsasd\\\",\\\"value\\\":\\\"dasdsdas\\\"}\"}],\"LogicalExp\":\"OR\"}
     *
     * @var string
     */
    public $filterConditions;

    /**
     * @example StopMachine
     *
     * @var string
     */
    public $name;

    /**
     * @example stop_machine
     *
     * @var string
     */
    public $nameKey;
    protected $_name = [
        'conditionType'    => 'ConditionType',
        'filterConditions' => 'FilterConditions',
        'name'             => 'Name',
        'nameKey'          => 'NameKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditionType) {
            $res['ConditionType'] = $this->conditionType;
        }
        if (null !== $this->filterConditions) {
            $res['FilterConditions'] = $this->filterConditions;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nameKey) {
            $res['NameKey'] = $this->nameKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return conditionList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConditionType'])) {
            $model->conditionType = $map['ConditionType'];
        }
        if (isset($map['FilterConditions'])) {
            $model->filterConditions = $map['FilterConditions'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NameKey'])) {
            $model->nameKey = $map['NameKey'];
        }

        return $model;
    }
}
