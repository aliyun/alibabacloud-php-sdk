<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityEvaluationTaskInstancesResponseBody\pagingInfo\dataQualityEvaluationTaskInstances\task\notifications;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityEvaluationTaskInstancesResponseBody\pagingInfo\dataQualityEvaluationTaskInstances\task\notifications\notifications\nofiticationReceivers;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityEvaluationTaskInstancesResponseBody\pagingInfo\dataQualityEvaluationTaskInstances\task\notifications\notifications\notificationChannels;

class notifications extends Model
{
    /**
     * @var nofiticationReceivers[]
     */
    public $nofiticationReceivers;

    /**
     * @var notificationChannels[]
     */
    public $notificationChannels;
    protected $_name = [
        'nofiticationReceivers' => 'NofiticationReceivers',
        'notificationChannels' => 'NotificationChannels',
    ];

    public function validate()
    {
        if (\is_array($this->nofiticationReceivers)) {
            Model::validateArray($this->nofiticationReceivers);
        }
        if (\is_array($this->notificationChannels)) {
            Model::validateArray($this->notificationChannels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nofiticationReceivers) {
            if (\is_array($this->nofiticationReceivers)) {
                $res['NofiticationReceivers'] = [];
                $n1 = 0;
                foreach ($this->nofiticationReceivers as $item1) {
                    $res['NofiticationReceivers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NofiticationReceivers'])) {
            if (!empty($map['NofiticationReceivers'])) {
                $model->nofiticationReceivers = [];
                $n1 = 0;
                foreach ($map['NofiticationReceivers'] as $item1) {
                    $model->nofiticationReceivers[$n1] = nofiticationReceivers::fromMap($item1);
                    ++$n1;
                }
            }
        }

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

        return $model;
    }
}
