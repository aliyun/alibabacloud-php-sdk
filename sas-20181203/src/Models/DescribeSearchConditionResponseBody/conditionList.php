<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSearchConditionResponseBody;

use AlibabaCloud\Tea\Model;

class conditionList extends Model
{
    /**
     * @description The type of the filter condition. Valid values:
     *
     *   **system**: default filter condition
     *   **user**: custom filter condition
     *
     * @example system
     *
     * @var string
     */
    public $conditionType;

    /**
     * @description The filter condition. The value of this parameter is in the JSON format and contains the following fields:
     *
     *   **filterParams**: the parameters of the filter condition. The value of this field is in the JSON format and contains the following fields:
     *
     *   **labelKey**: the key for rendering.
     *
     *   **label**: the display name.
     *
     *   **value**: the value of the filter condition. The value of this field is in the JSON format and contains the following fields:
     *
     *   **name**: the name of the filter item.
     *   **value**: the value of the filter item.
     *
     *   **LogicalExp**: the logical relationship among the filter conditions. Valid values:
     *
     *   **AND**: The filter conditions are evaluated by using a logical **AND**.
     *   **OR**: The filter conditions are evaluated by using a logical **OR**.
     *
     * >  If the value of **ConditionType** is **system**, **labelKey** is returned. The labelKey field is used only for internationalization rendering.
     * @example {\"filterParams\":[{\"labelKey\":\"a|b\",\"value\":\"{\\\"name\\\":\\\"sadsasd\\\",\\\"value\\\":\\\"dasdsdas\\\"}\"}],\"LogicalExp\":\"OR\"}
     *
     * @var string
     */
    public $filterConditions;

    /**
     * @description The name of the filter condition.
     *
     * @example StopMachine
     *
     * @var string
     */
    public $name;

    /**
     * @description The key of the filter condition name.
     *
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
