<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\ListTeamDetailsResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $avatarUrl;

    /**
     * @var string
     */
    public $status;

    /**
     * @var float
     */
    public $successRate;

    /**
     * @var int
     */
    public $taskCount;

    /**
     * @var string
     */
    public $teamName;

    /**
     * @var int
     */
    public $tokenUsage;

    /**
     * @var int
     */
    public $workerCount;
    protected $_name = [
        'avatarUrl' => 'AvatarUrl',
        'status' => 'Status',
        'successRate' => 'SuccessRate',
        'taskCount' => 'TaskCount',
        'teamName' => 'TeamName',
        'tokenUsage' => 'TokenUsage',
        'workerCount' => 'WorkerCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avatarUrl) {
            $res['AvatarUrl'] = $this->avatarUrl;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->successRate) {
            $res['SuccessRate'] = $this->successRate;
        }

        if (null !== $this->taskCount) {
            $res['TaskCount'] = $this->taskCount;
        }

        if (null !== $this->teamName) {
            $res['TeamName'] = $this->teamName;
        }

        if (null !== $this->tokenUsage) {
            $res['TokenUsage'] = $this->tokenUsage;
        }

        if (null !== $this->workerCount) {
            $res['WorkerCount'] = $this->workerCount;
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
        if (isset($map['AvatarUrl'])) {
            $model->avatarUrl = $map['AvatarUrl'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SuccessRate'])) {
            $model->successRate = $map['SuccessRate'];
        }

        if (isset($map['TaskCount'])) {
            $model->taskCount = $map['TaskCount'];
        }

        if (isset($map['TeamName'])) {
            $model->teamName = $map['TeamName'];
        }

        if (isset($map['TokenUsage'])) {
            $model->tokenUsage = $map['TokenUsage'];
        }

        if (isset($map['WorkerCount'])) {
            $model->workerCount = $map['WorkerCount'];
        }

        return $model;
    }
}
