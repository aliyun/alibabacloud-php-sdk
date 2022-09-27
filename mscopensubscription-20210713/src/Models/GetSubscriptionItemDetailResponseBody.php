<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models;

use AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models\GetSubscriptionItemDetailResponseBody\subscriptionItemDetail;
use AlibabaCloud\Tea\Model;

class GetSubscriptionItemDetailResponseBody extends Model
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
     * @var subscriptionItemDetail
     */
    public $subscriptionItemDetail;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'                   => 'Code',
        'message'                => 'Message',
        'requestId'              => 'RequestId',
        'subscriptionItemDetail' => 'SubscriptionItemDetail',
        'success'                => 'Success',
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
        if (null !== $this->subscriptionItemDetail) {
            $res['SubscriptionItemDetail'] = null !== $this->subscriptionItemDetail ? $this->subscriptionItemDetail->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSubscriptionItemDetailResponseBody
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
        if (isset($map['SubscriptionItemDetail'])) {
            $model->subscriptionItemDetail = subscriptionItemDetail::fromMap($map['SubscriptionItemDetail']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
