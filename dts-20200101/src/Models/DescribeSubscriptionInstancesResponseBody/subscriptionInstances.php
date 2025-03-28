<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSubscriptionInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSubscriptionInstancesResponseBody\subscriptionInstances\subscriptionInstance;

class subscriptionInstances extends Model
{
    /**
     * @var subscriptionInstance[]
     */
    public $subscriptionInstance;
    protected $_name = [
        'subscriptionInstance' => 'SubscriptionInstance',
    ];

    public function validate()
    {
        if (\is_array($this->subscriptionInstance)) {
            Model::validateArray($this->subscriptionInstance);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->subscriptionInstance) {
            if (\is_array($this->subscriptionInstance)) {
                $res['SubscriptionInstance'] = [];
                $n1 = 0;
                foreach ($this->subscriptionInstance as $item1) {
                    $res['SubscriptionInstance'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SubscriptionInstance'])) {
            if (!empty($map['SubscriptionInstance'])) {
                $model->subscriptionInstance = [];
                $n1 = 0;
                foreach ($map['SubscriptionInstance'] as $item1) {
                    $model->subscriptionInstance[$n1++] = subscriptionInstance::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
