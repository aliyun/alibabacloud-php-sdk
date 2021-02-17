<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsMqttQueryClientByClientIdResponseBody\mqttClientInfoDo;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMqttQueryClientByClientIdResponseBody\mqttClientInfoDo\subScriptonData\subscriptionDo;
use AlibabaCloud\Tea\Model;

class subScriptonData extends Model
{
    /**
     * @var subscriptionDo[]
     */
    public $subscriptionDo;
    protected $_name = [
        'subscriptionDo' => 'SubscriptionDo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subscriptionDo) {
            $res['SubscriptionDo'] = [];
            if (null !== $this->subscriptionDo && \is_array($this->subscriptionDo)) {
                $n = 0;
                foreach ($this->subscriptionDo as $item) {
                    $res['SubscriptionDo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subScriptonData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubscriptionDo'])) {
            if (!empty($map['SubscriptionDo'])) {
                $model->subscriptionDo = [];
                $n                     = 0;
                foreach ($map['SubscriptionDo'] as $item) {
                    $model->subscriptionDo[$n++] = null !== $item ? subscriptionDo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
