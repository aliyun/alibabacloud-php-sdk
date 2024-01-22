<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeGreyTagRouteResponseBody\data\scRules;

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
     * @description This parameter is not returned for Spring Cloud applications.
     *
     * @example N/A
     *
     * @var string
     */
    public $expr;

    /**
     * @description This parameter is not returned for Spring Cloud applications.
     *
     * @example N/A
     *
     * @var int
     */
    public $index;

    /**
     * @description The name of the parameter.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The operator. Valid values:
     *
     *   **rawvalue**: direct comparison.
     *   **list**: whitelist.
     *   **mod**: mods 100.
     *   **deterministic_proportional_steaming_division**: percentage.
     *
     * @example rawvalue
     *
     * @var string
     */
    public $operator;

    /**
     * @description The type of the comparison. Valid values:
     *
     *   **param**: parameter
     *   **cookie**: cookie
     *   **header**: header
     *
     * @example cookie
     *
     * @var string
     */
    public $type;

    /**
     * @description The value of the parameter. This value is compared with the value that is obtained based on the **type** and **name** parameters.
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
