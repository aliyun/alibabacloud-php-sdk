<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityEvaluationTaskInstancesResponseBody\pagingInfo\dataQualityEvaluationTaskInstances\task;

use AlibabaCloud\Tea\Model;

class notifications extends Model
{
    /**
     * @description The trigger condition of the alert notification.
     *
     * @example ${severity} == "High"
     *
     * @var string
     */
    public $condition;

    /**
     * @description The configurations for the alert notification.
     *
     * @var notifications\notifications[]
     */
    public $notifications;
    protected $_name = [
        'condition' => 'Condition',
        'notifications' => 'Notifications',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->condition) {
            $res['Condition'] = $this->condition;
        }
        if (null !== $this->notifications) {
            $res['Notifications'] = [];
            if (null !== $this->notifications && \is_array($this->notifications)) {
                $n = 0;
                foreach ($this->notifications as $item) {
                    $res['Notifications'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return notifications
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Condition'])) {
            $model->condition = $map['Condition'];
        }
        if (isset($map['Notifications'])) {
            if (!empty($map['Notifications'])) {
                $model->notifications = [];
                $n = 0;
                foreach ($map['Notifications'] as $item) {
                    $model->notifications[$n++] = null !== $item ? notifications\notifications::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
