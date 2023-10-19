<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryBillToOSSSubscriptionResponseBody\data\items;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @description The owner ID of the Object Storage Service (OSS) bucket.
     *
     * @example 1369168081849304
     *
     * @var int
     */
    public $bucketOwnerId;

    /**
     * @description The path in the OSS bucket.
     *
     * @example Billing/BillingItemDetailMonthly/
     *
     * @var string
     */
    public $bucketPath;

    /**
     * @description The maximum number of data rows in a single file. If the number of data rows in a bill exceeds the upper limit, the bill is split into multiple files. Then, multiple files are merged and compressed into a package.
     *
     * @example 300000
     *
     * @var int
     */
    public $rowLimitPerFile;

    /**
     * @description The ID of the OSS bucket that stores the subscribed bill.
     *
     * @example billingtestbucket
     *
     * @var string
     */
    public $subscribeBucket;

    /**
     * @description The code of the language.
     *
     * Valid values:
     *
     *   en: English
     *   zh: Chinese
     *
     * @example zh
     *
     * @var string
     */
    public $subscribeLanguage;

    /**
     * @description The time when the subscribed bill was stored in the OSS bucket. The time is displayed in the YYYY-MM-DD hh:mm:ss format.
     *
     * @example 2019-10-30 15:40:11
     *
     * @var string
     */
    public $subscribeTime;

    /**
     * @description The type of the subscribed bill. Valid values:
     *
     *   BillingItemDetailForBillingPeriod: the bill of a billable item.
     *   InstanceDetailForBillingPeriod: the bill of an instance.
     *
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
