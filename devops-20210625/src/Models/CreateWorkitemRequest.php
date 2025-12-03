<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateWorkitemRequest\fieldValueList;

class CreateWorkitemRequest extends Model
{
    /**
     * @var string
     */
    public $assignedTo;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $descriptionFormat;

    /**
     * @var fieldValueList[]
     */
    public $fieldValueList;

    /**
     * @var string
     */
    public $parent;

    /**
     * @var string[]
     */
    public $participant;

    /**
     * @var string
     */
    public $space;

    /**
     * @var string
     */
    public $spaceIdentifier;

    /**
     * @var string
     */
    public $spaceType;

    /**
     * @var string[]
     */
    public $sprint;

    /**
     * @var string
     */
    public $subject;

    /**
     * @var string[]
     */
    public $tracker;

    /**
     * @var string[]
     */
    public $verifier;

    /**
     * @var string
     */
    public $workitemType;
    protected $_name = [
        'assignedTo' => 'assignedTo',
        'category' => 'category',
        'description' => 'description',
        'descriptionFormat' => 'descriptionFormat',
        'fieldValueList' => 'fieldValueList',
        'parent' => 'parent',
        'participant' => 'participant',
        'space' => 'space',
        'spaceIdentifier' => 'spaceIdentifier',
        'spaceType' => 'spaceType',
        'sprint' => 'sprint',
        'subject' => 'subject',
        'tracker' => 'tracker',
        'verifier' => 'verifier',
        'workitemType' => 'workitemType',
    ];

    public function validate()
    {
        if (\is_array($this->fieldValueList)) {
            Model::validateArray($this->fieldValueList);
        }
        if (\is_array($this->participant)) {
            Model::validateArray($this->participant);
        }
        if (\is_array($this->sprint)) {
            Model::validateArray($this->sprint);
        }
        if (\is_array($this->tracker)) {
            Model::validateArray($this->tracker);
        }
        if (\is_array($this->verifier)) {
            Model::validateArray($this->verifier);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assignedTo) {
            $res['assignedTo'] = $this->assignedTo;
        }

        if (null !== $this->category) {
            $res['category'] = $this->category;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->descriptionFormat) {
            $res['descriptionFormat'] = $this->descriptionFormat;
        }

        if (null !== $this->fieldValueList) {
            if (\is_array($this->fieldValueList)) {
                $res['fieldValueList'] = [];
                $n1 = 0;
                foreach ($this->fieldValueList as $item1) {
                    $res['fieldValueList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->parent) {
            $res['parent'] = $this->parent;
        }

        if (null !== $this->participant) {
            if (\is_array($this->participant)) {
                $res['participant'] = [];
                $n1 = 0;
                foreach ($this->participant as $item1) {
                    $res['participant'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->space) {
            $res['space'] = $this->space;
        }

        if (null !== $this->spaceIdentifier) {
            $res['spaceIdentifier'] = $this->spaceIdentifier;
        }

        if (null !== $this->spaceType) {
            $res['spaceType'] = $this->spaceType;
        }

        if (null !== $this->sprint) {
            if (\is_array($this->sprint)) {
                $res['sprint'] = [];
                $n1 = 0;
                foreach ($this->sprint as $item1) {
                    $res['sprint'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->subject) {
            $res['subject'] = $this->subject;
        }

        if (null !== $this->tracker) {
            if (\is_array($this->tracker)) {
                $res['tracker'] = [];
                $n1 = 0;
                foreach ($this->tracker as $item1) {
                    $res['tracker'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->verifier) {
            if (\is_array($this->verifier)) {
                $res['verifier'] = [];
                $n1 = 0;
                foreach ($this->verifier as $item1) {
                    $res['verifier'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->workitemType) {
            $res['workitemType'] = $this->workitemType;
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
        if (isset($map['assignedTo'])) {
            $model->assignedTo = $map['assignedTo'];
        }

        if (isset($map['category'])) {
            $model->category = $map['category'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['descriptionFormat'])) {
            $model->descriptionFormat = $map['descriptionFormat'];
        }

        if (isset($map['fieldValueList'])) {
            if (!empty($map['fieldValueList'])) {
                $model->fieldValueList = [];
                $n1 = 0;
                foreach ($map['fieldValueList'] as $item1) {
                    $model->fieldValueList[$n1] = fieldValueList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['parent'])) {
            $model->parent = $map['parent'];
        }

        if (isset($map['participant'])) {
            if (!empty($map['participant'])) {
                $model->participant = [];
                $n1 = 0;
                foreach ($map['participant'] as $item1) {
                    $model->participant[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['space'])) {
            $model->space = $map['space'];
        }

        if (isset($map['spaceIdentifier'])) {
            $model->spaceIdentifier = $map['spaceIdentifier'];
        }

        if (isset($map['spaceType'])) {
            $model->spaceType = $map['spaceType'];
        }

        if (isset($map['sprint'])) {
            if (!empty($map['sprint'])) {
                $model->sprint = [];
                $n1 = 0;
                foreach ($map['sprint'] as $item1) {
                    $model->sprint[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['subject'])) {
            $model->subject = $map['subject'];
        }

        if (isset($map['tracker'])) {
            if (!empty($map['tracker'])) {
                $model->tracker = [];
                $n1 = 0;
                foreach ($map['tracker'] as $item1) {
                    $model->tracker[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['verifier'])) {
            if (!empty($map['verifier'])) {
                $model->verifier = [];
                $n1 = 0;
                foreach ($map['verifier'] as $item1) {
                    $model->verifier[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['workitemType'])) {
            $model->workitemType = $map['workitemType'];
        }

        return $model;
    }
}
