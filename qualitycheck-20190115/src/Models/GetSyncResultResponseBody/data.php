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
     * @var agent
     */
    public $agent;

    /**
     * @var asrResult[]
     */
    public $asrResult;

    /**
     * @example xxx
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
     * @example xxxx
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @var hitResult[]
     */
    public $hitResult;

    /**
     * @var recording
     */
    public $recording;

    /**
     * @var string
     */
    public $resolver;

    /**
     * @example 3
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
     * @var string
     */
    public $reviewer;

    /**
     * @example 100
     *
     * @var int
     */
    public $score;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @example 20201231de3d34ec-40fa-4a55-8d27-76ea*****
     *
     * @var string
     */
    public $taskId;

    /**
     * @example xxx
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'agent'        => 'Agent',
        'asrResult'    => 'AsrResult',
        'comments'     => 'Comments',
        'createTime'   => 'CreateTime',
        'errorMessage' => 'ErrorMessage',
        'hitResult'    => 'HitResult',
        'recording'    => 'Recording',
        'resolver'     => 'Resolver',
        'reviewResult' => 'ReviewResult',
        'reviewStatus' => 'ReviewStatus',
        'reviewer'     => 'Reviewer',
        'score'        => 'Score',
        'status'       => 'Status',
        'taskId'       => 'TaskId',
        'taskName'     => 'TaskName',
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
            $res['AsrResult'] = [];
            if (null !== $this->asrResult && \is_array($this->asrResult)) {
                $n = 0;
                foreach ($this->asrResult as $item) {
                    $res['AsrResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->comments) {
            $res['Comments'] = $this->comments;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
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
        if (null !== $this->reviewer) {
            $res['Reviewer'] = $this->reviewer;
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['Comments'])) {
            $model->comments = $map['Comments'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
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
        if (isset($map['Reviewer'])) {
            $model->reviewer = $map['Reviewer'];
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
