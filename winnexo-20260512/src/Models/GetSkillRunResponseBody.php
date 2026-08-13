<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class GetSkillRunResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $finishedAt;

    /**
     * @var mixed[][]
     */
    public $logs;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var string
     */
    public $progressMessage;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[]
     */
    public $result;

    /**
     * @var string
     */
    public $runId;

    /**
     * @var string
     */
    public $skillCode;

    /**
     * @var string
     */
    public $skillName;

    /**
     * @var string
     */
    public $startedAt;

    /**
     * @var string
     */
    public $status;

    /**
     * @var mixed[]
     */
    public $usage;
    protected $_name = [
        'code' => 'code',
        'createdAt' => 'createdAt',
        'errorCode' => 'errorCode',
        'errorMessage' => 'errorMessage',
        'finishedAt' => 'finishedAt',
        'logs' => 'logs',
        'message' => 'message',
        'progress' => 'progress',
        'progressMessage' => 'progressMessage',
        'requestId' => 'requestId',
        'result' => 'result',
        'runId' => 'runId',
        'skillCode' => 'skillCode',
        'skillName' => 'skillName',
        'startedAt' => 'startedAt',
        'status' => 'status',
        'usage' => 'usage',
    ];

    public function validate()
    {
        if (\is_array($this->logs)) {
            Model::validateArray($this->logs);
        }
        if (\is_array($this->result)) {
            Model::validateArray($this->result);
        }
        if (\is_array($this->usage)) {
            Model::validateArray($this->usage);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }

        if (null !== $this->finishedAt) {
            $res['finishedAt'] = $this->finishedAt;
        }

        if (null !== $this->logs) {
            if (\is_array($this->logs)) {
                $res['logs'] = [];
                $n1 = 0;
                foreach ($this->logs as $item1) {
                    if (\is_array($item1)) {
                        $res['logs'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['logs'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->progress) {
            $res['progress'] = $this->progress;
        }

        if (null !== $this->progressMessage) {
            $res['progressMessage'] = $this->progressMessage;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->result) {
            if (\is_array($this->result)) {
                $res['result'] = [];
                foreach ($this->result as $key1 => $value1) {
                    $res['result'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->runId) {
            $res['runId'] = $this->runId;
        }

        if (null !== $this->skillCode) {
            $res['skillCode'] = $this->skillCode;
        }

        if (null !== $this->skillName) {
            $res['skillName'] = $this->skillName;
        }

        if (null !== $this->startedAt) {
            $res['startedAt'] = $this->startedAt;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->usage) {
            if (\is_array($this->usage)) {
                $res['usage'] = [];
                foreach ($this->usage as $key1 => $value1) {
                    $res['usage'][$key1] = $value1;
                }
            }
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

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }

        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }

        if (isset($map['finishedAt'])) {
            $model->finishedAt = $map['finishedAt'];
        }

        if (isset($map['logs'])) {
            if (!empty($map['logs'])) {
                $model->logs = [];
                $n1 = 0;
                foreach ($map['logs'] as $item1) {
                    if (!empty($item1)) {
                        $model->logs[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->logs[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['progress'])) {
            $model->progress = $map['progress'];
        }

        if (isset($map['progressMessage'])) {
            $model->progressMessage = $map['progressMessage'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['result'])) {
            if (!empty($map['result'])) {
                $model->result = [];
                foreach ($map['result'] as $key1 => $value1) {
                    $model->result[$key1] = $value1;
                }
            }
        }

        if (isset($map['runId'])) {
            $model->runId = $map['runId'];
        }

        if (isset($map['skillCode'])) {
            $model->skillCode = $map['skillCode'];
        }

        if (isset($map['skillName'])) {
            $model->skillName = $map['skillName'];
        }

        if (isset($map['startedAt'])) {
            $model->startedAt = $map['startedAt'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['usage'])) {
            if (!empty($map['usage'])) {
                $model->usage = [];
                foreach ($map['usage'] as $key1 => $value1) {
                    $model->usage[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
