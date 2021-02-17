<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsGroupSubDetailResponseBody\data;

use AlibabaCloud\Tea\Model;

class subscriptionDataList extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Ons\V20190214\Models\OnsGroupSubDetailResponseBody\data\subscriptionDataList\subscriptionDataList[]
     */
    public $subscriptionDataList;
    protected $_name = [
        'subscriptionDataList' => 'SubscriptionDataList',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subscriptionDataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubscriptionDataList'])) {
            if (!empty($map['SubscriptionDataList'])) {
                $model->subscriptionDataList = [];
                $n                           = 0;
                foreach ($map['SubscriptionDataList'] as $item) {
                    $model->subscriptionDataList[$n++] = null !== $item ? \AlibabaCloud\SDK\Ons\V20190214\Models\OnsGroupSubDetailResponseBody\data\subscriptionDataList\subscriptionDataList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
