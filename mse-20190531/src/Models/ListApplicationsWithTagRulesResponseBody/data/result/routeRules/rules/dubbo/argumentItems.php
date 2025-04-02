<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListApplicationsWithTagRulesResponseBody\data\result\routeRules\rules\dubbo;

use AlibabaCloud\Dara\Model;

class argumentItems extends Model
{
    /**
     * @var string
     */
    public $cond;

    /**
     * @var string
     */
    public $datum;

    /**
     * @var int
     */
    public $divisor;

    /**
     * @var string
     */
    public $expr;

    /**
     * @var int
     */
    public $index;

    /**
     * @var string[]
     */
    public $nameList;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var int
     */
    public $rate;

    /**
     * @var int
     */
    public $remainder;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'cond' => 'cond',
        'datum' => 'datum',
        'divisor' => 'divisor',
        'expr' => 'expr',
        'index' => 'index',
        'nameList' => 'nameList',
        'operator' => 'operator',
        'rate' => 'rate',
        'remainder' => 'remainder',
        'value' => 'value',
    ];

    public function validate()
    {
        if (\is_array($this->nameList)) {
            Model::validateArray($this->nameList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cond) {
            $res['cond'] = $this->cond;
        }

        if (null !== $this->datum) {
            $res['datum'] = $this->datum;
        }

        if (null !== $this->divisor) {
            $res['divisor'] = $this->divisor;
        }

        if (null !== $this->expr) {
            $res['expr'] = $this->expr;
        }

        if (null !== $this->index) {
            $res['index'] = $this->index;
        }

        if (null !== $this->nameList) {
            if (\is_array($this->nameList)) {
                $res['nameList'] = [];
                $n1 = 0;
                foreach ($this->nameList as $item1) {
                    $res['nameList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->operator) {
            $res['operator'] = $this->operator;
        }

        if (null !== $this->rate) {
            $res['rate'] = $this->rate;
        }

        if (null !== $this->remainder) {
            $res['remainder'] = $this->remainder;
        }

        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cond'])) {
            $model->cond = $map['cond'];
        }

        if (isset($map['datum'])) {
            $model->datum = $map['datum'];
        }

        if (isset($map['divisor'])) {
            $model->divisor = $map['divisor'];
        }

        if (isset($map['expr'])) {
            $model->expr = $map['expr'];
        }

        if (isset($map['index'])) {
            $model->index = $map['index'];
        }

        if (isset($map['nameList'])) {
            if (!empty($map['nameList'])) {
                $model->nameList = [];
                $n1 = 0;
                foreach ($map['nameList'] as $item1) {
                    $model->nameList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['operator'])) {
            $model->operator = $map['operator'];
        }

        if (isset($map['rate'])) {
            $model->rate = $map['rate'];
        }

        if (isset($map['remainder'])) {
            $model->remainder = $map['remainder'];
        }

        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
