<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityEvaluationTaskResponseBody\dataQualityEvaluationTask;

use AlibabaCloud\Tea\Model;

class notifications extends Model
{
    /**
     * @description The notification trigger condition. When this condition is met, a message notification is triggered. Currently, only two conditional expressions are supported:
     *
     * - Specify only one set of rule severity types AND rule verification status, such as `${severity} = = "High" AND ${status} = = "Critical"`, which indicates that in the executed rule, if the rule verification result of severity High is Critical, the condition is met.
     * - Specify multiple sets of rule severity types AND rule verification status, such as `(${severity} = = "High" AND ${status} = "Critical") OR (${severity} = "Normal" AND ${status} = "Critical") OR (${severity} = "Normal" AND ${status} = "Error")`, if the rule verification result of severity High is Critical, the rule verification result of severity Normal is Critical, or the rule verification result of severity Normal is Error, the enumeration that satisfies the condition expression severity is consistent with the enumeration DataQualityRule in severity, and the enumeration of status is consistent with the status in DataQualityResult.
     *
     * @example (${severity} == "High" AND ${status} == "Critical") OR (${severity} == "Normal" AND ${status} == "Critical") OR (${severity} == "Normal" AND ${status} == "Error")
     *
     * @var string
     */
    public $condition;

    /**
     * @description The configurations of alert notifications.
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
