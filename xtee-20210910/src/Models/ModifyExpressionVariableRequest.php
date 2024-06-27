<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class ModifyExpressionVariableRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $dataVersion;

    /**
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $eventCode;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $expression;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $expressionTitle;

    /**
     * @var string
     */
    public $expressionVariable;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $id;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $outlier;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $outputs;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $regId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'lang'               => 'Lang',
        'dataVersion'        => 'dataVersion',
        'description'        => 'description',
        'eventCode'          => 'eventCode',
        'expression'         => 'expression',
        'expressionTitle'    => 'expressionTitle',
        'expressionVariable' => 'expressionVariable',
        'id'                 => 'id',
        'outlier'            => 'outlier',
        'outputs'            => 'outputs',
        'regId'              => 'regId',
        'title'              => 'title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->dataVersion) {
            $res['dataVersion'] = $this->dataVersion;
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
        if (null !== $this->id) {
            $res['id'] = $this->id;
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

    /**
     * @param array $map
     *
     * @return ModifyExpressionVariableRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['dataVersion'])) {
            $model->dataVersion = $map['dataVersion'];
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
        if (isset($map['id'])) {
            $model->id = $map['id'];
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
