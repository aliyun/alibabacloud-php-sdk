<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models;

use AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models\ListSubscriptionItemsResponseBody\subscriptionItems;
use AlibabaCloud\Tea\Model;

class ListSubscriptionItemsResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var subscriptionItems[]
     */
    public $subscriptionItems;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'code'              => 'Code',
        'message'           => 'Message',
        'nextToken'         => 'NextToken',
        'requestId'         => 'RequestId',
        'subscriptionItems' => 'SubscriptionItems',
        'success'           => 'Success',
        'totalCount'        => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->subscriptionItems) {
            $res['SubscriptionItems'] = [];
            if (null !== $this->subscriptionItems && \is_array($this->subscriptionItems)) {
                $n = 0;
                foreach ($this->subscriptionItems as $item) {
                    $res['SubscriptionItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSubscriptionItemsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SubscriptionItems'])) {
            if (!empty($map['SubscriptionItems'])) {
                $model->subscriptionItems = [];
                $n                        = 0;
                foreach ($map['SubscriptionItems'] as $item) {
                    $model->subscriptionItems[$n++] = null !== $item ? subscriptionItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
