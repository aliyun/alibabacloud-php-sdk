<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListNotificationPoliciesResponseBody\pageBean\notificationPolicies;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListNotificationPoliciesResponseBody\pageBean\notificationPolicies\notifyRule\notifyObjects;
use AlibabaCloud\Tea\Model;

class notifyRule extends Model
{
    /**
     * @var string[]
     */
    public $notifyChannels;

    /**
     * @var string
     */
    public $notifyEndTime;

    /**
     * @var notifyObjects[]
     */
    public $notifyObjects;

    /**
     * @var string
     */
    public $notifyStartTime;
    protected $_name = [
        'notifyChannels'  => 'NotifyChannels',
        'notifyEndTime'   => 'NotifyEndTime',
        'notifyObjects'   => 'NotifyObjects',
        'notifyStartTime' => 'NotifyStartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->notifyChannels) {
            $res['NotifyChannels'] = $this->notifyChannels;
        }
        if (null !== $this->notifyEndTime) {
            $res['NotifyEndTime'] = $this->notifyEndTime;
        }
        if (null !== $this->notifyObjects) {
            $res['NotifyObjects'] = [];
            if (null !== $this->notifyObjects && \is_array($this->notifyObjects)) {
                $n = 0;
                foreach ($this->notifyObjects as $item) {
                    $res['NotifyObjects'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->notifyStartTime) {
            $res['NotifyStartTime'] = $this->notifyStartTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return notifyRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NotifyChannels'])) {
            if (!empty($map['NotifyChannels'])) {
                $model->notifyChannels = $map['NotifyChannels'];
            }
        }
        if (isset($map['NotifyEndTime'])) {
            $model->notifyEndTime = $map['NotifyEndTime'];
        }
        if (isset($map['NotifyObjects'])) {
            if (!empty($map['NotifyObjects'])) {
                $model->notifyObjects = [];
                $n                    = 0;
                foreach ($map['NotifyObjects'] as $item) {
                    $model->notifyObjects[$n++] = null !== $item ? notifyObjects::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NotifyStartTime'])) {
            $model->notifyStartTime = $map['NotifyStartTime'];
        }

        return $model;
    }
}
