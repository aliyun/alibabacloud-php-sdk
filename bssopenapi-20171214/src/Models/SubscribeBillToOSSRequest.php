<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class SubscribeBillToOSSRequest extends Model
{
    /**
     * @var string
     */
    public $subscribeBucket;

    /**
     * @var string
     */
    public $subscribeType;

    /**
     * @var string
     */
    public $multAccountRelSubscribe;

    /**
     * @var int
     */
    public $bucketOwnerId;
    protected $_name = [
        'subscribeBucket'         => 'SubscribeBucket',
        'subscribeType'           => 'SubscribeType',
        'multAccountRelSubscribe' => 'MultAccountRelSubscribe',
        'bucketOwnerId'           => 'BucketOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subscribeBucket) {
            $res['SubscribeBucket'] = $this->subscribeBucket;
        }
        if (null !== $this->subscribeType) {
            $res['SubscribeType'] = $this->subscribeType;
        }
        if (null !== $this->multAccountRelSubscribe) {
            $res['MultAccountRelSubscribe'] = $this->multAccountRelSubscribe;
        }
        if (null !== $this->bucketOwnerId) {
            $res['BucketOwnerId'] = $this->bucketOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubscribeBillToOSSRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubscribeBucket'])) {
            $model->subscribeBucket = $map['SubscribeBucket'];
        }
        if (isset($map['SubscribeType'])) {
            $model->subscribeType = $map['SubscribeType'];
        }
        if (isset($map['MultAccountRelSubscribe'])) {
            $model->multAccountRelSubscribe = $map['MultAccountRelSubscribe'];
        }
        if (isset($map['BucketOwnerId'])) {
            $model->bucketOwnerId = $map['BucketOwnerId'];
        }

        return $model;
    }
}
