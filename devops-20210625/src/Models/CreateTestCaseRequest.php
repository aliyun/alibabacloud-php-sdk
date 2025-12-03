<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateTestCaseRequest\fieldValueList;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateTestCaseRequest\testcaseStepContentInfo;

class CreateTestCaseRequest extends Model
{
    /**
     * @var string
     */
    public $assignedTo;

    /**
     * @var string
     */
    public $directoryIdentifier;

    /**
     * @var fieldValueList[]
     */
    public $fieldValueList;

    /**
     * @var string
     */
    public $priority;

    /**
     * @var string
     */
    public $spaceIdentifier;

    /**
     * @var string
     */
    public $subject;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @var testcaseStepContentInfo
     */
    public $testcaseStepContentInfo;
    protected $_name = [
        'assignedTo' => 'assignedTo',
        'directoryIdentifier' => 'directoryIdentifier',
        'fieldValueList' => 'fieldValueList',
        'priority' => 'priority',
        'spaceIdentifier' => 'spaceIdentifier',
        'subject' => 'subject',
        'tags' => 'tags',
        'testcaseStepContentInfo' => 'testcaseStepContentInfo',
    ];

    public function validate()
    {
        if (\is_array($this->fieldValueList)) {
            Model::validateArray($this->fieldValueList);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (null !== $this->testcaseStepContentInfo) {
            $this->testcaseStepContentInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assignedTo) {
            $res['assignedTo'] = $this->assignedTo;
        }

        if (null !== $this->directoryIdentifier) {
            $res['directoryIdentifier'] = $this->directoryIdentifier;
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

        if (null !== $this->priority) {
            $res['priority'] = $this->priority;
        }

        if (null !== $this->spaceIdentifier) {
            $res['spaceIdentifier'] = $this->spaceIdentifier;
        }

        if (null !== $this->subject) {
            $res['subject'] = $this->subject;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->testcaseStepContentInfo) {
            $res['testcaseStepContentInfo'] = null !== $this->testcaseStepContentInfo ? $this->testcaseStepContentInfo->toArray($noStream) : $this->testcaseStepContentInfo;
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

        if (isset($map['directoryIdentifier'])) {
            $model->directoryIdentifier = $map['directoryIdentifier'];
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

        if (isset($map['priority'])) {
            $model->priority = $map['priority'];
        }

        if (isset($map['spaceIdentifier'])) {
            $model->spaceIdentifier = $map['spaceIdentifier'];
        }

        if (isset($map['subject'])) {
            $model->subject = $map['subject'];
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['testcaseStepContentInfo'])) {
            $model->testcaseStepContentInfo = testcaseStepContentInfo::fromMap($map['testcaseStepContentInfo']);
        }

        return $model;
    }
}
