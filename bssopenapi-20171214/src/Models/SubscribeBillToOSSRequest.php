<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Dara\Model;

class SubscribeBillToOSSRequest extends Model
{
    /**
     * @var string
     */
    public $beginBillingCycle;

    /**
     * @var int
     */
    public $bucketOwnerId;

    /**
     * @var string
     */
    public $bucketPath;

    /**
     * @var string
     */
    public $multAccountRelSubscribe;

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
    public $subscribeType;

    /**
     * @var string
     */
    public $usingSsl;
    protected $_name = [
        'beginBillingCycle' => 'BeginBillingCycle',
        'bucketOwnerId' => 'BucketOwnerId',
        'bucketPath' => 'BucketPath',
        'multAccountRelSubscribe' => 'MultAccountRelSubscribe',
        'rowLimitPerFile' => 'RowLimitPerFile',
        'subscribeBucket' => 'SubscribeBucket',
        'subscribeType' => 'SubscribeType',
        'usingSsl' => 'UsingSsl',
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
