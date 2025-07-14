<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListGreyTagRouteResponseBody\data\result\albRules;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example ==
     *
     * @var string
     */
    public $cond;

    /**
     * @example N/A
     *
     * @var string
     */
    public $expr;

    /**
     * @example N/A
     *
     * @var int
     */
    public $index;

    /**
     * @example example
     *
     * @var string
     */
    public $name;

    /**
     * @example rawvalue
     *
     * @var string
     */
    public $operator;

    /**
     * @example cookie
     *
     * @var string
     */
    public $type;

    /**
     * @example test
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'cond' => 'cond',
        'expr' => 'expr',
        'index' => 'index',
        'name' => 'name',
        'operator' => 'operator',
        'type' => 'type',
        'value' => 'value',
    ];

    public function validate() {}

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
