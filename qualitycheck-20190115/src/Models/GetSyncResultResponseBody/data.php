<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSyncResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSyncResultResponseBody\data\agent;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSyncResultResponseBody\data\asrResult;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSyncResultResponseBody\data\hitResult;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSyncResultResponseBody\data\recording;

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
    public $reviewer;

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
    protected $_name = [
        'agent' => 'Agent',
        'asrResult' => 'AsrResult',
        'comments' => 'Comments',
        'createTime' => 'CreateTime',
        'errorMessage' => 'ErrorMessage',
        'hitResult' => 'HitResult',
        'recording' => 'Recording',
        'resolver' => 'Resolver',
        'reviewResult' => 'ReviewResult',
        'reviewStatus' => 'ReviewStatus',
        'reviewer' => 'Reviewer',
        'score' => 'Score',
        'status' => 'Status',
        'taskId' => 'TaskId',
        'taskName' => 'TaskName',
    ];

    public function validate()
    {
        if (null !== $this->agent) {
            $this->agent->validate();
        }
        if (\is_array($this->asrResult)) {
            Model::validateArray($this->asrResult);
        }
        if (\is_array($this->hitResult)) {
            Model::validateArray($this->hitResult);
        }
        if (null !== $this->recording) {
            $this->recording->validate();
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
            if (\is_array($this->asrResult)) {
                $res['AsrResult'] = [];
                $n1 = 0;
                foreach ($this->asrResult as $item1) {
                    $res['AsrResult'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->hitResult)) {
                $res['HitResult'] = [];
                $n1 = 0;
                foreach ($this->hitResult as $item1) {
                    $res['HitResult'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->recording) {
            $res['Recording'] = null !== $this->recording ? $this->recording->toArray($noStream) : $this->recording;
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
            if (!empty($map['AsrResult'])) {
                $model->asrResult = [];
                $n1 = 0;
                foreach ($map['AsrResult'] as $item1) {
                    $model->asrResult[$n1] = asrResult::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['HitResult'] as $item1) {
                    $model->hitResult[$n1] = hitResult::fromMap($item1);
                    ++$n1;
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
