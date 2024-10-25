<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DataQualityEvaluationTask;

use AlibabaCloud\Tea\Model;

class notifications extends Model
{
    /**
     * @example ${blockType} == "Strong"
     *
     * @var string
     */
    public $condition;

    /**
     * @var \AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DataQualityEvaluationTask\notifications\notifications[]
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
                    $model->notifications[$n++] = null !== $item ? \AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DataQualityEvaluationTask\notifications\notifications::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
