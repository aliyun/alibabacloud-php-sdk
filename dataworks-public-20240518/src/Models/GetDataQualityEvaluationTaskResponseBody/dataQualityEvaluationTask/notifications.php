<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityEvaluationTaskResponseBody\dataQualityEvaluationTask;

use AlibabaCloud\Tea\Model;

class notifications extends Model
{
    /**
     * @description 通知触发条件
     *
     * @example (${severity} == "High" AND ${status} == "Critical") OR (${severity} == "Normal" AND ${status} == "Critical") OR (${severity} == "Normal" AND ${status} == "Error")
     *
     * @var string
     */
    public $condition;

    /**
     * @description The configurations of the alert notification.
     *
     * @var \AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityEvaluationTaskResponseBody\dataQualityEvaluationTask\notifications\notifications[]
     */
    public $notifications;
    protected $_name = [
        'condition'     => 'Condition',
        'notifications' => 'Notifications',
    ];

    public function validate()
    {
    }

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
                $n                    = 0;
                foreach ($map['Notifications'] as $item) {
                    $model->notifications[$n++] = null !== $item ? \AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityEvaluationTaskResponseBody\dataQualityEvaluationTask\notifications\notifications::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
