<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityEvaluationTaskInstancesResponseBody\pagingInfo\dataQualityEvaluationTaskInstances\task\notifications;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityEvaluationTaskInstancesResponseBody\pagingInfo\dataQualityEvaluationTaskInstances\task\notifications\notifications\nofiticationReceivers;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityEvaluationTaskInstancesResponseBody\pagingInfo\dataQualityEvaluationTaskInstances\task\notifications\notifications\notificationChannels;
use AlibabaCloud\Tea\Model;

class notifications extends Model
{
    /**
     * @description 告警接收人设置
     *
     * @var nofiticationReceivers[]
     */
    public $nofiticationReceivers;

    /**
     * @description 通知方式
     *
     * @var notificationChannels[]
     */
    public $notificationChannels;
    protected $_name = [
        'nofiticationReceivers' => 'NofiticationReceivers',
        'notificationChannels'  => 'NotificationChannels',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nofiticationReceivers) {
            $res['NofiticationReceivers'] = [];
            if (null !== $this->nofiticationReceivers && \is_array($this->nofiticationReceivers)) {
                $n = 0;
                foreach ($this->nofiticationReceivers as $item) {
                    $res['NofiticationReceivers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->notificationChannels) {
            $res['NotificationChannels'] = [];
            if (null !== $this->notificationChannels && \is_array($this->notificationChannels)) {
                $n = 0;
                foreach ($this->notificationChannels as $item) {
                    $res['NotificationChannels'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['NofiticationReceivers'])) {
            if (!empty($map['NofiticationReceivers'])) {
                $model->nofiticationReceivers = [];
                $n                            = 0;
                foreach ($map['NofiticationReceivers'] as $item) {
                    $model->nofiticationReceivers[$n++] = null !== $item ? nofiticationReceivers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NotificationChannels'])) {
            if (!empty($map['NotificationChannels'])) {
                $model->notificationChannels = [];
                $n                           = 0;
                foreach ($map['NotificationChannels'] as $item) {
                    $model->notificationChannels[$n++] = null !== $item ? notificationChannels::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
