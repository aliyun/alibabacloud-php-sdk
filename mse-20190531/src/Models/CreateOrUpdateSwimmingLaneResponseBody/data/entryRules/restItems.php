<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\CreateOrUpdateSwimmingLaneResponseBody\data\entryRules;

use AlibabaCloud\Tea\Model;

class restItems extends Model
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
    public $name;

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
    public $type;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'cond'      => 'cond',
        'datum'     => 'datum',
        'divisor'   => 'divisor',
        'name'      => 'name',
        'nameList'  => 'nameList',
        'operator'  => 'operator',
        'rate'      => 'rate',
        'remainder' => 'remainder',
        'type'      => 'type',
        'value'     => 'value',
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
        if (null !== $this->datum) {
            $res['datum'] = $this->datum;
        }
        if (null !== $this->divisor) {
            $res['divisor'] = $this->divisor;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->nameList) {
            $res['nameList'] = $this->nameList;
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
     * @return restItems
     */
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['nameList'])) {
            if (!empty($map['nameList'])) {
                $model->nameList = $map['nameList'];
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
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
