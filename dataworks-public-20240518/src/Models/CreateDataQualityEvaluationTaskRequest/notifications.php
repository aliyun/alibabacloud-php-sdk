<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityEvaluationTaskRequest;

use AlibabaCloud\Tea\Model;

class notifications extends Model
{
    /**
     * @description The notification trigger condition. When this condition is met, the alert notification is triggered. Only two conditional expressions are supported:
     *
     * Specify only one group of rule strength type and rule check status, such as `${severity} == "High" AND ${status} == "Critical"`. In this expression, the hook trigger condition is met if severity is High and status is Critical. Specify multiple groups of rule strength types and rule check status, such as `(${severity} == "High" AND ${status} == "Critical") OR (${severity} == "Normal" AND ${status} == "Critical") OR (${severity} == "Normal" AND ${status} == "Error")`. In this expression, the hook trigger condition is met if severity is High and status is Critical, severity is Normal and status is Critical, or severity is Normal and status is Error. The enumeration of severity in a conditional expression is the same as the enumeration of severity in DataQualityRule. The enumeration of status in a conditional expression is the same as the enumeration of status in DataQualityResult.
     *
     * @example (${severity} == "High" AND ${status} == "Critical") OR (${severity} == "Normal" AND ${status} == "Critical") OR (${severity} == "Normal" AND ${status} == "Error")
     *
     * @var string
     */
    public $condition;

    /**
     * @description The configurations of the alert notification.
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
