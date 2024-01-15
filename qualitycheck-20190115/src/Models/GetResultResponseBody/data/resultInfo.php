<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\agent;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\asrResult;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitScore;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\recording;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\schemeIdList;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\schemeNameList;
use AlibabaCloud\Tea\Model;

class resultInfo extends Model
{
    /**
     * @var agent
     */
    public $agent;

    /**
     * @var asrResult
     */
    public $asrResult;

    /**
     * @example 2021-03-02T14:37Z
     *
     * @var string
     */
    public $assignmentTime;

    /**
     * @example xx
     *
     * @var string
     */
    public $comments;

    /**
     * @example 2019-07-24T19:31Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 1602743090
     *
     * @var string
     */
    public $createTimeLong;

    /**
     * @example xxx
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @var hitResult
     */
    public $hitResult;

    /**
     * @var hitScore
     */
    public $hitScore;

    /**
     * @example 4498420@a_z@93EAADF1-01D3-44BD-8AC9-F57F447EFCE8_1614*****
     *
     * @var string
     */
    public $lastDataId;

    /**
     * @var recording
     */
    public $recording;

    /**
     * @example XXX
     *
     * @var string
     */
    public $resolver;

    /**
     * @example 0
     *
     * @var int
     */
    public $reviewResult;

    /**
     * @example 1
     *
     * @var int
     */
    public $reviewStatus;

    /**
     * @example 2019-07-24T19:31Z
     *
     * @var string
     */
    public $reviewTime;

    /**
     * @example 1602743090
     *
     * @var string
     */
    public $reviewTimeLong;

    /**
     * @example 1
     *
     * @var int
     */
    public $reviewType;

    /**
     * @example xxx
     *
     * @var string
     */
    public $reviewer;

    /**
     * @var schemeIdList
     */
    public $schemeIdList;

    /**
     * @var schemeNameList
     */
    public $schemeNameList;

    /**
     * @example 100
     *
     * @var int
     */
    public $score;

    /**
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @example A6BEC8D-9A5B-4BE5-8432-4F635E***
     *
     * @var string
     */
    public $taskId;

    /**
     * @example test
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'agent'          => 'Agent',
        'asrResult'      => 'AsrResult',
        'assignmentTime' => 'AssignmentTime',
        'comments'       => 'Comments',
        'createTime'     => 'CreateTime',
        'createTimeLong' => 'CreateTimeLong',
        'errorMessage'   => 'ErrorMessage',
        'hitResult'      => 'HitResult',
        'hitScore'       => 'HitScore',
        'lastDataId'     => 'LastDataId',
        'recording'      => 'Recording',
        'resolver'       => 'Resolver',
        'reviewResult'   => 'ReviewResult',
        'reviewStatus'   => 'ReviewStatus',
        'reviewTime'     => 'ReviewTime',
        'reviewTimeLong' => 'ReviewTimeLong',
        'reviewType'     => 'ReviewType',
        'reviewer'       => 'Reviewer',
        'schemeIdList'   => 'SchemeIdList',
        'schemeNameList' => 'SchemeNameList',
        'score'          => 'Score',
        'status'         => 'Status',
        'taskId'         => 'TaskId',
        'taskName'       => 'TaskName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agent) {
            $res['Agent'] = null !== $this->agent ? $this->agent->toMap() : null;
        }
        if (null !== $this->asrResult) {
            $res['AsrResult'] = null !== $this->asrResult ? $this->asrResult->toMap() : null;
        }
        if (null !== $this->assignmentTime) {
            $res['AssignmentTime'] = $this->assignmentTime;
        }
        if (null !== $this->comments) {
            $res['Comments'] = $this->comments;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createTimeLong) {
            $res['CreateTimeLong'] = $this->createTimeLong;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->hitResult) {
            $res['HitResult'] = null !== $this->hitResult ? $this->hitResult->toMap() : null;
        }
        if (null !== $this->hitScore) {
            $res['HitScore'] = null !== $this->hitScore ? $this->hitScore->toMap() : null;
        }
        if (null !== $this->lastDataId) {
            $res['LastDataId'] = $this->lastDataId;
        }
        if (null !== $this->recording) {
            $res['Recording'] = null !== $this->recording ? $this->recording->toMap() : null;
        }
        if (null !== $this->resolver) {
            $res['Resolver'] = $this->resolver;
        }
        if (null !== $this->reviewResult) {
            $res['ReviewResult'] = $this->reviewResult;
        }
        if (null !== $this->reviewStatus) {
            $res['ReviewStatus'] = $this->reviewStatus;
        }
        if (null !== $this->reviewTime) {
            $res['ReviewTime'] = $this->reviewTime;
        }
        if (null !== $this->reviewTimeLong) {
            $res['ReviewTimeLong'] = $this->reviewTimeLong;
        }
        if (null !== $this->reviewType) {
            $res['ReviewType'] = $this->reviewType;
        }
        if (null !== $this->reviewer) {
            $res['Reviewer'] = $this->reviewer;
        }
        if (null !== $this->schemeIdList) {
            $res['SchemeIdList'] = null !== $this->schemeIdList ? $this->schemeIdList->toMap() : null;
        }
        if (null !== $this->schemeNameList) {
            $res['SchemeNameList'] = null !== $this->schemeNameList ? $this->schemeNameList->toMap() : null;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
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
        if (isset($map['Agent'])) {
            $model->agent = agent::fromMap($map['Agent']);
        }
        if (isset($map['AsrResult'])) {
            $model->asrResult = asrResult::fromMap($map['AsrResult']);
        }
        if (isset($map['AssignmentTime'])) {
            $model->assignmentTime = $map['AssignmentTime'];
        }
        if (isset($map['Comments'])) {
            $model->comments = $map['Comments'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateTimeLong'])) {
            $model->createTimeLong = $map['CreateTimeLong'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['HitResult'])) {
            $model->hitResult = hitResult::fromMap($map['HitResult']);
        }
        if (isset($map['HitScore'])) {
            $model->hitScore = hitScore::fromMap($map['HitScore']);
        }
        if (isset($map['LastDataId'])) {
            $model->lastDataId = $map['LastDataId'];
        }
        if (isset($map['Recording'])) {
            $model->recording = recording::fromMap($map['Recording']);
        }
        if (isset($map['Resolver'])) {
            $model->resolver = $map['Resolver'];
        }
        if (isset($map['ReviewResult'])) {
            $model->reviewResult = $map['ReviewResult'];
        }
        if (isset($map['ReviewStatus'])) {
            $model->reviewStatus = $map['ReviewStatus'];
        }
        if (isset($map['ReviewTime'])) {
            $model->reviewTime = $map['ReviewTime'];
        }
        if (isset($map['ReviewTimeLong'])) {
            $model->reviewTimeLong = $map['ReviewTimeLong'];
        }
        if (isset($map['ReviewType'])) {
            $model->reviewType = $map['ReviewType'];
        }
        if (isset($map['Reviewer'])) {
            $model->reviewer = $map['Reviewer'];
        }
        if (isset($map['SchemeIdList'])) {
            $model->schemeIdList = schemeIdList::fromMap($map['SchemeIdList']);
        }
        if (isset($map['SchemeNameList'])) {
            $model->schemeNameList = schemeNameList::fromMap($map['SchemeNameList']);
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
