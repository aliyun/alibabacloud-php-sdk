<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkItemInfoResponseBody\workitem;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkItemInfoResponseBody\workitem\customFields\valueList;

class customFields extends Model
{
    /**
     * @var string
     */
    public $fieldClassName;

    /**
     * @var string
     */
    public $fieldFormat;

    /**
     * @var string
     */
    public $fieldIdentifier;

    /**
     * @var int
     */
    public $level;

    /**
     * @var string
     */
    public $objectValue;

    /**
     * @var int
     */
    public $position;

    /**
     * @var string
     */
    public $value;

    /**
     * @var valueList[]
     */
    public $valueList;

    /**
     * @var string
     */
    public $workitemIdentifier;
    protected $_name = [
        'fieldClassName' => 'fieldClassName',
        'fieldFormat' => 'fieldFormat',
        'fieldIdentifier' => 'fieldIdentifier',
        'level' => 'level',
        'objectValue' => 'objectValue',
        'position' => 'position',
        'value' => 'value',
        'valueList' => 'valueList',
        'workitemIdentifier' => 'workitemIdentifier',
    ];

    public function validate()
    {
        if (\is_array($this->valueList)) {
            Model::validateArray($this->valueList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->valueList)) {
                $res['valueList'] = [];
                $n1 = 0;
                foreach ($this->valueList as $item1) {
                    $res['valueList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->workitemIdentifier) {
            $res['workitemIdentifier'] = $this->workitemIdentifier;
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
                $n1 = 0;
                foreach ($map['valueList'] as $item1) {
                    $model->valueList[$n1] = valueList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['workitemIdentifier'])) {
            $model->workitemIdentifier = $map['workitemIdentifier'];
        }

        return $model;
    }
}
