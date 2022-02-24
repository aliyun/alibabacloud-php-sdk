<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkItemInfoResponseBody\workitem\customFields;

use AlibabaCloud\Tea\Model;

class valueList extends Model
{
    /**
     * @description 根据语言环境获取当前展示的值
     *
     * @var string
     */
    public $displayValue;

    /**
     * @description 字段值为对象类型时，值所对应的对象的唯一标识 例如：option表中的id
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
     * @description 字段值
     *
     * @var string
     */
    public $value;

    /**
     * @description 字段英文值，目前只有列表类有英文值
     *
     * @var string
     */
    public $valueEn;
    protected $_name = [
        'displayValue' => 'displayValue',
        'identifier'   => 'identifier',
        'level'        => 'level',
        'value'        => 'value',
        'valueEn'      => 'valueEn',
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
        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }
        if (null !== $this->level) {
            $res['level'] = $this->level;
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
     * @return valueList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['displayValue'])) {
            $model->displayValue = $map['displayValue'];
        }
        if (isset($map['identifier'])) {
            $model->identifier = $map['identifier'];
        }
        if (isset($map['level'])) {
            $model->level = $map['level'];
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
