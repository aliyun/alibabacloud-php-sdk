<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDataQualityEvaluationTaskRequest\notifications;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDataQualityEvaluationTaskRequest\notifications\notifications\notificationChannels;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDataQualityEvaluationTaskRequest\notifications\notifications\notificationReceivers;

class notifications extends Model
{
    /**
     * @var notificationChannels[]
     */
    public $notificationChannels;

    /**
     * @var notificationReceivers[]
     */
    public $notificationReceivers;
    protected $_name = [
        'notificationChannels' => 'NotificationChannels',
        'notificationReceivers' => 'NotificationReceivers',
    ];

    public function validate()
    {
        if (\is_array($this->notificationChannels)) {
            Model::validateArray($this->notificationChannels);
        }
        if (\is_array($this->notificationReceivers)) {
            Model::validateArray($this->notificationReceivers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->notificationChannels) {
            if (\is_array($this->notificationChannels)) {
                $res['NotificationChannels'] = [];
                $n1 = 0;
                foreach ($this->notificationChannels as $item1) {
                    $res['NotificationChannels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->notificationReceivers) {
            if (\is_array($this->notificationReceivers)) {
                $res['NotificationReceivers'] = [];
                $n1 = 0;
                foreach ($this->notificationReceivers as $item1) {
                    $res['NotificationReceivers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NotificationChannels'])) {
            if (!empty($map['NotificationChannels'])) {
                $model->notificationChannels = [];
                $n1 = 0;
                foreach ($map['NotificationChannels'] as $item1) {
                    $model->notificationChannels[$n1] = notificationChannels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NotificationReceivers'])) {
            if (!empty($map['NotificationReceivers'])) {
                $model->notificationReceivers = [];
                $n1 = 0;
                foreach ($map['NotificationReceivers'] as $item1) {
                    $model->notificationReceivers[$n1] = notificationReceivers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
