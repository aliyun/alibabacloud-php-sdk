<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models;

use AlibabaCloud\Tea\Model;

class SubscriptionBillRequest extends Model
{
    /**
     * @description The start month from which the bills are pushed. Specify the value in the yyyy-MM format.
     *
     * This parameter is required.
     * @example 2022-10
     *
     * @var string
     */
    public $beginBillingCycle;

    /**
     * @description The file format of the bill. Valid values: csv and parquet.
     *
     * This parameter is required.
     * @example csv
     *
     * @var string
     */
    public $billFormat;

    /**
     * @description The ID of the user to which the OSS bucket belongs.
     *
     * This parameter is required.
     * @example 5569414254138836
     *
     * @var int
     */
    public $bucketOwnerId;

    /**
     * @description The name of the Object Storage Service (OSS) bucket in which you want to store the bills.
     *
     * This parameter is required.
     * @example bill-bucket
     *
     * @var string
     */
    public $subscribeBucket;

    /**
     * @description The maximum rows in a single bill file. If the number of bill rows exceed the upper limit, the bill is automatically split into multiple files. The name of each split file is in the `uid_billType_billCycle_SquenceNo_fileNo` format.
     *
     * Files whose names are the same except for the fileNo field are of the same type and belong to the same billing cycle.
     * @example 100000
     *
     * @var int
     */
    public $subscribeSegmentSize;

    /**
     * @description The type of the bill to which you want to subscribe. Valid values: PartnerBillingItemDetailForBillingPeriod, PartnerBillingItemDetailMonthly, PartnerInstanceDetailForBillingPeriod, and PartnerInstanceDetailMonthly.
     *
     * This parameter is required.
     * @example PartnerBillingItemDetailForBillingPeriod
     *
     * @var string
     */
    public $subscribeType;
    protected $_name = [
        'beginBillingCycle'    => 'BeginBillingCycle',
        'billFormat'           => 'BillFormat',
        'bucketOwnerId'        => 'BucketOwnerId',
        'subscribeBucket'      => 'SubscribeBucket',
        'subscribeSegmentSize' => 'SubscribeSegmentSize',
        'subscribeType'        => 'SubscribeType',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return SubscriptionBillRequest
     */
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
