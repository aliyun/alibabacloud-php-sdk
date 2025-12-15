<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListJobsRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListJobsRequest\jobFilter\diagnosis;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListJobsRequest\jobFilter\sortBy;

class jobFilter extends Model
{
    /**
     * @var string
     */
    public $createTimeEnd;

    /**
     * @var string
     */
    public $createTimeStart;

    /**
     * @var diagnosis[]
     */
    public $diagnosis;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @var string
     */
    public $jobStatus;

    /**
     * @var string[]
     */
    public $nodes;

    /**
     * @var string[]
     */
    public $queues;

    /**
     * @var sortBy
     */
    public $sortBy;

    /**
     * @var string[]
     */
    public $users;
    protected $_name = [
        'createTimeEnd' => 'CreateTimeEnd',
        'createTimeStart' => 'CreateTimeStart',
        'diagnosis' => 'Diagnosis',
        'jobName' => 'JobName',
        'jobStatus' => 'JobStatus',
        'nodes' => 'Nodes',
        'queues' => 'Queues',
        'sortBy' => 'SortBy',
        'users' => 'Users',
    ];

    public function validate()
    {
        if (\is_array($this->diagnosis)) {
            Model::validateArray($this->diagnosis);
        }
        if (\is_array($this->nodes)) {
            Model::validateArray($this->nodes);
        }
        if (\is_array($this->queues)) {
            Model::validateArray($this->queues);
        }
        if (null !== $this->sortBy) {
            $this->sortBy->validate();
        }
        if (\is_array($this->users)) {
            Model::validateArray($this->users);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTimeEnd) {
            $res['CreateTimeEnd'] = $this->createTimeEnd;
        }

        if (null !== $this->createTimeStart) {
            $res['CreateTimeStart'] = $this->createTimeStart;
        }

        if (null !== $this->diagnosis) {
            if (\is_array($this->diagnosis)) {
                $res['Diagnosis'] = [];
                $n1 = 0;
                foreach ($this->diagnosis as $item1) {
                    $res['Diagnosis'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }

        if (null !== $this->jobStatus) {
            $res['JobStatus'] = $this->jobStatus;
        }

        if (null !== $this->nodes) {
            if (\is_array($this->nodes)) {
                $res['Nodes'] = [];
                $n1 = 0;
                foreach ($this->nodes as $item1) {
                    $res['Nodes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->queues) {
            if (\is_array($this->queues)) {
                $res['Queues'] = [];
                $n1 = 0;
                foreach ($this->queues as $item1) {
                    $res['Queues'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sortBy) {
            $res['SortBy'] = null !== $this->sortBy ? $this->sortBy->toArray($noStream) : $this->sortBy;
        }

        if (null !== $this->users) {
            if (\is_array($this->users)) {
                $res['Users'] = [];
                $n1 = 0;
                foreach ($this->users as $item1) {
                    $res['Users'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['CreateTimeEnd'])) {
            $model->createTimeEnd = $map['CreateTimeEnd'];
        }

        if (isset($map['CreateTimeStart'])) {
            $model->createTimeStart = $map['CreateTimeStart'];
        }

        if (isset($map['Diagnosis'])) {
            if (!empty($map['Diagnosis'])) {
                $model->diagnosis = [];
                $n1 = 0;
                foreach ($map['Diagnosis'] as $item1) {
                    $model->diagnosis[$n1] = diagnosis::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }

        if (isset($map['JobStatus'])) {
            $model->jobStatus = $map['JobStatus'];
        }

        if (isset($map['Nodes'])) {
            if (!empty($map['Nodes'])) {
                $model->nodes = [];
                $n1 = 0;
                foreach ($map['Nodes'] as $item1) {
                    $model->nodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Queues'])) {
            if (!empty($map['Queues'])) {
                $model->queues = [];
                $n1 = 0;
                foreach ($map['Queues'] as $item1) {
                    $model->queues[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SortBy'])) {
            $model->sortBy = sortBy::fromMap($map['SortBy']);
        }

        if (isset($map['Users'])) {
            if (!empty($map['Users'])) {
                $model->users = [];
                $n1 = 0;
                foreach ($map['Users'] as $item1) {
                    $model->users[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
