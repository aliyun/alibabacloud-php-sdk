<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListActionPlanActivitiesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListActionPlanActivitiesResponseBody\actionPlanActivities\jobs;

class actionPlanActivities extends Model
{
    /**
     * @var string
     */
    public $actionPlanActivityId;

    /**
     * @var float
     */
    public $createdCapacity;

    /**
     * @var float
     */
    public $destroyCapacity;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var jobs[]
     */
    public $jobs;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'actionPlanActivityId' => 'ActionPlanActivityId',
        'createdCapacity' => 'CreatedCapacity',
        'destroyCapacity' => 'DestroyCapacity',
        'endTime' => 'EndTime',
        'jobs' => 'Jobs',
        'startTime' => 'StartTime',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->jobs)) {
            Model::validateArray($this->jobs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionPlanActivityId) {
            $res['ActionPlanActivityId'] = $this->actionPlanActivityId;
        }

        if (null !== $this->createdCapacity) {
            $res['CreatedCapacity'] = $this->createdCapacity;
        }

        if (null !== $this->destroyCapacity) {
            $res['DestroyCapacity'] = $this->destroyCapacity;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->jobs) {
            if (\is_array($this->jobs)) {
                $res['Jobs'] = [];
                $n1 = 0;
                foreach ($this->jobs as $item1) {
                    $res['Jobs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ActionPlanActivityId'])) {
            $model->actionPlanActivityId = $map['ActionPlanActivityId'];
        }

        if (isset($map['CreatedCapacity'])) {
            $model->createdCapacity = $map['CreatedCapacity'];
        }

        if (isset($map['DestroyCapacity'])) {
            $model->destroyCapacity = $map['DestroyCapacity'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Jobs'])) {
            if (!empty($map['Jobs'])) {
                $model->jobs = [];
                $n1 = 0;
                foreach ($map['Jobs'] as $item1) {
                    $model->jobs[$n1] = jobs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
