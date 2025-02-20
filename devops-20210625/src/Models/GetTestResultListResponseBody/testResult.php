<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetTestResultListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetTestResultListResponseBody\testResult\assignedTo;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetTestResultListResponseBody\testResult\customFields;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetTestResultListResponseBody\testResult\testResultExecutor;

class testResult extends Model
{
    /**
     * @var assignedTo
     */
    public $assignedTo;
    /**
     * @var int
     */
    public $bugCount;
    /**
     * @var string
     */
    public $categoryIdentifier;
    /**
     * @var customFields[]
     */
    public $customFields;
    /**
     * @var int
     */
    public $gmtCreate;
    /**
     * @var string
     */
    public $spaceIdentifier;
    /**
     * @var string
     */
    public $subject;
    /**
     * @var testResultExecutor
     */
    public $testResultExecutor;
    /**
     * @var int
     */
    public $testResultGmtCreate;
    /**
     * @var string
     */
    public $testResultIdentifier;
    /**
     * @var string
     */
    public $testResultStatus;
    /**
     * @var string
     */
    public $testcaseIdentifier;
    protected $_name = [
        'assignedTo'           => 'assignedTo',
        'bugCount'             => 'bugCount',
        'categoryIdentifier'   => 'categoryIdentifier',
        'customFields'         => 'customFields',
        'gmtCreate'            => 'gmtCreate',
        'spaceIdentifier'      => 'spaceIdentifier',
        'subject'              => 'subject',
        'testResultExecutor'   => 'testResultExecutor',
        'testResultGmtCreate'  => 'testResultGmtCreate',
        'testResultIdentifier' => 'testResultIdentifier',
        'testResultStatus'     => 'testResultStatus',
        'testcaseIdentifier'   => 'testcaseIdentifier',
    ];

    public function validate()
    {
        if (null !== $this->assignedTo) {
            $this->assignedTo->validate();
        }
        if (\is_array($this->customFields)) {
            Model::validateArray($this->customFields);
        }
        if (null !== $this->testResultExecutor) {
            $this->testResultExecutor->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assignedTo) {
            $res['assignedTo'] = null !== $this->assignedTo ? $this->assignedTo->toArray($noStream) : $this->assignedTo;
        }

        if (null !== $this->bugCount) {
            $res['bugCount'] = $this->bugCount;
        }

        if (null !== $this->categoryIdentifier) {
            $res['categoryIdentifier'] = $this->categoryIdentifier;
        }

        if (null !== $this->customFields) {
            if (\is_array($this->customFields)) {
                $res['customFields'] = [];
                $n1                  = 0;
                foreach ($this->customFields as $item1) {
                    $res['customFields'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->spaceIdentifier) {
            $res['spaceIdentifier'] = $this->spaceIdentifier;
        }

        if (null !== $this->subject) {
            $res['subject'] = $this->subject;
        }

        if (null !== $this->testResultExecutor) {
            $res['testResultExecutor'] = null !== $this->testResultExecutor ? $this->testResultExecutor->toArray($noStream) : $this->testResultExecutor;
        }

        if (null !== $this->testResultGmtCreate) {
            $res['testResultGmtCreate'] = $this->testResultGmtCreate;
        }

        if (null !== $this->testResultIdentifier) {
            $res['testResultIdentifier'] = $this->testResultIdentifier;
        }

        if (null !== $this->testResultStatus) {
            $res['testResultStatus'] = $this->testResultStatus;
        }

        if (null !== $this->testcaseIdentifier) {
            $res['testcaseIdentifier'] = $this->testcaseIdentifier;
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
            $model->assignedTo = assignedTo::fromMap($map['assignedTo']);
        }

        if (isset($map['bugCount'])) {
            $model->bugCount = $map['bugCount'];
        }

        if (isset($map['categoryIdentifier'])) {
            $model->categoryIdentifier = $map['categoryIdentifier'];
        }

        if (isset($map['customFields'])) {
            if (!empty($map['customFields'])) {
                $model->customFields = [];
                $n1                  = 0;
                foreach ($map['customFields'] as $item1) {
                    $model->customFields[$n1++] = customFields::fromMap($item1);
                }
            }
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['spaceIdentifier'])) {
            $model->spaceIdentifier = $map['spaceIdentifier'];
        }

        if (isset($map['subject'])) {
            $model->subject = $map['subject'];
        }

        if (isset($map['testResultExecutor'])) {
            $model->testResultExecutor = testResultExecutor::fromMap($map['testResultExecutor']);
        }

        if (isset($map['testResultGmtCreate'])) {
            $model->testResultGmtCreate = $map['testResultGmtCreate'];
        }

        if (isset($map['testResultIdentifier'])) {
            $model->testResultIdentifier = $map['testResultIdentifier'];
        }

        if (isset($map['testResultStatus'])) {
            $model->testResultStatus = $map['testResultStatus'];
        }

        if (isset($map['testcaseIdentifier'])) {
            $model->testcaseIdentifier = $map['testcaseIdentifier'];
        }

        return $model;
    }
}
