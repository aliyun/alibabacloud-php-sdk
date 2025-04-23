<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Dara\Model;

class FilesConfigVariablesValue extends Model
{
    /**
     * @var string
     */
    public $description;

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
    public $type;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'description' => 'description',
        'disableModify' => 'disableModify',
        'isModify' => 'isModify',
        'type' => 'type',
        'value' => 'value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->disableModify) {
            $res['disableModify'] = $this->disableModify;
        }

        if (null !== $this->isModify) {
            $res['isModify'] = $this->isModify;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->value) {
            $res['value'] = $this->value;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['disableModify'])) {
            $model->disableModify = $map['disableModify'];
        }

        if (isset($map['isModify'])) {
            $model->isModify = $map['isModify'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
