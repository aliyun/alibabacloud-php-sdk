<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetTestResultListResponseBody;

use AlibabaCloud\SDK\Devops\V20210625\Models\GetTestResultListResponseBody\testResult\assignedTo;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetTestResultListResponseBody\testResult\customFields;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetTestResultListResponseBody\testResult\testResultExecutor;
use AlibabaCloud\Tea\Model;

class testResult extends Model
{
    /**
     * @var assignedTo
     */
    public $assignedTo;

    /**
     * @example 8
     *
     * @var int
     */
    public $bugCount;

    /**
     * @example Req
     *
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
     * @example 测试工作项
     *
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
     * @example a8bxxxxxxxxxxxxxxxx54
     *
     * @var string
     */
    public $testResultIdentifier;

    /**
     * @example TO DO
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assignedTo) {
            $res['assignedTo'] = null !== $this->assignedTo ? $this->assignedTo->toMap() : null;
        }
        if (null !== $this->bugCount) {
            $res['bugCount'] = $this->bugCount;
        }
        if (null !== $this->categoryIdentifier) {
            $res['categoryIdentifier'] = $this->categoryIdentifier;
        }
        if (null !== $this->customFields) {
            $res['customFields'] = [];
            if (null !== $this->customFields && \is_array($this->customFields)) {
                $n = 0;
                foreach ($this->customFields as $item) {
                    $res['customFields'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['testResultExecutor'] = null !== $this->testResultExecutor ? $this->testResultExecutor->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return testResult
     */
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
                $n                   = 0;
                foreach ($map['customFields'] as $item) {
                    $model->customFields[$n++] = null !== $item ? customFields::fromMap($item) : $item;
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
