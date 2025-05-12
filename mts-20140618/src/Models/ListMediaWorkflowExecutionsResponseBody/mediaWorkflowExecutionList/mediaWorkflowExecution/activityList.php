<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ListMediaWorkflowExecutionsResponseBody\mediaWorkflowExecutionList\mediaWorkflowExecution;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListMediaWorkflowExecutionsResponseBody\mediaWorkflowExecutionList\mediaWorkflowExecution\activityList\activity;

class activityList extends Model
{
    /**
     * @var activity[]
     */
    public $activity;
    protected $_name = [
        'activity' => 'Activity',
    ];

    public function validate()
    {
        if (\is_array($this->activity)) {
            Model::validateArray($this->activity);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activity) {
            if (\is_array($this->activity)) {
                $res['Activity'] = [];
                $n1 = 0;
                foreach ($this->activity as $item1) {
                    $res['Activity'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Activity'])) {
            if (!empty($map['Activity'])) {
                $model->activity = [];
                $n1 = 0;
                foreach ($map['Activity'] as $item1) {
                    $model->activity[$n1++] = activity::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
