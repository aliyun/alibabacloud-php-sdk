<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetTaskStatsSummaryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetTaskStatsSummaryResponseBody\data\statusDistribution;

class data extends Model
{
    /**
     * @var float
     */
    public $averageTaskDuration;

    /**
     * @var statusDistribution[]
     */
    public $statusDistribution;

    /**
     * @var int
     */
    public $taskTokenConsumption;

    /**
     * @var int
     */
    public $totalTasks;
    protected $_name = [
        'averageTaskDuration' => 'AverageTaskDuration',
        'statusDistribution' => 'StatusDistribution',
        'taskTokenConsumption' => 'TaskTokenConsumption',
        'totalTasks' => 'TotalTasks',
    ];

    public function validate()
    {
        if (\is_array($this->statusDistribution)) {
            Model::validateArray($this->statusDistribution);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->averageTaskDuration) {
            $res['AverageTaskDuration'] = $this->averageTaskDuration;
        }

        if (null !== $this->statusDistribution) {
            if (\is_array($this->statusDistribution)) {
                $res['StatusDistribution'] = [];
                $n1 = 0;
                foreach ($this->statusDistribution as $item1) {
                    $res['StatusDistribution'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taskTokenConsumption) {
            $res['TaskTokenConsumption'] = $this->taskTokenConsumption;
        }

        if (null !== $this->totalTasks) {
            $res['TotalTasks'] = $this->totalTasks;
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
        if (isset($map['AverageTaskDuration'])) {
            $model->averageTaskDuration = $map['AverageTaskDuration'];
        }

        if (isset($map['StatusDistribution'])) {
            if (!empty($map['StatusDistribution'])) {
                $model->statusDistribution = [];
                $n1 = 0;
                foreach ($map['StatusDistribution'] as $item1) {
                    $model->statusDistribution[$n1] = statusDistribution::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TaskTokenConsumption'])) {
            $model->taskTokenConsumption = $map['TaskTokenConsumption'];
        }

        if (isset($map['TotalTasks'])) {
            $model->totalTasks = $map['TotalTasks'];
        }

        return $model;
    }
}
