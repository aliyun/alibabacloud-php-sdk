<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeGreyTagRouteResponseBody\data\dubboRules;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The comparison operator. Valid values: **>**, **<**, **>=**, **<=**, **==**, and **! =**.
     *
     * @example ==
     *
     * @var string
     */
    public $cond;

    /**
     * @description The expression that is used to obtain the value of the parameter. Valid values:
     *
     * - **Empty**: obtains the value of the parameter.
     * - **.name**: obtains the name property of the parameter. This expression works the same way as args0.getName().
     * - **.isEnabled()**: obtains the enabled property of the parameter. This expression works the same way as args0.isEnabled().
     * - **[0]**: indicates that the value of the parameter is an array and obtains the first value of the array. This expression works the same way as args0[0]. This expression does not start with a period (.).
     * - **.get(0)**: indicates that the value of the parameter is a list and obtains the first value of the list. This expression works the same way as args0.get(0).
     * - **.get("key")**: indicates that the value of the parameter is a map and obtains the value of the key in the map. This expression works the same way as args0.get("key").
     * @example .name
     *
     * @var string
     */
    public $expr;

    /**
     * @description The index of the parameter. The value 0 indicates the first parameter.
     *
     * @example 0
     *
     * @var int
     */
    public $index;

    /**
     * @description This parameter is not returned for Dubbo services.
     *
     * @example N/A
     *
     * @var string
     */
    public $name;

    /**
     * @description The operator. Valid values:
     *
     * - **rawvalue**: direct comparison.
     * - **list**: whitelist.
     * - **mod**: mods 100.
     * - **deterministic_proportional_steaming_division**: percentage.
     * @example rawvalue
     *
     * @var string
     */
    public $operator;

    /**
     * @description This parameter is not returned for Dubbo services.
     *
     * @example N/A
     *
     * @var string
     */
    public $type;

    /**
     * @description The value of the parameter. This value is compared with the value that is obtained based on the **expr** and **index** parameters.
     *
     * @example test
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'cond'     => 'cond',
        'expr'     => 'expr',
        'index'    => 'index',
        'name'     => 'name',
        'operator' => 'operator',
        'type'     => 'type',
        'value'    => 'value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cond) {
            $res['cond'] = $this->cond;
        }
        if (null !== $this->expr) {
            $res['expr'] = $this->expr;
        }
        if (null !== $this->index) {
            $res['index'] = $this->index;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->operator) {
            $res['operator'] = $this->operator;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cond'])) {
            $model->cond = $map['cond'];
        }
        if (isset($map['expr'])) {
            $model->expr = $map['expr'];
        }
        if (isset($map['index'])) {
            $model->index = $map['index'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['operator'])) {
            $model->operator = $map['operator'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
