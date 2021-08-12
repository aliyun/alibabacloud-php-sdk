<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryBillToOSSSubscriptionResponseBody\data\items;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @var int
     */
    public $bucketOwnerId;

    /**
     * @var string
     */
    public $subscribeType;

    /**
     * @var string
     */
    public $subscribeBucket;

    /**
     * @var string
     */
    public $subscribeTime;

    /**
     * @var string
     */
    public $subscribeLanguage;
    protected $_name = [
        'bucketOwnerId'     => 'BucketOwnerId',
        'subscribeType'     => 'SubscribeType',
        'subscribeBucket'   => 'SubscribeBucket',
        'subscribeTime'     => 'SubscribeTime',
        'subscribeLanguage' => 'SubscribeLanguage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketOwnerId) {
            $res['BucketOwnerId'] = $this->bucketOwnerId;
        }
        if (null !== $this->subscribeType) {
            $res['SubscribeType'] = $this->subscribeType;
        }
        if (null !== $this->subscribeBucket) {
            $res['SubscribeBucket'] = $this->subscribeBucket;
        }
        if (null !== $this->subscribeTime) {
            $res['SubscribeTime'] = $this->subscribeTime;
        }
        if (null !== $this->subscribeLanguage) {
            $res['SubscribeLanguage'] = $this->subscribeLanguage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return item
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketOwnerId'])) {
            $model->bucketOwnerId = $map['BucketOwnerId'];
        }
        if (isset($map['SubscribeType'])) {
            $model->subscribeType = $map['SubscribeType'];
        }
        if (isset($map['SubscribeBucket'])) {
            $model->subscribeBucket = $map['SubscribeBucket'];
        }
        if (isset($map['SubscribeTime'])) {
            $model->subscribeTime = $map['SubscribeTime'];
        }
        if (isset($map['SubscribeLanguage'])) {
            $model->subscribeLanguage = $map['SubscribeLanguage'];
        }

        return $model;
    }
}
