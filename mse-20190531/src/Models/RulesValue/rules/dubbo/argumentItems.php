<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\RulesValue\rules\dubbo;

use AlibabaCloud\Tea\Model;

class argumentItems extends Model
{
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
    public $datum;

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
     * @var int
     */
    public $rate;

    /**
     * @var int
     */
    public $index;

    /**
     * @var string
     */
    public $expr;

    /**
     * @var mixed
     */
    public $value;
    protected $_name = [
        'operator'  => 'operator',
        'nameList'  => 'nameList',
        'datum'     => 'datum',
        'cond'      => 'cond',
        'divisor'   => 'divisor',
        'remainder' => 'remainder',
        'rate'      => 'rate',
        'index'     => 'index',
        'expr'      => 'expr',
        'value'     => 'value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operator) {
            $res['operator'] = $this->operator;
        }
        if (null !== $this->nameList) {
            $res['nameList'] = $this->nameList;
        }
        if (null !== $this->datum) {
            $res['datum'] = $this->datum;
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
        if (null !== $this->index) {
            $res['index'] = $this->index;
        }
        if (null !== $this->expr) {
            $res['expr'] = $this->expr;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return argumentItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['operator'])) {
            $model->operator = $map['operator'];
        }
        if (isset($map['nameList'])) {
            if (!empty($map['nameList'])) {
                $model->nameList = $map['nameList'];
            }
        }
        if (isset($map['datum'])) {
            $model->datum = $map['datum'];
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
        if (isset($map['index'])) {
            $model->index = $map['index'];
        }
        if (isset($map['expr'])) {
            $model->expr = $map['expr'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
