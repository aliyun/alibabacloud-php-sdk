<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;

class UpdateExperimentRunRequest extends Model
{
    /**
     * @var int
     */
    public $completedAt;

    /**
     * @var int
     */
    public $completedTasks;

    /**
     * @var int
     */
    public $executedAt;

    /**
     * @var int
     */
    public $failedTasks;

    /**
     * @var string
     */
    public $recordName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $totalTasks;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'completedAt' => 'completedAt',
        'completedTasks' => 'completedTasks',
        'executedAt' => 'executedAt',
        'failedTasks' => 'failedTasks',
        'recordName' => 'recordName',
        'status' => 'status',
        'totalTasks' => 'totalTasks',
        'clientToken' => 'clientToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->completedAt) {
            $res['completedAt'] = $this->completedAt;
        }

        if (null !== $this->completedTasks) {
            $res['completedTasks'] = $this->completedTasks;
        }

        if (null !== $this->executedAt) {
            $res['executedAt'] = $this->executedAt;
        }

        if (null !== $this->failedTasks) {
            $res['failedTasks'] = $this->failedTasks;
        }

        if (null !== $this->recordName) {
            $res['recordName'] = $this->recordName;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->totalTasks) {
            $res['totalTasks'] = $this->totalTasks;
        }

        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
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
        if (isset($map['completedAt'])) {
            $model->completedAt = $map['completedAt'];
        }

        if (isset($map['completedTasks'])) {
            $model->completedTasks = $map['completedTasks'];
        }

        if (isset($map['executedAt'])) {
            $model->executedAt = $map['executedAt'];
        }

        if (isset($map['failedTasks'])) {
            $model->failedTasks = $map['failedTasks'];
        }

        if (isset($map['recordName'])) {
            $model->recordName = $map['recordName'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['totalTasks'])) {
            $model->totalTasks = $map['totalTasks'];
        }

        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}
