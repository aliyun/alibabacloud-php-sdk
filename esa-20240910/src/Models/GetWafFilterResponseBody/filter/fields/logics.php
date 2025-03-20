<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetWafFilterResponseBody\filter\fields;

use AlibabaCloud\SDK\ESA\V20240910\Models\GetWafFilterResponseBody\filter\fields\logics\validator;
use AlibabaCloud\Tea\Model;

class logics extends Model
{
    /**
     * @description A custom attribute. For example, this parameter can specify whether the value is case-sensitive.
     *
     * @example 1
     *
     * @var int
     */
    public $attributes;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @description The type of the value input box. Valid values:
     *
     *   select:single
     *   select:multi
     *   input:single
     *   input:multi
     *
     * @example input:single
     *
     * @var string
     */
    public $kind;

    /**
     * @var string
     */
    public $minPlan;

    /**
     * @description Indicates whether the match result is inverted.
     *
     * @var bool
     */
    public $negative;

    /**
     * @description The displayed matching characters.
     *
     * @example Does not equal
     *
     * @var string
     */
    public $operator;

    /**
     * @description The matching characters in the system.
     *
     * @example eq
     *
     * @var string
     */
    public $symbol;

    /**
     * @description The tip on how to enter a valid value that is required by the rules.
     *
     * @example e.g. image/jpeg
     *
     * @var string
     */
    public $tip;

    /**
     * @description The type of the value. Valid values:
     *
     *   integer
     *   integer_slice
     *   string
     *   string_slice
     *
     * @example string
     *
     * @var string
     */
    public $type;

    /**
     * @description The validator, which defines the validation rules for a value.
     *
     * @var validator
     */
    public $validator;
    protected $_name = [
        'attributes' => 'Attributes',
        'enable' => 'Enable',
        'kind' => 'Kind',
        'minPlan' => 'MinPlan',
        'negative' => 'Negative',
        'operator' => 'Operator',
        'symbol' => 'Symbol',
        'tip' => 'Tip',
        'type' => 'Type',
        'validator' => 'Validator',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributes) {
            $res['Attributes'] = $this->attributes;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->kind) {
            $res['Kind'] = $this->kind;
        }
        if (null !== $this->minPlan) {
            $res['MinPlan'] = $this->minPlan;
        }
        if (null !== $this->negative) {
            $res['Negative'] = $this->negative;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->symbol) {
            $res['Symbol'] = $this->symbol;
        }
        if (null !== $this->tip) {
            $res['Tip'] = $this->tip;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->validator) {
            $res['Validator'] = null !== $this->validator ? $this->validator->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attributes'])) {
            $model->attributes = $map['Attributes'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['Kind'])) {
            $model->kind = $map['Kind'];
        }
        if (isset($map['MinPlan'])) {
            $model->minPlan = $map['MinPlan'];
        }
        if (isset($map['Negative'])) {
            $model->negative = $map['Negative'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['Symbol'])) {
            $model->symbol = $map['Symbol'];
        }
        if (isset($map['Tip'])) {
            $model->tip = $map['Tip'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Validator'])) {
            $model->validator = validator::fromMap($map['Validator']);
        }

        return $model;
    }
}
