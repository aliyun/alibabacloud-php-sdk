<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetWafFilterResponseBody\filter\fields;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetWafFilterResponseBody\filter\fields\logics\validator;

class logics extends Model
{
    /**
     * @var int
     */
    public $attributes;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $kind;

    /**
     * @var string
     */
    public $minPlan;

    /**
     * @var bool
     */
    public $negative;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var string
     */
    public $symbol;

    /**
     * @var string
     */
    public $tip;

    /**
     * @var string
     */
    public $type;

    /**
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

    public function validate()
    {
        if (null !== $this->validator) {
            $this->validator->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['Validator'] = null !== $this->validator ? $this->validator->toArray($noStream) : $this->validator;
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
