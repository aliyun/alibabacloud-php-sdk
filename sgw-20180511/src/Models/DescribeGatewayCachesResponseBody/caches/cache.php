<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayCachesResponseBody\caches;

use AlibabaCloud\Tea\Model;

class cache extends Model
{
    /**
     * @var string
     */
    public $buyURL;

    /**
     * @example d-bp1dcnq8zldree6ok***
     *
     * @var string
     */
    public $cacheId;

    /**
     * @example cloud_efficiency
     *
     * @var string
     */
    public $cacheType;

    /**
     * @example 0
     *
     * @var int
     */
    public $expireStatus;

    /**
     * @example 1532510649
     *
     * @var int
     */
    public $expiredTime;

    /**
     * @description IOPS。
     *
     * @example 2605
     *
     * @var int
     */
    public $iops;

    /**
     * @var string
     */
    public $isDirectExpand;

    /**
     * @var bool
     */
    public $isNoPartition;

    /**
     * @example false
     *
     * @var bool
     */
    public $isUsed;

    /**
     * @example /dev/vdb
     *
     * @var string
     */
    public $localFilePath;

    /**
     * @var string
     */
    public $performanceLevel;

    /**
     * @example https://common-buy.aliyun.com/?commodityCode=hcs_sgw_csg_pre&orderType=RENEW&instanceId=ca-0007va9bnideidnd***#/renew
     *
     * @var string
     */
    public $renewURL;

    /**
     * @example 101
     *
     * @var int
     */
    public $sizeInGB;

    /**
     * @var string
     */
    public $subscriptionInstanceId;
    protected $_name = [
        'buyURL'                 => 'BuyURL',
        'cacheId'                => 'CacheId',
        'cacheType'              => 'CacheType',
        'expireStatus'           => 'ExpireStatus',
        'expiredTime'            => 'ExpiredTime',
        'iops'                   => 'Iops',
        'isDirectExpand'         => 'IsDirectExpand',
        'isNoPartition'          => 'IsNoPartition',
        'isUsed'                 => 'IsUsed',
        'localFilePath'          => 'LocalFilePath',
        'performanceLevel'       => 'PerformanceLevel',
        'renewURL'               => 'RenewURL',
        'sizeInGB'               => 'SizeInGB',
        'subscriptionInstanceId' => 'SubscriptionInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buyURL) {
            $res['BuyURL'] = $this->buyURL;
        }
        if (null !== $this->cacheId) {
            $res['CacheId'] = $this->cacheId;
        }
        if (null !== $this->cacheType) {
            $res['CacheType'] = $this->cacheType;
        }
        if (null !== $this->expireStatus) {
            $res['ExpireStatus'] = $this->expireStatus;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->iops) {
            $res['Iops'] = $this->iops;
        }
        if (null !== $this->isDirectExpand) {
            $res['IsDirectExpand'] = $this->isDirectExpand;
        }
        if (null !== $this->isNoPartition) {
            $res['IsNoPartition'] = $this->isNoPartition;
        }
        if (null !== $this->isUsed) {
            $res['IsUsed'] = $this->isUsed;
        }
        if (null !== $this->localFilePath) {
            $res['LocalFilePath'] = $this->localFilePath;
        }
        if (null !== $this->performanceLevel) {
            $res['PerformanceLevel'] = $this->performanceLevel;
        }
        if (null !== $this->renewURL) {
            $res['RenewURL'] = $this->renewURL;
        }
        if (null !== $this->sizeInGB) {
            $res['SizeInGB'] = $this->sizeInGB;
        }
        if (null !== $this->subscriptionInstanceId) {
            $res['SubscriptionInstanceId'] = $this->subscriptionInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cache
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuyURL'])) {
            $model->buyURL = $map['BuyURL'];
        }
        if (isset($map['CacheId'])) {
            $model->cacheId = $map['CacheId'];
        }
        if (isset($map['CacheType'])) {
            $model->cacheType = $map['CacheType'];
        }
        if (isset($map['ExpireStatus'])) {
            $model->expireStatus = $map['ExpireStatus'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['Iops'])) {
            $model->iops = $map['Iops'];
        }
        if (isset($map['IsDirectExpand'])) {
            $model->isDirectExpand = $map['IsDirectExpand'];
        }
        if (isset($map['IsNoPartition'])) {
            $model->isNoPartition = $map['IsNoPartition'];
        }
        if (isset($map['IsUsed'])) {
            $model->isUsed = $map['IsUsed'];
        }
        if (isset($map['LocalFilePath'])) {
            $model->localFilePath = $map['LocalFilePath'];
        }
        if (isset($map['PerformanceLevel'])) {
            $model->performanceLevel = $map['PerformanceLevel'];
        }
        if (isset($map['RenewURL'])) {
            $model->renewURL = $map['RenewURL'];
        }
        if (isset($map['SizeInGB'])) {
            $model->sizeInGB = $map['SizeInGB'];
        }
        if (isset($map['SubscriptionInstanceId'])) {
            $model->subscriptionInstanceId = $map['SubscriptionInstanceId'];
        }

        return $model;
    }
}
