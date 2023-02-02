<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsTopicSubDetailResponseBody;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTopicSubDetailResponseBody\data\subscriptionDataList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The information about the online consumer groups that subscribe to the topic.
     *
     * @var subscriptionDataList
     */
    public $subscriptionDataList;

    /**
     * @description The name of the topic.
     *
     * @example test
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'subscriptionDataList' => 'SubscriptionDataList',
        'topic'                => 'Topic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subscriptionDataList) {
            $res['SubscriptionDataList'] = null !== $this->subscriptionDataList ? $this->subscriptionDataList->toMap() : null;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
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
