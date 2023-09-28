<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetProvisionedProductPlanResponseBody\planDetail\approvalDetail;

use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetProvisionedProductPlanResponseBody\planDetail\approvalDetail\todoTaskActivities\tasks;
use AlibabaCloud\Tea\Model;

class todoTaskActivities extends Model
{
    /**
     * @description The name of the operation that is being performed by the plan.
     *
     * @example ApproverNode-1
     *
     * @var string
     */
    public $activityName;

    /**
     * @description An array consisting of tasks that are pending for review.
     *
     * @var tasks[]
     */
    public $tasks;
    protected $_name = [
        'activityName' => 'ActivityName',
        'tasks'        => 'Tasks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activityName) {
            $res['ActivityName'] = $this->activityName;
        }
        if (null !== $this->tasks) {
            $res['Tasks'] = [];
            if (null !== $this->tasks && \is_array($this->tasks)) {
                $n = 0;
                foreach ($this->tasks as $item) {
                    $res['Tasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return todoTaskActivities
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivityName'])) {
            $model->activityName = $map['ActivityName'];
        }
        if (isset($map['Tasks'])) {
            if (!empty($map['Tasks'])) {
                $model->tasks = [];
                $n            = 0;
                foreach ($map['Tasks'] as $item) {
                    $model->tasks[$n++] = null !== $item ? tasks::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
