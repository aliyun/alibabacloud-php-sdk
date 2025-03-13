<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkItemInfoResponseBody\workitem;

use AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkItemInfoResponseBody\workitem\customFields\valueList;
use AlibabaCloud\Tea\Model;

class customFields extends Model
{
    /**
     * @example 例如：date
     *
     * @var string
     */
    public $fieldClassName;

    /**
     * @example 例：input
     *
     * @var string
     */
    public $fieldFormat;

    /**
     * @example 例：80
     *
     * @var string
     */
    public $fieldIdentifier;

    /**
     * @example 1
     *
     * @var int
     */
    public $level;

    /**
     * @example null
     *
     * @var string
     */
    public $objectValue;

    /**
     * @example 1
     *
     * @var int
     */
    public $position;

    /**
     * @example 例：2022-01-06 00:00:00
     *
     * @var string
     */
    public $value;

    /**
     * @var valueList[]
     */
    public $valueList;

    /**
     * @example 5daa9a15c7fd55523996......
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
