<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkItemInfoResponseBody\workitem;

use AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkItemInfoResponseBody\workitem\customFields\valueList;
use AlibabaCloud\Tea\Model;

class customFields extends Model
{
    /**
     * @description 字段的className，便于数据查询
     *
     * @var string
     */
    public $fieldClassName;

    /**
     * @description 字段格式，便于查询数据
     *
     * @var string
     */
    public $fieldFormat;

    /**
     * @description 字段的唯一标识
     *
     * @var string
     */
    public $fieldIdentifier;

    /**
     * @description 展示级别，数字范围1~9，数字越大，颜色越浅。
     *
     * @var int
     */
    public $level;

    /**
     * @description 值对象列表
     *
     * @var string
     */
    public $objectValue;

    /**
     * @description 自定义字段值的position
     *
     * @var int
     */
    public $position;

    /**
     * @description 字段值，写入时使用
     *
     * @var string
     */
    public $value;

    /**
     * @description 值对象列表，查询时使用
     *
     * @var valueList[]
     */
    public $valueList;

    /**
     * @description 工作项的唯一标识
     *
     * @var string
     */
    public $workitemIdentifier;
    protected $_name = [
        'fieldClassName'     => 'fieldClassName',
        'fieldFormat'        => 'fieldFormat',
        'fieldIdentifier'    => 'fieldIdentifier',
        'level'              => 'level',
        'objectValue'        => 'objectValue',
        'position'           => 'position',
        'value'              => 'value',
        'valueList'          => 'valueList',
        'workitemIdentifier' => 'workitemIdentifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fieldClassName) {
            $res['fieldClassName'] = $this->fieldClassName;
        }
        if (null !== $this->fieldFormat) {
            $res['fieldFormat'] = $this->fieldFormat;
        }
        if (null !== $this->fieldIdentifier) {
            $res['fieldIdentifier'] = $this->fieldIdentifier;
        }
        if (null !== $this->level) {
            $res['level'] = $this->level;
        }
        if (null !== $this->objectValue) {
            $res['objectValue'] = $this->objectValue;
        }
        if (null !== $this->position) {
            $res['position'] = $this->position;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }
        if (null !== $this->valueList) {
            $res['valueList'] = [];
            if (null !== $this->valueList && \is_array($this->valueList)) {
                $n = 0;
                foreach ($this->valueList as $item) {
                    $res['valueList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->workitemIdentifier) {
            $res['workitemIdentifier'] = $this->workitemIdentifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customFields
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fieldClassName'])) {
            $model->fieldClassName = $map['fieldClassName'];
        }
        if (isset($map['fieldFormat'])) {
            $model->fieldFormat = $map['fieldFormat'];
        }
        if (isset($map['fieldIdentifier'])) {
            $model->fieldIdentifier = $map['fieldIdentifier'];
        }
        if (isset($map['level'])) {
            $model->level = $map['level'];
        }
        if (isset($map['objectValue'])) {
            $model->objectValue = $map['objectValue'];
        }
        if (isset($map['position'])) {
            $model->position = $map['position'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }
        if (isset($map['valueList'])) {
            if (!empty($map['valueList'])) {
                $model->valueList = [];
                $n                = 0;
                foreach ($map['valueList'] as $item) {
                    $model->valueList[$n++] = null !== $item ? valueList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['workitemIdentifier'])) {
            $model->workitemIdentifier = $map['workitemIdentifier'];
        }

        return $model;
    }
}
