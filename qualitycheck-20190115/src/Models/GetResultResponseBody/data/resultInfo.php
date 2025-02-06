<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\agent;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\asrResult;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitScore;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\recording;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\reviewHistoryList;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\reviewTypeIdList;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\schemeIdList;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\schemeNameList;

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
     * @var string
     */
    public $assignmentTime;
    /**
     * @var string
     */
    public $comments;
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $createTimeLong;
    /**
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
     * @var string
     */
    public $lastDataId;
    /**
     * @var recording
     */
    public $recording;
    /**
     * @var string
     */
    public $resolver;
    /**
     * @var reviewHistoryList
     */
    public $reviewHistoryList;
    /**
     * @var int
     */
    public $reviewResult;
    /**
     * @var int
     */
    public $reviewStatus;
    /**
     * @var string
     */
    public $reviewTime;
    /**
     * @var string
     */
    public $reviewTimeLong;
    /**
     * @var int
     */
    public $reviewType;
    /**
     * @var reviewTypeIdList
     */
    public $reviewTypeIdList;
    /**
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
     * @var int
     */
    public $score;
    /**
     * @var int
     */
    public $status;
    /**
     * @var string
     */
    public $taskId;
    /**
     * @var string
     */
    public $taskName;
    /**
     * @var string
     */
    public $vid;
    protected $_name = [
        'agent'             => 'Agent',
        'asrResult'         => 'AsrResult',
        'assignmentTime'    => 'AssignmentTime',
        'comments'          => 'Comments',
        'createTime'        => 'CreateTime',
        'createTimeLong'    => 'CreateTimeLong',
        'errorMessage'      => 'ErrorMessage',
        'hitResult'         => 'HitResult',
        'hitScore'          => 'HitScore',
        'lastDataId'        => 'LastDataId',
        'recording'         => 'Recording',
        'resolver'          => 'Resolver',
        'reviewHistoryList' => 'ReviewHistoryList',
        'reviewResult'      => 'ReviewResult',
        'reviewStatus'      => 'ReviewStatus',
        'reviewTime'        => 'ReviewTime',
        'reviewTimeLong'    => 'ReviewTimeLong',
        'reviewType'        => 'ReviewType',
        'reviewTypeIdList'  => 'ReviewTypeIdList',
        'reviewer'          => 'Reviewer',
        'schemeIdList'      => 'SchemeIdList',
        'schemeNameList'    => 'SchemeNameList',
        'score'             => 'Score',
        'status'            => 'Status',
        'taskId'            => 'TaskId',
        'taskName'          => 'TaskName',
        'vid'               => 'Vid',
    ];

    public function validate()
    {
        if (null !== $this->agent) {
            $this->agent->validate();
        }
        if (null !== $this->asrResult) {
            $this->asrResult->validate();
        }
        if (null !== $this->hitResult) {
            $this->hitResult->validate();
        }
        if (null !== $this->hitScore) {
            $this->hitScore->validate();
        }
        if (null !== $this->recording) {
            $this->recording->validate();
        }
        if (null !== $this->reviewHistoryList) {
            $this->reviewHistoryList->validate();
        }
        if (null !== $this->reviewTypeIdList) {
            $this->reviewTypeIdList->validate();
        }
        if (null !== $this->schemeIdList) {
            $this->schemeIdList->validate();
        }
        if (null !== $this->schemeNameList) {
            $this->schemeNameList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agent) {
            $res['Agent'] = null !== $this->agent ? $this->agent->toArray($noStream) : $this->agent;
        }

        if (null !== $this->asrResult) {
            $res['AsrResult'] = null !== $this->asrResult ? $this->asrResult->toArray($noStream) : $this->asrResult;
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
            $res['HitResult'] = null !== $this->hitResult ? $this->hitResult->toArray($noStream) : $this->hitResult;
        }

        if (null !== $this->hitScore) {
            $res['HitScore'] = null !== $this->hitScore ? $this->hitScore->toArray($noStream) : $this->hitScore;
        }

        if (null !== $this->lastDataId) {
            $res['LastDataId'] = $this->lastDataId;
        }

        if (null !== $this->recording) {
            $res['Recording'] = null !== $this->recording ? $this->recording->toArray($noStream) : $this->recording;
        }

        if (null !== $this->resolver) {
            $res['Resolver'] = $this->resolver;
        }

        if (null !== $this->reviewHistoryList) {
            $res['ReviewHistoryList'] = null !== $this->reviewHistoryList ? $this->reviewHistoryList->toArray($noStream) : $this->reviewHistoryList;
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

        if (null !== $this->reviewTypeIdList) {
            $res['ReviewTypeIdList'] = null !== $this->reviewTypeIdList ? $this->reviewTypeIdList->toArray($noStream) : $this->reviewTypeIdList;
        }

        if (null !== $this->reviewer) {
            $res['Reviewer'] = $this->reviewer;
        }

        if (null !== $this->schemeIdList) {
            $res['SchemeIdList'] = null !== $this->schemeIdList ? $this->schemeIdList->toArray($noStream) : $this->schemeIdList;
        }

        if (null !== $this->schemeNameList) {
            $res['SchemeNameList'] = null !== $this->schemeNameList ? $this->schemeNameList->toArray($noStream) : $this->schemeNameList;
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

        if (null !== $this->vid) {
            $res['Vid'] = $this->vid;
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

        if (isset($map['ReviewHistoryList'])) {
            $model->reviewHistoryList = reviewHistoryList::fromMap($map['ReviewHistoryList']);
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

        if (isset($map['ReviewTypeIdList'])) {
            $model->reviewTypeIdList = reviewTypeIdList::fromMap($map['ReviewTypeIdList']);
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

        if (isset($map['Vid'])) {
            $model->vid = $map['Vid'];
        }

        return $model;
    }
}
