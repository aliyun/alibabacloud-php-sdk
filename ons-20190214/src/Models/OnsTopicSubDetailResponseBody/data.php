<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsTopicSubDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTopicSubDetailResponseBody\data\subscriptionDataList;

class data extends Model
{
    /**
     * @var subscriptionDataList
     */
    public $subscriptionDataList;

    /**
     * @var string
     */
    public $topic;
    protected $_name = [
        'subscriptionDataList' => 'SubscriptionDataList',
        'topic' => 'Topic',
    ];

    public function validate()
    {
        if (null !== $this->subscriptionDataList) {
            $this->subscriptionDataList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->subscriptionDataList) {
            $res['SubscriptionDataList'] = null !== $this->subscriptionDataList ? $this->subscriptionDataList->toArray($noStream) : $this->subscriptionDataList;
        }

        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
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
        if (isset($map['SubscriptionDataList'])) {
            $model->subscriptionDataList = subscriptionDataList::fromMap($map['SubscriptionDataList']);
        }

        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
