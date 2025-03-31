<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tingwu\V20230930\Models\GetTaskInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Tingwu\V20230930\Models\GetTaskInfoResponseBody\data\result;

class data extends Model
{
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
    public $outputMp3Path;

    /**
     * @var string
     */
    public $outputMp4Path;

    /**
     * @var string
     */
    public $outputSpectrumPath;

    /**
     * @var string
     */
    public $outputThumbnailPath;

    /**
     * @var result
     */
    public $result;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskKey;

    /**
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'outputMp3Path' => 'OutputMp3Path',
        'outputMp4Path' => 'OutputMp4Path',
        'outputSpectrumPath' => 'OutputSpectrumPath',
        'outputThumbnailPath' => 'OutputThumbnailPath',
        'result' => 'Result',
        'taskId' => 'TaskId',
        'taskKey' => 'TaskKey',
        'taskStatus' => 'TaskStatus',
    ];

    public function validate()
    {
        if (null !== $this->result) {
            $this->result->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->outputMp3Path) {
            $res['OutputMp3Path'] = $this->outputMp3Path;
        }

        if (null !== $this->outputMp4Path) {
            $res['OutputMp4Path'] = $this->outputMp4Path;
        }

        if (null !== $this->outputSpectrumPath) {
            $res['OutputSpectrumPath'] = $this->outputSpectrumPath;
        }

        if (null !== $this->outputThumbnailPath) {
            $res['OutputThumbnailPath'] = $this->outputThumbnailPath;
        }

        if (null !== $this->result) {
            $res['Result'] = null !== $this->result ? $this->result->toArray($noStream) : $this->result;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskKey) {
            $res['TaskKey'] = $this->taskKey;
        }

        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
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
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['OutputMp3Path'])) {
            $model->outputMp3Path = $map['OutputMp3Path'];
        }

        if (isset($map['OutputMp4Path'])) {
            $model->outputMp4Path = $map['OutputMp4Path'];
        }

        if (isset($map['OutputSpectrumPath'])) {
            $model->outputSpectrumPath = $map['OutputSpectrumPath'];
        }

        if (isset($map['OutputThumbnailPath'])) {
            $model->outputThumbnailPath = $map['OutputThumbnailPath'];
        }

        if (isset($map['Result'])) {
            $model->result = result::fromMap($map['Result']);
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskKey'])) {
            $model->taskKey = $map['TaskKey'];
        }

        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        return $model;
    }
}
