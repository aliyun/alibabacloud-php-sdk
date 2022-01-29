<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListWorkItemAllFieldsResponseBody\fields;

use AlibabaCloud\Tea\Model;

class options extends Model
{
    /**
     * @description 根据语言环境获取当前展示的值
     *
     * @var string
     */
    public $displayValue;

    /**
     * @description 字段唯一标识
     *
     * @var string
     */
    public $fieldIdentifier;

    /**
     * @description 待选值的唯一标识
     *
     * @var string
     */
    public $identifier;

    /**
     * @description 展示级别，数字范围1~9，数字越大，颜色越浅。
     *
     * @var int
     */
    public $level;

    /**
     * @description 待选值顺序
     *
     * @var int
     */
    public $position;

    /**
     * @description 待选值中文名称
     *
     * @var string
     */
    public $value;

    /**
     * @description 待选值英文名称
     *
     * @var string
     */
    public $valueEn;
    protected $_name = [
        'displayValue'    => 'displayValue',
        'fieldIdentifier' => 'fieldIdentifier',
        'identifier'      => 'identifier',
        'level'           => 'level',
        'position'        => 'position',
        'value'           => 'value',
        'valueEn'         => 'valueEn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayValue) {
            $res['displayValue'] = $this->displayValue;
        }
        if (null !== $this->fieldIdentifier) {
            $res['fieldIdentifier'] = $this->fieldIdentifier;
        }
        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }
        if (null !== $this->level) {
            $res['level'] = $this->level;
        }
        if (null !== $this->position) {
            $res['position'] = $this->position;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }
        if (null !== $this->valueEn) {
            $res['valueEn'] = $this->valueEn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return options
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['displayValue'])) {
            $model->displayValue = $map['displayValue'];
        }
        if (isset($map['fieldIdentifier'])) {
            $model->fieldIdentifier = $map['fieldIdentifier'];
        }
        if (isset($map['identifier'])) {
            $model->identifier = $map['identifier'];
        }
        if (isset($map['level'])) {
            $model->level = $map['level'];
        }
        if (isset($map['position'])) {
            $model->position = $map['position'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }
        if (isset($map['valueEn'])) {
            $model->valueEn = $map['valueEn'];
        }

        return $model;
    }
}
