<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\QuerySyncResultResponseBody\deptStats;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\QuerySyncResultResponseBody\memberStats;

class QuerySyncResultResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $completedAt;

    /**
     * @var string
     */
    public $corpId;

    /**
     * @var deptStats
     */
    public $deptStats;

    /**
     * @var int
     */
    public $durationSeconds;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var memberStats
     */
    public $memberStats;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $platformType;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $startedAt;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $submittedAt;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var int
     */
    public $taskId;
    protected $_name = [
        'code' => 'code',
        'completedAt' => 'completedAt',
        'corpId' => 'corpId',
        'deptStats' => 'deptStats',
        'durationSeconds' => 'durationSeconds',
        'errorMessage' => 'errorMessage',
        'memberStats' => 'memberStats',
        'message' => 'message',
        'platformType' => 'platformType',
        'requestId' => 'requestId',
        'startedAt' => 'startedAt',
        'status' => 'status',
        'submittedAt' => 'submittedAt',
        'summary' => 'summary',
        'taskId' => 'taskId',
    ];

    public function validate()
    {
        if (null !== $this->deptStats) {
            $this->deptStats->validate();
        }
        if (null !== $this->memberStats) {
            $this->memberStats->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->completedAt) {
            $res['completedAt'] = $this->completedAt;
        }

        if (null !== $this->corpId) {
            $res['corpId'] = $this->corpId;
        }

        if (null !== $this->deptStats) {
            $res['deptStats'] = null !== $this->deptStats ? $this->deptStats->toArray($noStream) : $this->deptStats;
        }

        if (null !== $this->durationSeconds) {
            $res['durationSeconds'] = $this->durationSeconds;
        }

        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }

        if (null !== $this->memberStats) {
            $res['memberStats'] = null !== $this->memberStats ? $this->memberStats->toArray($noStream) : $this->memberStats;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->platformType) {
            $res['platformType'] = $this->platformType;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->startedAt) {
            $res['startedAt'] = $this->startedAt;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->submittedAt) {
            $res['submittedAt'] = $this->submittedAt;
        }

        if (null !== $this->summary) {
            $res['summary'] = $this->summary;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
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

        if (isset($map['completedAt'])) {
            $model->completedAt = $map['completedAt'];
        }

        if (isset($map['corpId'])) {
            $model->corpId = $map['corpId'];
        }

        if (isset($map['deptStats'])) {
            $model->deptStats = deptStats::fromMap($map['deptStats']);
        }

        if (isset($map['durationSeconds'])) {
            $model->durationSeconds = $map['durationSeconds'];
        }

        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }

        if (isset($map['memberStats'])) {
            $model->memberStats = memberStats::fromMap($map['memberStats']);
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['platformType'])) {
            $model->platformType = $map['platformType'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['startedAt'])) {
            $model->startedAt = $map['startedAt'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['submittedAt'])) {
            $model->submittedAt = $map['submittedAt'];
        }

        if (isset($map['summary'])) {
            $model->summary = $map['summary'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
