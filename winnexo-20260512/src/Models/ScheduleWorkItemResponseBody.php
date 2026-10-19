<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class ScheduleWorkItemResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $created;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $planId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $revision;

    /**
     * @var string
     */
    public $runId;

    /**
     * @var int
     */
    public $runSeq;

    /**
     * @var string
     */
    public $workItemId;
    protected $_name = [
        'code' => 'code',
        'created' => 'created',
        'message' => 'message',
        'planId' => 'planId',
        'requestId' => 'requestId',
        'revision' => 'revision',
        'runId' => 'runId',
        'runSeq' => 'runSeq',
        'workItemId' => 'workItemId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->created) {
            $res['created'] = $this->created;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->planId) {
            $res['planId'] = $this->planId;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->revision) {
            $res['revision'] = $this->revision;
        }

        if (null !== $this->runId) {
            $res['runId'] = $this->runId;
        }

        if (null !== $this->runSeq) {
            $res['runSeq'] = $this->runSeq;
        }

        if (null !== $this->workItemId) {
            $res['workItemId'] = $this->workItemId;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['created'])) {
            $model->created = $map['created'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['planId'])) {
            $model->planId = $map['planId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['revision'])) {
            $model->revision = $map['revision'];
        }

        if (isset($map['runId'])) {
            $model->runId = $map['runId'];
        }

        if (isset($map['runSeq'])) {
            $model->runSeq = $map['runSeq'];
        }

        if (isset($map['workItemId'])) {
            $model->workItemId = $map['workItemId'];
        }

        return $model;
    }
}
