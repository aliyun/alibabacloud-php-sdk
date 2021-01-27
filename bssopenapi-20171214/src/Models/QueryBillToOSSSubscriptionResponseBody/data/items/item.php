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
    public $subscribeBucket;

    /**
     * @var string
     */
    public $subscribeLanguage;

    /**
     * @var string
     */
    public $subscribeTime;

    /**
     * @var string
     */
    public $subscribeType;
    protected $_name = [
        'bucketOwnerId'     => 'BucketOwnerId',
        'subscribeBucket'   => 'SubscribeBucket',
        'subscribeLanguage' => 'SubscribeLanguage',
        'subscribeTime'     => 'SubscribeTime',
        'subscribeType'     => 'SubscribeType',
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
        if (null !== $this->subscribeBucket) {
            $res['SubscribeBucket'] = $this->subscribeBucket;
        }
        if (null !== $this->subscribeLanguage) {
            $res['SubscribeLanguage'] = $this->subscribeLanguage;
        }
        if (null !== $this->subscribeTime) {
            $res['SubscribeTime'] = $this->subscribeTime;
        }
        if (null !== $this->subscribeType) {
            $res['SubscribeType'] = $this->subscribeType;
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
        if (isset($map['SubscribeBucket'])) {
            $model->subscribeBucket = $map['SubscribeBucket'];
        }
        if (isset($map['SubscribeLanguage'])) {
            $model->subscribeLanguage = $map['SubscribeLanguage'];
        }
        if (isset($map['SubscribeTime'])) {
            $model->subscribeTime = $map['SubscribeTime'];
        }
        if (isset($map['SubscribeType'])) {
            $model->subscribeType = $map['SubscribeType'];
        }

        return $model;
    }
}
