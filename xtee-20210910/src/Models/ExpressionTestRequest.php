<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class ExpressionTestRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $expression;

    /**
     * @var string
     */
    public $expressionVariable;

    /**
     * @var string
     */
    public $expressionVariableIds;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $scene;
    protected $_name = [
        'lang' => 'Lang',
        'expression' => 'expression',
        'expressionVariable' => 'expressionVariable',
        'expressionVariableIds' => 'expressionVariableIds',
        'id' => 'id',
        'regId' => 'regId',
        'scene' => 'scene',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->expression) {
            $res['expression'] = $this->expression;
        }

        if (null !== $this->expressionVariable) {
            $res['expressionVariable'] = $this->expressionVariable;
        }

        if (null !== $this->expressionVariableIds) {
            $res['expressionVariableIds'] = $this->expressionVariableIds;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }

        if (null !== $this->scene) {
            $res['scene'] = $this->scene;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['expression'])) {
            $model->expression = $map['expression'];
        }

        if (isset($map['expressionVariable'])) {
            $model->expressionVariable = $map['expressionVariable'];
        }

        if (isset($map['expressionVariableIds'])) {
            $model->expressionVariableIds = $map['expressionVariableIds'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }

        if (isset($map['scene'])) {
            $model->scene = $map['scene'];
        }

        return $model;
    }
}
