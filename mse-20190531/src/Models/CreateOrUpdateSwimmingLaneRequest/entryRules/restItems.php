<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\CreateOrUpdateSwimmingLaneRequest\entryRules;

use AlibabaCloud\Tea\Model;

class restItems extends Model
{
    /**
     * @description The expression. =, >, <, >=, <=
     *
     * @example =
     *
     * @var string
     */
    public $cond;

    /**
     * @description The base value used for the rawvalue operator.
     *
     * @example .params[0]
     *
     * @var string
     */
    public $datum;

    /**
     * @description The divisor used for the mod operator.
     *
     * @example 10
     *
     * @var int
     */
    public $divisor;

    /**
     * @description The name of the rule. This parameter corresponds to the key of the Type parameter.
     *
     * @example ""
     *
     * @var string
     */
    public $name;

    /**
     * @description The list of names.
     *
     * @var string[]
     */
    public $nameList;

    /**
     * @description The operator type. Valid values: mod, list, rawvalue, and rate.
     *
     * @example mod
     *
     * @var string
     */
    public $operator;

    /**
     * @description The rate.
     *
     * @example 10
     *
     * @var int
     */
    public $rate;

    /**
     * @description The remainder used for the mod operator.
     *
     * @example 3
     *
     * @var int
     */
    public $remainder;

    /**
     * @description The type of the rule. Valid values: cookie, param, and header.
     *
     * @example header
     *
     * @var string
     */
    public $type;

    /**
     * @description The content of the rule.
     *
     * @example ""
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'cond'      => 'Cond',
        'datum'     => 'Datum',
        'divisor'   => 'Divisor',
        'name'      => 'Name',
        'nameList'  => 'NameList',
        'operator'  => 'Operator',
        'rate'      => 'Rate',
        'remainder' => 'Remainder',
        'type'      => 'Type',
        'value'     => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cond) {
            $res['Cond'] = $this->cond;
        }
        if (null !== $this->datum) {
            $res['Datum'] = $this->datum;
        }
        if (null !== $this->divisor) {
            $res['Divisor'] = $this->divisor;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nameList) {
            $res['NameList'] = $this->nameList;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->rate) {
            $res['Rate'] = $this->rate;
        }
        if (null !== $this->remainder) {
            $res['Remainder'] = $this->remainder;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['Cond'])) {
            $model->cond = $map['Cond'];
        }
        if (isset($map['Datum'])) {
            $model->datum = $map['Datum'];
        }
        if (isset($map['Divisor'])) {
            $model->divisor = $map['Divisor'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NameList'])) {
            if (!empty($map['NameList'])) {
                $model->nameList = $map['NameList'];
            }
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['Rate'])) {
            $model->rate = $map['Rate'];
        }
        if (isset($map['Remainder'])) {
            $model->remainder = $map['Remainder'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
