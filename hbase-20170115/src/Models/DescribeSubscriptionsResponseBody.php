<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20170115\Models;

use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeSubscriptionsResponseBody\subscriptions;
use AlibabaCloud\Tea\Model;

class DescribeSubscriptionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var subscriptions[]
     */
    public $subscriptions;
    protected $_name = [
        'requestId'     => 'RequestId',
        'subscriptions' => 'Subscriptions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->subscriptions) {
            $res['Subscriptions'] = [];
            if (null !== $this->subscriptions && \is_array($this->subscriptions)) {
                $n = 0;
                foreach ($this->subscriptions as $item) {
                    $res['Subscriptions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSubscriptionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Subscriptions'])) {
            if (!empty($map['Subscriptions'])) {
                $model->subscriptions = [];
                $n                    = 0;
                foreach ($map['Subscriptions'] as $item) {
                    $model->subscriptions[$n++] = null !== $item ? subscriptions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
