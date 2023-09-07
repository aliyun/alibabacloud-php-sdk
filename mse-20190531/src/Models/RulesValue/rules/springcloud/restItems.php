<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\RulesValue\rules\springcloud;

use AlibabaCloud\Tea\Model;

class restItems extends Model
{
    /**
     * @var string
     */
    public $datum;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var string[]
     */
    public $nameList;

    /**
     * @var string
     */
    public $cond;

    /**
     * @var int
     */
    public $divisor;

    /**
     * @var int
     */
    public $remainder;

    /**
     * @example 20
     *
     * @var int
     */
    public $rate;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $name;

    /**
     * @var mixed
     */
    public $value;
    protected $_name = [
        'datum'     => 'datum',
        'operator'  => 'operator',
        'nameList'  => 'nameList',
        'cond'      => 'cond',
        'divisor'   => 'divisor',
        'remainder' => 'remainder',
        'rate'      => 'rate',
        'type'      => 'type',
        'name'      => 'name',
        'value'     => 'value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datum) {
            $res['datum'] = $this->datum;
        }
        if (null !== $this->operator) {
            $res['operator'] = $this->operator;
        }
        if (null !== $this->nameList) {
            $res['nameList'] = $this->nameList;
        }
        if (null !== $this->cond) {
            $res['cond'] = $this->cond;
        }
        if (null !== $this->divisor) {
            $res['divisor'] = $this->divisor;
        }
        if (null !== $this->remainder) {
            $res['remainder'] = $this->remainder;
        }
        if (null !== $this->rate) {
            $res['rate'] = $this->rate;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return restItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['datum'])) {
            $model->datum = $map['datum'];
        }
        if (isset($map['operator'])) {
            $model->operator = $map['operator'];
        }
        if (isset($map['nameList'])) {
            if (!empty($map['nameList'])) {
                $model->nameList = $map['nameList'];
            }
        }
        if (isset($map['cond'])) {
            $model->cond = $map['cond'];
        }
        if (isset($map['divisor'])) {
            $model->divisor = $map['divisor'];
        }
        if (isset($map['remainder'])) {
            $model->remainder = $map['remainder'];
        }
        if (isset($map['rate'])) {
            $model->rate = $map['rate'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
