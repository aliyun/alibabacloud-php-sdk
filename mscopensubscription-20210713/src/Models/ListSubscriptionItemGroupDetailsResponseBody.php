<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models;

use AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models\ListSubscriptionItemGroupDetailsResponseBody\subscriptionItemGroupDetails;
use AlibabaCloud\Tea\Model;

class ListSubscriptionItemGroupDetailsResponseBody extends Model
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
     * @var string
     */
    public $requestId;

    /**
     * @var subscriptionItemGroupDetails[]
     */
    public $subscriptionItemGroupDetails;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'                         => 'Code',
        'message'                      => 'Message',
        'requestId'                    => 'RequestId',
        'subscriptionItemGroupDetails' => 'SubscriptionItemGroupDetails',
        'success'                      => 'Success',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->subscriptionItemGroupDetails) {
            $res['SubscriptionItemGroupDetails'] = [];
            if (null !== $this->subscriptionItemGroupDetails && \is_array($this->subscriptionItemGroupDetails)) {
                $n = 0;
                foreach ($this->subscriptionItemGroupDetails as $item) {
                    $res['SubscriptionItemGroupDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSubscriptionItemGroupDetailsResponseBody
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SubscriptionItemGroupDetails'])) {
            if (!empty($map['SubscriptionItemGroupDetails'])) {
                $model->subscriptionItemGroupDetails = [];
                $n                                   = 0;
                foreach ($map['SubscriptionItemGroupDetails'] as $item) {
                    $model->subscriptionItemGroupDetails[$n++] = null !== $item ? subscriptionItemGroupDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
