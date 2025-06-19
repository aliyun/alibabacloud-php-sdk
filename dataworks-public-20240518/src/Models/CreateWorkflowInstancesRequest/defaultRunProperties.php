<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateWorkflowInstancesRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateWorkflowInstancesRequest\defaultRunProperties\alert;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateWorkflowInstancesRequest\defaultRunProperties\analysis;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateWorkflowInstancesRequest\defaultRunProperties\runPolicy;

class defaultRunProperties extends Model
{
    /**
     * @var alert
     */
    public $alert;

    /**
     * @var analysis
     */
    public $analysis;

    /**
     * @var int[]
     */
    public $excludeProjectIds;

    /**
     * @var int[]
     */
    public $excludeTaskIds;

    /**
     * @var int[]
     */
    public $includeProjectIds;

    /**
     * @var int[]
     */
    public $includeTaskIds;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $order;

    /**
     * @var int
     */
    public $parallelism;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var int[]
     */
    public $rootTaskIds;

    /**
     * @var runPolicy
     */
    public $runPolicy;

    /**
     * @var string
     */
    public $runtimeResource;
    protected $_name = [
        'alert' => 'Alert',
        'analysis' => 'Analysis',
        'excludeProjectIds' => 'ExcludeProjectIds',
        'excludeTaskIds' => 'ExcludeTaskIds',
        'includeProjectIds' => 'IncludeProjectIds',
        'includeTaskIds' => 'IncludeTaskIds',
        'mode' => 'Mode',
        'order' => 'Order',
        'parallelism' => 'Parallelism',
        'priority' => 'Priority',
        'rootTaskIds' => 'RootTaskIds',
        'runPolicy' => 'RunPolicy',
        'runtimeResource' => 'RuntimeResource',
    ];

    public function validate()
    {
        if (null !== $this->alert) {
            $this->alert->validate();
        }
        if (null !== $this->analysis) {
            $this->analysis->validate();
        }
        if (\is_array($this->excludeProjectIds)) {
            Model::validateArray($this->excludeProjectIds);
        }
        if (\is_array($this->excludeTaskIds)) {
            Model::validateArray($this->excludeTaskIds);
        }
        if (\is_array($this->includeProjectIds)) {
            Model::validateArray($this->includeProjectIds);
        }
        if (\is_array($this->includeTaskIds)) {
            Model::validateArray($this->includeTaskIds);
        }
        if (\is_array($this->rootTaskIds)) {
            Model::validateArray($this->rootTaskIds);
        }
        if (null !== $this->runPolicy) {
            $this->runPolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alert) {
            $res['Alert'] = null !== $this->alert ? $this->alert->toArray($noStream) : $this->alert;
        }

        if (null !== $this->analysis) {
            $res['Analysis'] = null !== $this->analysis ? $this->analysis->toArray($noStream) : $this->analysis;
        }

        if (null !== $this->excludeProjectIds) {
            if (\is_array($this->excludeProjectIds)) {
                $res['ExcludeProjectIds'] = [];
                $n1 = 0;
                foreach ($this->excludeProjectIds as $item1) {
                    $res['ExcludeProjectIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->excludeTaskIds) {
            if (\is_array($this->excludeTaskIds)) {
                $res['ExcludeTaskIds'] = [];
                $n1 = 0;
                foreach ($this->excludeTaskIds as $item1) {
                    $res['ExcludeTaskIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->includeProjectIds) {
            if (\is_array($this->includeProjectIds)) {
                $res['IncludeProjectIds'] = [];
                $n1 = 0;
                foreach ($this->includeProjectIds as $item1) {
                    $res['IncludeProjectIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->includeTaskIds) {
            if (\is_array($this->includeTaskIds)) {
                $res['IncludeTaskIds'] = [];
                $n1 = 0;
                foreach ($this->includeTaskIds as $item1) {
                    $res['IncludeTaskIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }

        if (null !== $this->parallelism) {
            $res['Parallelism'] = $this->parallelism;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->rootTaskIds) {
            if (\is_array($this->rootTaskIds)) {
                $res['RootTaskIds'] = [];
                $n1 = 0;
                foreach ($this->rootTaskIds as $item1) {
                    $res['RootTaskIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->runPolicy) {
            $res['RunPolicy'] = null !== $this->runPolicy ? $this->runPolicy->toArray($noStream) : $this->runPolicy;
        }

        if (null !== $this->runtimeResource) {
            $res['RuntimeResource'] = $this->runtimeResource;
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
        if (isset($map['Alert'])) {
            $model->alert = alert::fromMap($map['Alert']);
        }

        if (isset($map['Analysis'])) {
            $model->analysis = analysis::fromMap($map['Analysis']);
        }

        if (isset($map['ExcludeProjectIds'])) {
            if (!empty($map['ExcludeProjectIds'])) {
                $model->excludeProjectIds = [];
                $n1 = 0;
                foreach ($map['ExcludeProjectIds'] as $item1) {
                    $model->excludeProjectIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ExcludeTaskIds'])) {
            if (!empty($map['ExcludeTaskIds'])) {
                $model->excludeTaskIds = [];
                $n1 = 0;
                foreach ($map['ExcludeTaskIds'] as $item1) {
                    $model->excludeTaskIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['IncludeProjectIds'])) {
            if (!empty($map['IncludeProjectIds'])) {
                $model->includeProjectIds = [];
                $n1 = 0;
                foreach ($map['IncludeProjectIds'] as $item1) {
                    $model->includeProjectIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['IncludeTaskIds'])) {
            if (!empty($map['IncludeTaskIds'])) {
                $model->includeTaskIds = [];
                $n1 = 0;
                foreach ($map['IncludeTaskIds'] as $item1) {
                    $model->includeTaskIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }

        if (isset($map['Parallelism'])) {
            $model->parallelism = $map['Parallelism'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['RootTaskIds'])) {
            if (!empty($map['RootTaskIds'])) {
                $model->rootTaskIds = [];
                $n1 = 0;
                foreach ($map['RootTaskIds'] as $item1) {
                    $model->rootTaskIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RunPolicy'])) {
            $model->runPolicy = runPolicy::fromMap($map['RunPolicy']);
        }

        if (isset($map['RuntimeResource'])) {
            $model->runtimeResource = $map['RuntimeResource'];
        }

        return $model;
    }
}
