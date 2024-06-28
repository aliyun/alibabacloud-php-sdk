<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class SubscribeBillToOSSRequest extends Model
{
    /**
     * @description The initial billing cycle from which bills start to be pushed. After you subscribe to the bills, the system automatically pushes the data that is generated from the initial billing cycle to the current time. If the SubscribeType parameter is set to MonthBill, this parameter is invalid. Historical data is not pushed again. The data generated within the last year can be pushed.
     *
     * @example 2021-03
     *
     * @var string
     */
    public $beginBillingCycle;

    /**
     * @description The owner ID of the OSS bucket that stores the bills. This parameter is required if you are a bidder or reseller and want to push data to an OSS bucket of a member account. In this case, you must specify this account as the account used to call this operation and grant the AliyunConsumeDump2OSSRole permission to this account. If you are a regular user, you do not need to set this parameter. By default, your account is used to call this operation.
     *
     * @example 12341324
     *
     * @var int
     */
    public $bucketOwnerId;

    /**
     * @description The path of the OSS bucket.
     *
     * @example testpath
     *
     * @var string
     */
    public $bucketPath;

    /**
     * @description The type of the account whose bills are to be pushed if multi-tier accounts are involved. Valid values:
     *
     *   MA: the master account and a non-managed member account in Finance Cloud
     *   ACP1: a member account of a virtual network operator (VNO)
     *
     * Default value: MA.
     * @example MA
     *
     * @var string
     */
    public $multAccountRelSubscribe;

    /**
     * @description The upper limit of the number of lines in a single file. When the bill file exceeds the upper limit, it will be split into multiple files and merged into a compressed package.
     *
     * @example 300000
     *
     * @var int
     */
    public $rowLimitPerFile;

    /**
     * @description The OSS bucket that stores the bills to which you want to subscribe.
     *
     * This parameter is required.
     * @example xxxxxx-bucket
     *
     * @var string
     */
    public $subscribeBucket;

    /**
     * @description The type of the bill to which you want to subscribe. Valid values:
     *
     *   BillingItemDetailForBillingPeriod: detailed bills of billable items
     *   InstanceDetailForBillingPeriod: detailed bills of instances
     *   BillingItemDetailMonthly: billable item-based bills summarized by billing cycle
     *   InstanceDetailMonthly: instance-based bills summarized by billing cycle
     *   SplitItemDetailDaily: split bills summarized by day
     *   MonthBill: monthly bills in the PDF format. You can subscribe to the monthly PDF bills only of the master account.
     *
     * @example BillingItemDetailForBillingPeriod
     *
     * @var string
     */
    public $subscribeType;

    /**
     * @description Whether to protect network communications through the SSL (Secure Sockets Layer) encryption protocol. When this parameter is set to true, it means that SSL encryption is enabled to ensure the security and integrity of data transmission.
     *
     * @example true
     *
     * @var string
     */
    public $usingSsl;
    protected $_name = [
        'beginBillingCycle'       => 'BeginBillingCycle',
        'bucketOwnerId'           => 'BucketOwnerId',
        'bucketPath'              => 'BucketPath',
        'multAccountRelSubscribe' => 'MultAccountRelSubscribe',
        'rowLimitPerFile'         => 'RowLimitPerFile',
        'subscribeBucket'         => 'SubscribeBucket',
        'subscribeType'           => 'SubscribeType',
        'usingSsl'                => 'UsingSsl',
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
        if (null !== $this->bucketOwnerId) {
            $res['BucketOwnerId'] = $this->bucketOwnerId;
        }
        if (null !== $this->bucketPath) {
            $res['BucketPath'] = $this->bucketPath;
        }
        if (null !== $this->multAccountRelSubscribe) {
            $res['MultAccountRelSubscribe'] = $this->multAccountRelSubscribe;
        }
        if (null !== $this->rowLimitPerFile) {
            $res['RowLimitPerFile'] = $this->rowLimitPerFile;
        }
        if (null !== $this->subscribeBucket) {
            $res['SubscribeBucket'] = $this->subscribeBucket;
        }
        if (null !== $this->subscribeType) {
            $res['SubscribeType'] = $this->subscribeType;
        }
        if (null !== $this->usingSsl) {
            $res['UsingSsl'] = $this->usingSsl;
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
        if (isset($map['BeginBillingCycle'])) {
            $model->beginBillingCycle = $map['BeginBillingCycle'];
        }
        if (isset($map['BucketOwnerId'])) {
            $model->bucketOwnerId = $map['BucketOwnerId'];
        }
        if (isset($map['BucketPath'])) {
            $model->bucketPath = $map['BucketPath'];
        }
        if (isset($map['MultAccountRelSubscribe'])) {
            $model->multAccountRelSubscribe = $map['MultAccountRelSubscribe'];
        }
        if (isset($map['RowLimitPerFile'])) {
            $model->rowLimitPerFile = $map['RowLimitPerFile'];
        }
        if (isset($map['SubscribeBucket'])) {
            $model->subscribeBucket = $map['SubscribeBucket'];
        }
        if (isset($map['SubscribeType'])) {
            $model->subscribeType = $map['SubscribeType'];
        }
        if (isset($map['UsingSsl'])) {
            $model->usingSsl = $map['UsingSsl'];
        }

        return $model;
    }
}
