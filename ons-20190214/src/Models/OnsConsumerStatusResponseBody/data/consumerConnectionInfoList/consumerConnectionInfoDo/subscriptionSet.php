<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\consumerConnectionInfoList\consumerConnectionInfoDo;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\consumerConnectionInfoList\consumerConnectionInfoDo\subscriptionSet\subscriptionData;
use AlibabaCloud\Tea\Model;

class subscriptionSet extends Model
{
    /**
     * @var subscriptionData[]
     */
    public $subscriptionData;
    protected $_name = [
        'subscriptionData' => 'SubscriptionData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subscriptionData) {
            $res['SubscriptionData'] = [];
            if (null !== $this->subscriptionData && \is_array($this->subscriptionData)) {
                $n = 0;
                foreach ($this->subscriptionData as $item) {
                    $res['SubscriptionData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subscriptionSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubscriptionData'])) {
            if (!empty($map['SubscriptionData'])) {
                $model->subscriptionData = [];
                $n                       = 0;
                foreach ($map['SubscriptionData'] as $item) {
                    $model->subscriptionData[$n++] = null !== $item ? subscriptionData::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
