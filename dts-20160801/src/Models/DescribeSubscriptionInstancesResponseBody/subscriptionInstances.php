<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20160801\Models\DescribeSubscriptionInstancesResponseBody;

use AlibabaCloud\SDK\Dts\V20160801\Models\DescribeSubscriptionInstancesResponseBody\subscriptionInstances\subscriptionInstance;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subscriptionInstance) {
            $res['SubscriptionInstance'] = [];
            if (null !== $this->subscriptionInstance && \is_array($this->subscriptionInstance)) {
                $n = 0;
                foreach ($this->subscriptionInstance as $item) {
                    $res['SubscriptionInstance'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subscriptionInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubscriptionInstance'])) {
            if (!empty($map['SubscriptionInstance'])) {
                $model->subscriptionInstance = [];
                $n                           = 0;
                foreach ($map['SubscriptionInstance'] as $item) {
                    $model->subscriptionInstance[$n++] = null !== $item ? subscriptionInstance::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
