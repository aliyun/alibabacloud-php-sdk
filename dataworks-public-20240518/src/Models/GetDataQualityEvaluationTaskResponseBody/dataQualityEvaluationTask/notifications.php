<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityEvaluationTaskResponseBody\dataQualityEvaluationTask;

use AlibabaCloud\Dara\Model;

class notifications extends Model
{
    /**
     * @var string
     */
    public $condition;

    /**
     * @var notifications\notifications[]
     */
    public $notifications;
    protected $_name = [
        'condition' => 'Condition',
        'notifications' => 'Notifications',
    ];

    public function validate()
    {
        if (\is_array($this->notifications)) {
            Model::validateArray($this->notifications);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->condition) {
            $res['Condition'] = $this->condition;
        }

        if (null !== $this->notifications) {
            if (\is_array($this->notifications)) {
                $res['Notifications'] = [];
                $n1 = 0;
                foreach ($this->notifications as $item1) {
                    $res['Notifications'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Condition'])) {
            $model->condition = $map['Condition'];
        }

        if (isset($map['Notifications'])) {
            if (!empty($map['Notifications'])) {
                $model->notifications = [];
                $n1 = 0;
                foreach ($map['Notifications'] as $item1) {
                    $model->notifications[$n1++] = notifications\notifications::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
