<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsTopicSubDetailResponseBody;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTopicSubDetailResponseBody\data\subscriptionDataList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var subscriptionDataList[]
     */
    public $subscriptionDataList;

    /**
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
            $res['SubscriptionDataList'] = [];
            if (null !== $this->subscriptionDataList && \is_array($this->subscriptionDataList)) {
                $n = 0;
                foreach ($this->subscriptionDataList as $item) {
                    $res['SubscriptionDataList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
            if (!empty($map['SubscriptionDataList'])) {
                $model->subscriptionDataList = [];
                $n                           = 0;
                foreach ($map['SubscriptionDataList'] as $item) {
                    $model->subscriptionDataList[$n++] = null !== $item ? subscriptionDataList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
