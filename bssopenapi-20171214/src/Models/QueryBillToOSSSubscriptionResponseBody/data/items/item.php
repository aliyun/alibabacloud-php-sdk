<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryBillToOSSSubscriptionResponseBody\data\items;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @example 1369168081849304
     *
     * @var int
     */
    public $bucketOwnerId;

    /**
     * @example Billing/BillingItemDetailMonthly/
     *
     * @var string
     */
    public $bucketPath;

    /**
     * @var int
     */
    public $rowLimitPerFile;

    /**
     * @example billingtestbucket
     *
     * @var string
     */
    public $subscribeBucket;

    /**
     * @example zh
     *
     * @var string
     */
    public $subscribeLanguage;

    /**
     * @example 2019-10-30 15:40:11
     *
     * @var string
     */
    public $subscribeTime;

    /**
     * @example BillingItemDetailForBillingPeriod
     *
     * @var string
     */
    public $subscribeType;
    protected $_name = [
        'bucketOwnerId'     => 'BucketOwnerId',
        'bucketPath'        => 'BucketPath',
        'rowLimitPerFile'   => 'RowLimitPerFile',
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
