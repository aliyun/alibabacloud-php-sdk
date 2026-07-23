<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;

class CreateExperimentRunRequest extends Model
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
     * @var string
     */
    public $experimentPlanId;

    /**
     * @var int
     */
    public $failedTasks;

    /**
     * @var OfflineExperimentConfig[]
     */
    public $offlineExperiments;

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
        'experimentPlanId' => 'experimentPlanId',
        'failedTasks' => 'failedTasks',
        'offlineExperiments' => 'offlineExperiments',
        'recordName' => 'recordName',
        'status' => 'status',
        'totalTasks' => 'totalTasks',
        'clientToken' => 'clientToken',
    ];

    public function validate()
    {
        if (\is_array($this->offlineExperiments)) {
            Model::validateArray($this->offlineExperiments);
        }
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

        if (null !== $this->experimentPlanId) {
            $res['experimentPlanId'] = $this->experimentPlanId;
        }

        if (null !== $this->failedTasks) {
            $res['failedTasks'] = $this->failedTasks;
        }

        if (null !== $this->offlineExperiments) {
            if (\is_array($this->offlineExperiments)) {
                $res['offlineExperiments'] = [];
                $n1 = 0;
                foreach ($this->offlineExperiments as $item1) {
                    $res['offlineExperiments'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['experimentPlanId'])) {
            $model->experimentPlanId = $map['experimentPlanId'];
        }

        if (isset($map['failedTasks'])) {
            $model->failedTasks = $map['failedTasks'];
        }

        if (isset($map['offlineExperiments'])) {
            if (!empty($map['offlineExperiments'])) {
                $model->offlineExperiments = [];
                $n1 = 0;
                foreach ($map['offlineExperiments'] as $item1) {
                    $model->offlineExperiments[$n1] = OfflineExperimentConfig::fromMap($item1);
                    ++$n1;
                }
            }
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
