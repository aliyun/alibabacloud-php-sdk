<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\UpdateKnowledgeBaseSmartIndexConfigurationResponseBody\artifacts;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\UpdateKnowledgeBaseSmartIndexConfigurationResponseBody\schedule;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\UpdateKnowledgeBaseSmartIndexConfigurationResponseBody\task;

class UpdateKnowledgeBaseSmartIndexConfigurationResponseBody extends Model
{
    /**
     * @var artifacts
     */
    public $artifacts;

    /**
     * @var string
     */
    public $billingId;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $lastError;

    /**
     * @var string
     */
    public $lastSuccessTaskId;

    /**
     * @var string
     */
    public $lifecycle;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $revision;

    /**
     * @var schedule
     */
    public $schedule;

    /**
     * @var string
     */
    public $targetDirId;

    /**
     * @var task
     */
    public $task;
    protected $_name = [
        'artifacts' => 'artifacts',
        'billingId' => 'billingId',
        'code' => 'code',
        'directoryId' => 'directoryId',
        'enabled' => 'enabled',
        'lastError' => 'lastError',
        'lastSuccessTaskId' => 'lastSuccessTaskId',
        'lifecycle' => 'lifecycle',
        'message' => 'message',
        'requestId' => 'requestId',
        'revision' => 'revision',
        'schedule' => 'schedule',
        'targetDirId' => 'targetDirId',
        'task' => 'task',
    ];

    public function validate()
    {
        if (null !== $this->artifacts) {
            $this->artifacts->validate();
        }
        if (null !== $this->schedule) {
            $this->schedule->validate();
        }
        if (null !== $this->task) {
            $this->task->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->artifacts) {
            $res['artifacts'] = null !== $this->artifacts ? $this->artifacts->toArray($noStream) : $this->artifacts;
        }

        if (null !== $this->billingId) {
            $res['billingId'] = $this->billingId;
        }

        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->directoryId) {
            $res['directoryId'] = $this->directoryId;
        }

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->lastError) {
            $res['lastError'] = $this->lastError;
        }

        if (null !== $this->lastSuccessTaskId) {
            $res['lastSuccessTaskId'] = $this->lastSuccessTaskId;
        }

        if (null !== $this->lifecycle) {
            $res['lifecycle'] = $this->lifecycle;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->revision) {
            $res['revision'] = $this->revision;
        }

        if (null !== $this->schedule) {
            $res['schedule'] = null !== $this->schedule ? $this->schedule->toArray($noStream) : $this->schedule;
        }

        if (null !== $this->targetDirId) {
            $res['targetDirId'] = $this->targetDirId;
        }

        if (null !== $this->task) {
            $res['task'] = null !== $this->task ? $this->task->toArray($noStream) : $this->task;
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
        if (isset($map['artifacts'])) {
            $model->artifacts = artifacts::fromMap($map['artifacts']);
        }

        if (isset($map['billingId'])) {
            $model->billingId = $map['billingId'];
        }

        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['directoryId'])) {
            $model->directoryId = $map['directoryId'];
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['lastError'])) {
            $model->lastError = $map['lastError'];
        }

        if (isset($map['lastSuccessTaskId'])) {
            $model->lastSuccessTaskId = $map['lastSuccessTaskId'];
        }

        if (isset($map['lifecycle'])) {
            $model->lifecycle = $map['lifecycle'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['revision'])) {
            $model->revision = $map['revision'];
        }

        if (isset($map['schedule'])) {
            $model->schedule = schedule::fromMap($map['schedule']);
        }

        if (isset($map['targetDirId'])) {
            $model->targetDirId = $map['targetDirId'];
        }

        if (isset($map['task'])) {
            $model->task = task::fromMap($map['task']);
        }

        return $model;
    }
}
