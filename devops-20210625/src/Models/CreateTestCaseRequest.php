<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\SDK\Devops\V20210625\Models\CreateTestCaseRequest\fieldValueList;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateTestCaseRequest\testcaseStepContentInfo;
use AlibabaCloud\Tea\Model;

class CreateTestCaseRequest extends Model
{
    /**
     * @example 19xxxx31947xxxx
     *
     * @var string
     */
    public $assignedTo;

    /**
     * @example fdd395xxxxx9q9845xxxxx23
     *
     * @var string
     */
    public $directoryIdentifier;

    /**
     * @var fieldValueList[]
     */
    public $fieldValueList;

    /**
     * @example ik3dexxxxxfdfds1xxxxx23
     *
     * @var string
     */
    public $priority;

    /**
     * @example asd345xxxxx9q9845xxxxx34
     *
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
        'assignedTo'              => 'assignedTo',
        'directoryIdentifier'     => 'directoryIdentifier',
        'fieldValueList'          => 'fieldValueList',
        'priority'                => 'priority',
        'spaceIdentifier'         => 'spaceIdentifier',
        'subject'                 => 'subject',
        'tags'                    => 'tags',
        'testcaseStepContentInfo' => 'testcaseStepContentInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assignedTo) {
            $res['assignedTo'] = $this->assignedTo;
        }
        if (null !== $this->directoryIdentifier) {
            $res['directoryIdentifier'] = $this->directoryIdentifier;
        }
        if (null !== $this->fieldValueList) {
            $res['fieldValueList'] = [];
            if (null !== $this->fieldValueList && \is_array($this->fieldValueList)) {
                $n = 0;
                foreach ($this->fieldValueList as $item) {
                    $res['fieldValueList'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['tags'] = $this->tags;
        }
        if (null !== $this->testcaseStepContentInfo) {
            $res['testcaseStepContentInfo'] = null !== $this->testcaseStepContentInfo ? $this->testcaseStepContentInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTestCaseRequest
     */
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
                $n                     = 0;
                foreach ($map['fieldValueList'] as $item) {
                    $model->fieldValueList[$n++] = null !== $item ? fieldValueList::fromMap($item) : $item;
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
                $model->tags = $map['tags'];
            }
        }
        if (isset($map['testcaseStepContentInfo'])) {
            $model->testcaseStepContentInfo = testcaseStepContentInfo::fromMap($map['testcaseStepContentInfo']);
        }

        return $model;
    }
}
