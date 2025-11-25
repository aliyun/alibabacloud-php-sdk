<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\consumerConnectionInfoList\consumerConnectionInfoDo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\consumerConnectionInfoList\consumerConnectionInfoDo\subscriptionSet\subscriptionData;

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
        if (\is_array($this->subscriptionData)) {
            Model::validateArray($this->subscriptionData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->subscriptionData) {
            if (\is_array($this->subscriptionData)) {
                $res['SubscriptionData'] = [];
                $n1 = 0;
                foreach ($this->subscriptionData as $item1) {
                    $res['SubscriptionData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SubscriptionData'])) {
            if (!empty($map['SubscriptionData'])) {
                $model->subscriptionData = [];
                $n1 = 0;
                foreach ($map['SubscriptionData'] as $item1) {
                    $model->subscriptionData[$n1] = subscriptionData::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
