<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSyncResultResponseBody;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSyncResultResponseBody\data\agent;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSyncResultResponseBody\data\asrResult;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSyncResultResponseBody\data\hitResult;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSyncResultResponseBody\data\recording;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $reviewer;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $reviewStatus;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var int
     */
    public $reviewResult;

    /**
     * @var int
     */
    public $score;

    /**
     * @var agent
     */
    public $agent;

    /**
     * @var asrResult[]
     */
    public $asrResult;

    /**
     * @var hitResult[]
     */
    public $hitResult;

    /**
     * @var string
     */
    public $comments;

    /**
     * @var recording
     */
    public $recording;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $resolver;
    protected $_name = [
        'status'       => 'Status',
        'errorMessage' => 'ErrorMessage',
        'reviewer'     => 'Reviewer',
        'createTime'   => 'CreateTime',
        'reviewStatus' => 'ReviewStatus',
        'taskName'     => 'TaskName',
        'reviewResult' => 'ReviewResult',
        'score'        => 'Score',
        'agent'        => 'Agent',
        'asrResult'    => 'AsrResult',
        'hitResult'    => 'HitResult',
        'comments'     => 'Comments',
        'recording'    => 'Recording',
        'taskId'       => 'TaskId',
        'resolver'     => 'Resolver',
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
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->reviewer) {
            $res['Reviewer'] = $this->reviewer;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->reviewStatus) {
            $res['ReviewStatus'] = $this->reviewStatus;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->reviewResult) {
            $res['ReviewResult'] = $this->reviewResult;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->agent) {
            $res['Agent'] = null !== $this->agent ? $this->agent->toMap() : null;
        }
        if (null !== $this->asrResult) {
            $res['AsrResult'] = [];
            if (null !== $this->asrResult && \is_array($this->asrResult)) {
                $n = 0;
                foreach ($this->asrResult as $item) {
                    $res['AsrResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hitResult) {
            $res['HitResult'] = [];
            if (null !== $this->hitResult && \is_array($this->hitResult)) {
                $n = 0;
                foreach ($this->hitResult as $item) {
                    $res['HitResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->comments) {
            $res['Comments'] = $this->comments;
        }
        if (null !== $this->recording) {
            $res['Recording'] = null !== $this->recording ? $this->recording->toMap() : null;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->resolver) {
            $res['Resolver'] = $this->resolver;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['Reviewer'])) {
            $model->reviewer = $map['Reviewer'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ReviewStatus'])) {
            $model->reviewStatus = $map['ReviewStatus'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['ReviewResult'])) {
            $model->reviewResult = $map['ReviewResult'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Agent'])) {
            $model->agent = agent::fromMap($map['Agent']);
        }
        if (isset($map['AsrResult'])) {
            if (!empty($map['AsrResult'])) {
                $model->asrResult = [];
                $n                = 0;
                foreach ($map['AsrResult'] as $item) {
                    $model->asrResult[$n++] = null !== $item ? asrResult::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HitResult'])) {
            if (!empty($map['HitResult'])) {
                $model->hitResult = [];
                $n                = 0;
                foreach ($map['HitResult'] as $item) {
                    $model->hitResult[$n++] = null !== $item ? hitResult::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Comments'])) {
            $model->comments = $map['Comments'];
        }
        if (isset($map['Recording'])) {
            $model->recording = recording::fromMap($map['Recording']);
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Resolver'])) {
            $model->resolver = $map['Resolver'];
        }

        return $model;
    }
}
