<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Tea\Model;

class FilesConfigVariablesValue extends Model
{
    /**
     * @description The description of the variable.
     *
     * @example Custom variable
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether the variable is not allowed to be modified.
     *
     * @example true
     *
     * @var bool
     */
    public $disableModify;

    /**
     * @description Specifies whether the variable is modified.
     *
     * @example true
     *
     * @var bool
     */
    public $isModify;

    /**
     * @description The variable type. Valid values: NORMAL: common variable. FUNCTION: function variable.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $type;

    /**
     * @description The variable value.
     *
     * @example test
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'description'   => 'description',
        'disableModify' => 'disableModify',
        'isModify'      => 'isModify',
        'type'          => 'type',
        'value'         => 'value',
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

    /**
     * @param array $map
     *
     * @return FilesConfigVariablesValue
     */
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
