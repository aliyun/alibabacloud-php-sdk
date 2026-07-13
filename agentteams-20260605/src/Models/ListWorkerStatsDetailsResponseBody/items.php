<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\ListWorkerStatsDetailsResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var int
     */
    public $llmCallCount;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $taskCount;

    /**
     * @var int
     */
    public $tokenUsage;
    protected $_name = [
        'llmCallCount' => 'LlmCallCount',
        'model' => 'Model',
        'name' => 'Name',
        'status' => 'Status',
        'taskCount' => 'TaskCount',
        'tokenUsage' => 'TokenUsage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->llmCallCount) {
            $res['LlmCallCount'] = $this->llmCallCount;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskCount) {
            $res['TaskCount'] = $this->taskCount;
        }

        if (null !== $this->tokenUsage) {
            $res['TokenUsage'] = $this->tokenUsage;
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
        if (isset($map['LlmCallCount'])) {
            $model->llmCallCount = $map['LlmCallCount'];
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskCount'])) {
            $model->taskCount = $map['TaskCount'];
        }

        if (isset($map['TokenUsage'])) {
            $model->tokenUsage = $map['TokenUsage'];
        }

        return $model;
    }
}
