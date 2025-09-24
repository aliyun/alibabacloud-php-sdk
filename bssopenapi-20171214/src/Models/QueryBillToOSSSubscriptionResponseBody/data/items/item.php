<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryBillToOSSSubscriptionResponseBody\data\items;

use AlibabaCloud\Dara\Model;

class item extends Model
{
    /**
     * @var int
     */
    public $bucketOwnerId;

    /**
     * @var string
     */
    public $bucketPath;

    /**
     * @var int
     */
    public $rowLimitPerFile;

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
        'bucketOwnerId' => 'BucketOwnerId',
        'bucketPath' => 'BucketPath',
        'rowLimitPerFile' => 'RowLimitPerFile',
        'subscribeBucket' => 'SubscribeBucket',
        'subscribeLanguage' => 'SubscribeLanguage',
        'subscribeTime' => 'SubscribeTime',
        'subscribeType' => 'SubscribeType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bucketOwnerId) {
            $res['BucketOwnerId'] = $this->bucketOwnerId;
        }

        if (null !== $this->bucketPath) {
            $res['BucketPath'] = $this->bucketPath;
        }

        if (null !== $this->rowLimitPerFile) {
            $res['RowLimitPerFile'] = $this->rowLimitPerFile;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketOwnerId'])) {
            $model->bucketOwnerId = $map['BucketOwnerId'];
        }

        if (isset($map['BucketPath'])) {
            $model->bucketPath = $map['BucketPath'];
        }

        if (isset($map['RowLimitPerFile'])) {
            $model->rowLimitPerFile = $map['RowLimitPerFile'];
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
