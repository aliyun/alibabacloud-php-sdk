<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\GetKnowledgeBaseSmartIndexConfigurationResponseBody;

use AlibabaCloud\Dara\Model;

class task extends Model
{
    /**
     * @var string
     */
    public $billingId;

    /**
     * @var string
     */
    public $billingStatus;

    /**
     * @var string
     */
    public $executionStatus;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $lastError;

    /**
     * @var string
     */
    public $operation;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var string
     */
    public $reportStatus;

    /**
     * @var bool
     */
    public $reused;

    /**
     * @var string
     */
    public $taskKey;

    /**
     * @var string
     */
    public $triggerType;

    /**
     * @var bool
     */
    public $usageComplete;
    protected $_name = [
        'billingId' => 'billingId',
        'billingStatus' => 'billingStatus',
        'executionStatus' => 'executionStatus',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'lastError' => 'lastError',
        'operation' => 'operation',
        'progress' => 'progress',
        'reportStatus' => 'reportStatus',
        'reused' => 'reused',
        'taskKey' => 'taskKey',
        'triggerType' => 'triggerType',
        'usageComplete' => 'usageComplete',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billingId) {
            $res['billingId'] = $this->billingId;
        }

        if (null !== $this->billingStatus) {
            $res['billingStatus'] = $this->billingStatus;
        }

        if (null !== $this->executionStatus) {
            $res['executionStatus'] = $this->executionStatus;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->lastError) {
            $res['lastError'] = $this->lastError;
        }

        if (null !== $this->operation) {
            $res['operation'] = $this->operation;
        }

        if (null !== $this->progress) {
            $res['progress'] = $this->progress;
        }

        if (null !== $this->reportStatus) {
            $res['reportStatus'] = $this->reportStatus;
        }

        if (null !== $this->reused) {
            $res['reused'] = $this->reused;
        }

        if (null !== $this->taskKey) {
            $res['taskKey'] = $this->taskKey;
        }

        if (null !== $this->triggerType) {
            $res['triggerType'] = $this->triggerType;
        }

        if (null !== $this->usageComplete) {
            $res['usageComplete'] = $this->usageComplete;
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
        if (isset($map['billingId'])) {
            $model->billingId = $map['billingId'];
        }

        if (isset($map['billingStatus'])) {
            $model->billingStatus = $map['billingStatus'];
        }

        if (isset($map['executionStatus'])) {
            $model->executionStatus = $map['executionStatus'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['lastError'])) {
            $model->lastError = $map['lastError'];
        }

        if (isset($map['operation'])) {
            $model->operation = $map['operation'];
        }

        if (isset($map['progress'])) {
            $model->progress = $map['progress'];
        }

        if (isset($map['reportStatus'])) {
            $model->reportStatus = $map['reportStatus'];
        }

        if (isset($map['reused'])) {
            $model->reused = $map['reused'];
        }

        if (isset($map['taskKey'])) {
            $model->taskKey = $map['taskKey'];
        }

        if (isset($map['triggerType'])) {
            $model->triggerType = $map['triggerType'];
        }

        if (isset($map['usageComplete'])) {
            $model->usageComplete = $map['usageComplete'];
        }

        return $model;
    }
}
