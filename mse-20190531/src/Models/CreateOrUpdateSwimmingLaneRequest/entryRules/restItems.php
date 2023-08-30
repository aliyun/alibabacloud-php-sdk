<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\CreateOrUpdateSwimmingLaneRequest\entryRules;

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
