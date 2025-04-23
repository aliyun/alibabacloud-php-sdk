<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\VariablesValue\funcValue;

class VariablesValue extends Model
{
    /**
     * @var bool
     */
    public $disableModify;

    /**
     * @var bool
     */
    public $isModify;

    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $templateValue;

    /**
     * @var string
     */
    public $type;

    /**
     * @var funcValue
     */
    public $funcValue;
    protected $_name = [
        'disableModify' => 'disableModify',
        'isModify' => 'isModify',
        'value' => 'value',
        'description' => 'description',
        'templateValue' => 'templateValue',
        'type' => 'type',
        'funcValue' => 'funcValue',
    ];

    public function validate()
    {
        if (null !== $this->funcValue) {
            $this->funcValue->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['funcValue'] = null !== $this->funcValue ? $this->funcValue->toArray($noStream) : $this->funcValue;
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
