<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsGroupSubDetailResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsGroupSubDetailResponseBody\data\subscriptionDataList\subscriptionDataList;

class subscriptionDataList extends Model
{
    /**
     * @var subscriptionDataList[]
     */
    public $subscriptionDataList;
    protected $_name = [
        'subscriptionDataList' => 'SubscriptionDataList',
    ];

    public function validate()
    {
        if (\is_array($this->subscriptionDataList)) {
            Model::validateArray($this->subscriptionDataList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->subscriptionDataList) {
            if (\is_array($this->subscriptionDataList)) {
                $res['SubscriptionDataList'] = [];
                $n1 = 0;
                foreach ($this->subscriptionDataList as $item1) {
                    $res['SubscriptionDataList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SubscriptionDataList'])) {
            if (!empty($map['SubscriptionDataList'])) {
                $model->subscriptionDataList = [];
                $n1 = 0;
                foreach ($map['SubscriptionDataList'] as $item1) {
                    $model->subscriptionDataList[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
