<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponseBody;

use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponseBody\data\accountInfo;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponseBody\data\aclInfo;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponseBody\data\extConfig;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponseBody\data\instanceQuotas;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponseBody\data\networkInfo;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponseBody\data\productInfo;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponseBody\data\software;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var accountInfo
     */
    public $accountInfo;

    /**
     * @var aclInfo
     */
    public $aclInfo;

    /**
     * @description BID
     *
     * @example 26842
     *
     * @var string
     */
    public $bid;

    /**
     * @example ons_rmqsub_public_cn
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @example 2022-08-01 00:00:00
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 2022-09-01 00:00:00
     *
     * @var string
     */
    public $expireTime;

    /**
     * @var extConfig
     */
    public $extConfig;

    /**
     * @example 2
     *
     * @var int
     */
    public $groupCount;

    /**
     * @example rmq-cn-7e22ody****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example test instance
     *
     * @var string
     */
    public $instanceName;

    /**
     * @var instanceQuotas[]
     */
    public $instanceQuotas;

    /**
     * @var networkInfo
     */
    public $networkInfo;

    /**
     * @example Subscription
     *
     * @var string
     */
    public $paymentType;

    /**
     * @var productInfo
     */
    public $productInfo;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 2022-09-07 00:00:00
     *
     * @var string
     */
    public $releaseTime;

    /**
     * @example This is remark for instance.
     *
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example standard
     *
     * @var string
     */
    public $seriesCode;

    /**
     * @example rmq
     *
     * @var string
     */
    public $serviceCode;

    /**
     * @var software
     */
    public $software;

    /**
     * @example 2022-08-01 00:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $status;

    /**
     * @example cluster_ha
     *
     * @var string
     */
    public $subSeriesCode;

    /**
     * @example 5
     *
     * @var int
     */
    public $topicCount;

    /**
     * @example 2022-08-02 00:00:00
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example 111111111111111
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'accountInfo'     => 'accountInfo',
        'aclInfo'         => 'aclInfo',
        'bid'             => 'bid',
        'commodityCode'   => 'commodityCode',
        'createTime'      => 'createTime',
        'expireTime'      => 'expireTime',
        'extConfig'       => 'extConfig',
        'groupCount'      => 'groupCount',
        'instanceId'      => 'instanceId',
        'instanceName'    => 'instanceName',
        'instanceQuotas'  => 'instanceQuotas',
        'networkInfo'     => 'networkInfo',
        'paymentType'     => 'paymentType',
        'productInfo'     => 'productInfo',
        'regionId'        => 'regionId',
        'releaseTime'     => 'releaseTime',
        'remark'          => 'remark',
        'resourceGroupId' => 'resourceGroupId',
        'seriesCode'      => 'seriesCode',
        'serviceCode'     => 'serviceCode',
        'software'        => 'software',
        'startTime'       => 'startTime',
        'status'          => 'status',
        'subSeriesCode'   => 'subSeriesCode',
        'topicCount'      => 'topicCount',
        'updateTime'      => 'updateTime',
        'userId'          => 'userId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountInfo) {
            $res['accountInfo'] = null !== $this->accountInfo ? $this->accountInfo->toMap() : null;
        }
        if (null !== $this->aclInfo) {
            $res['aclInfo'] = null !== $this->aclInfo ? $this->aclInfo->toMap() : null;
        }
        if (null !== $this->bid) {
            $res['bid'] = $this->bid;
        }
        if (null !== $this->commodityCode) {
            $res['commodityCode'] = $this->commodityCode;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->expireTime) {
            $res['expireTime'] = $this->expireTime;
        }
        if (null !== $this->extConfig) {
            $res['extConfig'] = null !== $this->extConfig ? $this->extConfig->toMap() : null;
        }
        if (null !== $this->groupCount) {
            $res['groupCount'] = $this->groupCount;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['instanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceQuotas) {
            $res['instanceQuotas'] = [];
            if (null !== $this->instanceQuotas && \is_array($this->instanceQuotas)) {
                $n = 0;
                foreach ($this->instanceQuotas as $item) {
                    $res['instanceQuotas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->networkInfo) {
            $res['networkInfo'] = null !== $this->networkInfo ? $this->networkInfo->toMap() : null;
        }
        if (null !== $this->paymentType) {
            $res['paymentType'] = $this->paymentType;
        }
        if (null !== $this->productInfo) {
            $res['productInfo'] = null !== $this->productInfo ? $this->productInfo->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->releaseTime) {
            $res['releaseTime'] = $this->releaseTime;
        }
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }
        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->seriesCode) {
            $res['seriesCode'] = $this->seriesCode;
        }
        if (null !== $this->serviceCode) {
            $res['serviceCode'] = $this->serviceCode;
        }
        if (null !== $this->software) {
            $res['software'] = null !== $this->software ? $this->software->toMap() : null;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->subSeriesCode) {
            $res['subSeriesCode'] = $this->subSeriesCode;
        }
        if (null !== $this->topicCount) {
            $res['topicCount'] = $this->topicCount;
        }
        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accountInfo'])) {
            $model->accountInfo = accountInfo::fromMap($map['accountInfo']);
        }
        if (isset($map['aclInfo'])) {
            $model->aclInfo = aclInfo::fromMap($map['aclInfo']);
        }
        if (isset($map['bid'])) {
            $model->bid = $map['bid'];
        }
        if (isset($map['commodityCode'])) {
            $model->commodityCode = $map['commodityCode'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['expireTime'])) {
            $model->expireTime = $map['expireTime'];
        }
        if (isset($map['extConfig'])) {
            $model->extConfig = extConfig::fromMap($map['extConfig']);
        }
        if (isset($map['groupCount'])) {
            $model->groupCount = $map['groupCount'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['instanceName'])) {
            $model->instanceName = $map['instanceName'];
        }
        if (isset($map['instanceQuotas'])) {
            if (!empty($map['instanceQuotas'])) {
                $model->instanceQuotas = [];
                $n                     = 0;
                foreach ($map['instanceQuotas'] as $item) {
                    $model->instanceQuotas[$n++] = null !== $item ? instanceQuotas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['networkInfo'])) {
            $model->networkInfo = networkInfo::fromMap($map['networkInfo']);
        }
        if (isset($map['paymentType'])) {
            $model->paymentType = $map['paymentType'];
        }
        if (isset($map['productInfo'])) {
            $model->productInfo = productInfo::fromMap($map['productInfo']);
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['releaseTime'])) {
            $model->releaseTime = $map['releaseTime'];
        }
        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }
        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }
        if (isset($map['seriesCode'])) {
            $model->seriesCode = $map['seriesCode'];
        }
        if (isset($map['serviceCode'])) {
            $model->serviceCode = $map['serviceCode'];
        }
        if (isset($map['software'])) {
            $model->software = software::fromMap($map['software']);
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['subSeriesCode'])) {
            $model->subSeriesCode = $map['subSeriesCode'];
        }
        if (isset($map['topicCount'])) {
            $model->topicCount = $map['topicCount'];
        }
        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
