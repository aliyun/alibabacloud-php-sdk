<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeQueryVariableDetailResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var int
     */
    public $dataSourceCode;

    /**
     * @var string
     */
    public $dataSourceName;

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
     * @var int
     */
    public $id;

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
    public $title;
    protected $_name = [
        'dataSourceCode'     => 'dataSourceCode',
        'dataSourceName'     => 'dataSourceName',
        'description'        => 'description',
        'eventCode'          => 'eventCode',
        'expression'         => 'expression',
        'expressionTitle'    => 'expressionTitle',
        'expressionVariable' => 'expressionVariable',
        'id'                 => 'id',
        'outlier'            => 'outlier',
        'outputs'            => 'outputs',
        'title'              => 'title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceCode) {
            $res['dataSourceCode'] = $this->dataSourceCode;
        }
        if (null !== $this->dataSourceName) {
            $res['dataSourceName'] = $this->dataSourceName;
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
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dataSourceCode'])) {
            $model->dataSourceCode = $map['dataSourceCode'];
        }
        if (isset($map['dataSourceName'])) {
            $model->dataSourceName = $map['dataSourceName'];
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
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
