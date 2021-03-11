<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\agent;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\asrResult;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitScore;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\recording;
use AlibabaCloud\Tea\Model;

class resultInfo extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $assignmentTime;

    /**
     * @var string
     */
    public $lastDataId;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var int
     */
    public $reviewStatus;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $reviewer;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $reviewTimeLong;

    /**
     * @var int
     */
    public $score;

    /**
     * @var int
     */
    public $reviewResult;

    /**
     * @var agent
     */
    public $agent;

    /**
     * @var string
     */
    public $createTimeLong;

    /**
     * @var asrResult
     */
    public $asrResult;

    /**
     * @var string
     */
    public $reviewTime;

    /**
     * @var hitScore
     */
    public $hitScore;

    /**
     * @var string
     */
    public $comments;

    /**
     * @var hitResult
     */
    public $hitResult;

    /**
     * @var recording
     */
    public $recording;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var int
     */
    public $reviewType;

    /**
     * @var string
     */
    public $resolver;
    protected $_name = [
        'status'         => 'Status',
        'assignmentTime' => 'AssignmentTime',
        'lastDataId'     => 'LastDataId',
        'errorMessage'   => 'ErrorMessage',
        'reviewStatus'   => 'ReviewStatus',
        'createTime'     => 'CreateTime',
        'reviewer'       => 'Reviewer',
        'taskName'       => 'TaskName',
        'reviewTimeLong' => 'ReviewTimeLong',
        'score'          => 'Score',
        'reviewResult'   => 'ReviewResult',
        'agent'          => 'Agent',
        'createTimeLong' => 'CreateTimeLong',
        'asrResult'      => 'AsrResult',
        'reviewTime'     => 'ReviewTime',
        'hitScore'       => 'HitScore',
        'comments'       => 'Comments',
        'hitResult'      => 'HitResult',
        'recording'      => 'Recording',
        'taskId'         => 'TaskId',
        'reviewType'     => 'ReviewType',
        'resolver'       => 'Resolver',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->assignmentTime) {
            $res['AssignmentTime'] = $this->assignmentTime;
        }
        if (null !== $this->lastDataId) {
            $res['LastDataId'] = $this->lastDataId;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->reviewStatus) {
            $res['ReviewStatus'] = $this->reviewStatus;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->reviewer) {
            $res['Reviewer'] = $this->reviewer;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->reviewTimeLong) {
            $res['ReviewTimeLong'] = $this->reviewTimeLong;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->reviewResult) {
            $res['ReviewResult'] = $this->reviewResult;
        }
        if (null !== $this->agent) {
            $res['Agent'] = null !== $this->agent ? $this->agent->toMap() : null;
        }
        if (null !== $this->createTimeLong) {
            $res['CreateTimeLong'] = $this->createTimeLong;
        }
        if (null !== $this->asrResult) {
            $res['AsrResult'] = null !== $this->asrResult ? $this->asrResult->toMap() : null;
        }
        if (null !== $this->reviewTime) {
            $res['ReviewTime'] = $this->reviewTime;
        }
        if (null !== $this->hitScore) {
            $res['HitScore'] = null !== $this->hitScore ? $this->hitScore->toMap() : null;
        }
        if (null !== $this->comments) {
            $res['Comments'] = $this->comments;
        }
        if (null !== $this->hitResult) {
            $res['HitResult'] = null !== $this->hitResult ? $this->hitResult->toMap() : null;
        }
        if (null !== $this->recording) {
            $res['Recording'] = null !== $this->recording ? $this->recording->toMap() : null;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->reviewType) {
            $res['ReviewType'] = $this->reviewType;
        }
        if (null !== $this->resolver) {
            $res['Resolver'] = $this->resolver;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['AssignmentTime'])) {
            $model->assignmentTime = $map['AssignmentTime'];
        }
        if (isset($map['LastDataId'])) {
            $model->lastDataId = $map['LastDataId'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['ReviewStatus'])) {
            $model->reviewStatus = $map['ReviewStatus'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Reviewer'])) {
            $model->reviewer = $map['Reviewer'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['ReviewTimeLong'])) {
            $model->reviewTimeLong = $map['ReviewTimeLong'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['ReviewResult'])) {
            $model->reviewResult = $map['ReviewResult'];
        }
        if (isset($map['Agent'])) {
            $model->agent = agent::fromMap($map['Agent']);
        }
        if (isset($map['CreateTimeLong'])) {
            $model->createTimeLong = $map['CreateTimeLong'];
        }
        if (isset($map['AsrResult'])) {
            $model->asrResult = asrResult::fromMap($map['AsrResult']);
        }
        if (isset($map['ReviewTime'])) {
            $model->reviewTime = $map['ReviewTime'];
        }
        if (isset($map['HitScore'])) {
            $model->hitScore = hitScore::fromMap($map['HitScore']);
        }
        if (isset($map['Comments'])) {
            $model->comments = $map['Comments'];
        }
        if (isset($map['HitResult'])) {
            $model->hitResult = hitResult::fromMap($map['HitResult']);
        }
        if (isset($map['Recording'])) {
            $model->recording = recording::fromMap($map['Recording']);
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['ReviewType'])) {
            $model->reviewType = $map['ReviewType'];
        }
        if (isset($map['Resolver'])) {
            $model->resolver = $map['Resolver'];
        }

        return $model;
    }
}
