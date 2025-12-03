<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20170115\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeSubscriptionsResponseBody\subscriptions;

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
        'requestId' => 'RequestId',
        'subscriptions' => 'Subscriptions',
    ];

    public function validate()
    {
        if (\is_array($this->subscriptions)) {
            Model::validateArray($this->subscriptions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->subscriptions) {
            if (\is_array($this->subscriptions)) {
                $res['Subscriptions'] = [];
                $n1 = 0;
                foreach ($this->subscriptions as $item1) {
                    $res['Subscriptions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Subscriptions'])) {
            if (!empty($map['Subscriptions'])) {
                $model->subscriptions = [];
                $n1 = 0;
                foreach ($map['Subscriptions'] as $item1) {
                    $model->subscriptions[$n1] = subscriptions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
