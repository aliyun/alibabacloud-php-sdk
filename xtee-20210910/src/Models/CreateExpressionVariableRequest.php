<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class CreateExpressionVariableRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $eventCode;

    /**
     * @var string
     */
    public $expression;

    /**
     * @var string
     */
    public $expressionTitle;

    /**
     * @var string
     */
    public $expressionVariable;

    /**
     * @var string
     */
    public $outlier;

    /**
     * @var string
     */
    public $outputs;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'lang' => 'Lang',
        'description' => 'description',
        'eventCode' => 'eventCode',
        'expression' => 'expression',
        'expressionTitle' => 'expressionTitle',
        'expressionVariable' => 'expressionVariable',
        'outlier' => 'outlier',
        'outputs' => 'outputs',
        'regId' => 'regId',
        'title' => 'title',
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

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->eventCode) {
            $res['eventCode'] = $this->eventCode;
        }

        if (null !== $this->expression) {
            $res['expression'] = $this->expression;
        }

        if (null !== $this->expressionTitle) {
            $res['expressionTitle'] = $this->expressionTitle;
        }

        if (null !== $this->expressionVariable) {
            $res['expressionVariable'] = $this->expressionVariable;
        }

        if (null !== $this->outlier) {
            $res['outlier'] = $this->outlier;
        }

        if (null !== $this->outputs) {
            $res['outputs'] = $this->outputs;
        }

        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
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

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['eventCode'])) {
            $model->eventCode = $map['eventCode'];
        }

        if (isset($map['expression'])) {
            $model->expression = $map['expression'];
        }

        if (isset($map['expressionTitle'])) {
            $model->expressionTitle = $map['expressionTitle'];
        }

        if (isset($map['expressionVariable'])) {
            $model->expressionVariable = $map['expressionVariable'];
        }

        if (isset($map['outlier'])) {
            $model->outlier = $map['outlier'];
        }

        if (isset($map['outputs'])) {
            $model->outputs = $map['outputs'];
        }

        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
