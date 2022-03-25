<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SpeechFileTranscriberLite\V20211221\Models;

use AlibabaCloud\SDK\SpeechFileTranscriberLite\V20211221\Models\GetTaskResultResponseBody\result;
use AlibabaCloud\Tea\Model;

class GetTaskResultResponseBody extends Model
{
    /**
     * @var int
     */
    public $bizDuration;

    /**
     * @var int
     */
    public $recDuration;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var result
     */
    public $result;

    /**
     * @var int
     */
    public $solveTime;

    /**
     * @var int
     */
    public $statusCode;

    /**
     * @var string
     */
    public $statusText;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'bizDuration' => 'BizDuration',
        'recDuration' => 'RecDuration',
        'requestId'   => 'RequestId',
        'result'      => 'Result',
        'solveTime'   => 'SolveTime',
        'statusCode'  => 'StatusCode',
        'statusText'  => 'StatusText',
        'taskId'      => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizDuration) {
            $res['BizDuration'] = $this->bizDuration;
        }
        if (null !== $this->recDuration) {
            $res['RecDuration'] = $this->recDuration;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['Result'] = null !== $this->result ? $this->result->toMap() : null;
        }
        if (null !== $this->solveTime) {
            $res['SolveTime'] = $this->solveTime;
        }
        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
        }
        if (null !== $this->statusText) {
            $res['StatusText'] = $this->statusText;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTaskResultResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizDuration'])) {
            $model->bizDuration = $map['BizDuration'];
        }
        if (isset($map['RecDuration'])) {
            $model->recDuration = $map['RecDuration'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Result'])) {
            $model->result = result::fromMap($map['Result']);
        }
        if (isset($map['SolveTime'])) {
            $model->solveTime = $map['SolveTime'];
        }
        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }
        if (isset($map['StatusText'])) {
            $model->statusText = $map['StatusText'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
