<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\VariablesValue\funcValue;
use AlibabaCloud\Tea\Model;

class VariablesValue extends Model
{
    /**
     * @description Specifies whether the variable is not allowed to be modified.
     *
     * @example false
     *
     * @var bool
     */
    public $disableModify;

    /**
     * @description Specifies whether the variable is modified.
     *
     * @example false
     *
     * @var bool
     */
    public $isModify;

    /**
     * @description The variable value.
     *
     * @example ""
     *
     * @var string
     */
    public $value;

    /**
     * @description The description of the variable.
     *
     * @example ""
     *
     * @var string
     */
    public $description;

    /**
     * @description The template value of the variable.
     *
     * @example ""
     *
     * @var string
     */
    public $templateValue;

    /**
     * @description The variable type. Valid values:
     *
     *   NORMAL: common variable
     *   FUNCTION: function variable
     *
     * @example NORMAL
     *
     * @var string
     */
    public $type;

    /**
     * @description The function variables.
     *
     * @var funcValue
     */
    public $funcValue;
    protected $_name = [
        'disableModify' => 'disableModify',
        'isModify'      => 'isModify',
        'value'         => 'value',
        'description'   => 'description',
        'templateValue' => 'templateValue',
        'type'          => 'type',
        'funcValue'     => 'funcValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->disableModify) {
            $res['disableModify'] = $this->disableModify;
        }
        if (null !== $this->isModify) {
            $res['isModify'] = $this->isModify;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->templateValue) {
            $res['templateValue'] = $this->templateValue;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->funcValue) {
            $res['funcValue'] = null !== $this->funcValue ? $this->funcValue->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VariablesValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['disableModify'])) {
            $model->disableModify = $map['disableModify'];
        }
        if (isset($map['isModify'])) {
            $model->isModify = $map['isModify'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['templateValue'])) {
            $model->templateValue = $map['templateValue'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['funcValue'])) {
            $model->funcValue = funcValue::fromMap($map['funcValue']);
        }

        return $model;
    }
}
