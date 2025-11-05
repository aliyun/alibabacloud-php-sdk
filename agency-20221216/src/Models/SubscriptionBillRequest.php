<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models;

use AlibabaCloud\Dara\Model;

class SubscriptionBillRequest extends Model
{
    /**
     * @var string
     */
    public $beginBillingCycle;

    /**
     * @var string
     */
    public $billFormat;

    /**
     * @var int
     */
    public $bucketOwnerId;

    /**
     * @var string
     */
    public $subscribeBucket;

    /**
     * @var int
     */
    public $subscribeSegmentSize;

    /**
     * @var string
     */
    public $subscribeType;
    protected $_name = [
        'beginBillingCycle' => 'BeginBillingCycle',
        'billFormat' => 'BillFormat',
        'bucketOwnerId' => 'BucketOwnerId',
        'subscribeBucket' => 'SubscribeBucket',
        'subscribeSegmentSize' => 'SubscribeSegmentSize',
        'subscribeType' => 'SubscribeType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->beginBillingCycle) {
            $res['BeginBillingCycle'] = $this->beginBillingCycle;
        }

        if (null !== $this->billFormat) {
            $res['BillFormat'] = $this->billFormat;
        }

        if (null !== $this->bucketOwnerId) {
            $res['BucketOwnerId'] = $this->bucketOwnerId;
        }

        if (null !== $this->subscribeBucket) {
            $res['SubscribeBucket'] = $this->subscribeBucket;
        }

        if (null !== $this->subscribeSegmentSize) {
            $res['SubscribeSegmentSize'] = $this->subscribeSegmentSize;
        }

        if (null !== $this->subscribeType) {
            $res['SubscribeType'] = $this->subscribeType;
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
        if (isset($map['BeginBillingCycle'])) {
            $model->beginBillingCycle = $map['BeginBillingCycle'];
        }

        if (isset($map['BillFormat'])) {
            $model->billFormat = $map['BillFormat'];
        }

        if (isset($map['BucketOwnerId'])) {
            $model->bucketOwnerId = $map['BucketOwnerId'];
        }

        if (isset($map['SubscribeBucket'])) {
            $model->subscribeBucket = $map['SubscribeBucket'];
        }

        if (isset($map['SubscribeSegmentSize'])) {
            $model->subscribeSegmentSize = $map['SubscribeSegmentSize'];
        }

        if (isset($map['SubscribeType'])) {
            $model->subscribeType = $map['SubscribeType'];
        }

        return $model;
    }
}
