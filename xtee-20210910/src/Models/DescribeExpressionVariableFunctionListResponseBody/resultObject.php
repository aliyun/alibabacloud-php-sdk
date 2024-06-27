<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeExpressionVariableFunctionListResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $key;

    /**
     * @var int
     */
    public $maxParamSize;

    /**
     * @var int
     */
    public $minParamSize;

    /**
     * @var string
     */
    public $paramTypes;

    /**
     * @var bool
     */
    public $redirect;

    /**
     * @var string
     */
    public $returnTypes;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'description'  => 'description',
        'key'          => 'key',
        'maxParamSize' => 'maxParamSize',
        'minParamSize' => 'minParamSize',
        'paramTypes'   => 'paramTypes',
        'redirect'     => 'redirect',
        'returnTypes'  => 'returnTypes',
        'value'        => 'value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }
        if (null !== $this->maxParamSize) {
            $res['maxParamSize'] = $this->maxParamSize;
        }
        if (null !== $this->minParamSize) {
            $res['minParamSize'] = $this->minParamSize;
        }
        if (null !== $this->paramTypes) {
            $res['paramTypes'] = $this->paramTypes;
        }
        if (null !== $this->redirect) {
            $res['redirect'] = $this->redirect;
        }
        if (null !== $this->returnTypes) {
            $res['returnTypes'] = $this->returnTypes;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }
        if (isset($map['maxParamSize'])) {
            $model->maxParamSize = $map['maxParamSize'];
        }
        if (isset($map['minParamSize'])) {
            $model->minParamSize = $map['minParamSize'];
        }
        if (isset($map['paramTypes'])) {
            $model->paramTypes = $map['paramTypes'];
        }
        if (isset($map['redirect'])) {
            $model->redirect = $map['redirect'];
        }
        if (isset($map['returnTypes'])) {
            $model->returnTypes = $map['returnTypes'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
