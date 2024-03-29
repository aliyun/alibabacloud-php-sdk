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
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponseBody\data\tags;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The account information.
     *
     * @var accountInfo
     */
    public $accountInfo;

    /**
     * @description The information about access control.
     *
     * @var aclInfo
     */
    public $aclInfo;

    /**
     * @description The business ID (BID) of the commodity.
     *
     * @example 26842
     *
     * @var string
     */
    public $bid;

    /**
     * @description The commodity code of the instance. The commodity code of a ApsaraMQ for RocketMQ 5.0 instance has a similar format as ons_rmqsub_public_cn.
     *
     * @example ons_rmqsub_public_cn
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The time when the instance was created.
     *
     * @example 2022-08-01 00:00:00
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The time when the instance expires.
     *
     * @example 2022-09-01 00:00:00
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The extended configurations. We recommend you configure the productInfo, internetInfo, or aclInfo parameter instead of this parameter.
     *
     * @deprecated
     *
     * @var extConfig
     */
    public $extConfig;

    /**
     * @description The number of groups.
     *
     * @example 10
     *
     * @var int
     */
    public $groupCount;

    /**
     * @description The ID of the instance
     *
     * @example rmq-cn-7e22ody****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the instance.
     *
     * @example test instance
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The quotas in the instance.
     *
     * @var instanceQuotas[]
     */
    public $instanceQuotas;

    /**
     * @description The network information.
     *
     * @var networkInfo
     */
    public $networkInfo;

    /**
     * @description The billing method of the instance.
     *
     * Valid values:
     *
     *   PayAsYouGo: pay-as-you-go
     *   Subscription
     *
     * @example Subscription
     *
     * @var string
     */
    public $paymentType;

    /**
     * @description The extended configurations of the instance.
     *
     * @var productInfo
     */
    public $productInfo;

    /**
     * @description The ID of the region in which the instance resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The time when the instance was released.
     *
     * @example 2022-09-07 00:00:00
     *
     * @var string
     */
    public $releaseTime;

    /**
     * @description The description of the instance.
     *
     * @example This is remark for instance.
     *
     * @var string
     */
    public $remark;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfm3tmjruyribi
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The primary edition of the instance. For information about the differences between primary edition instances, see [Instance selection](~~444722~~).
     *
     * Valid values:
     *
     *   standard: Standard Edition
     *   ultimate: Enterprise Platinum Edition
     *   professional: Professional Edition
     *
     * @example standard
     *
     * @var string
     */
    public $seriesCode;

    /**
     * @description The code of the service to which the instance belongs. The service code of ApsaraMQ for RocketMQ is rmq.
     *
     * @example rmq
     *
     * @var string
     */
    public $serviceCode;

    /**
     * @description The instance software information.
     *
     * @var software
     */
    public $software;

    /**
     * @description The time when the instance was started.
     *
     * @example 2022-08-01 00:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The status of the instance.
     *
     * Valid values:
     *
     *   RELEASED
     *   RUNNING
     *   STOPPED
     *   CHANGING
     *   CREATING
     *
     * @example RUNNING
     *
     * @var string
     */
    public $status;

    /**
     * @description The sub-category edition of the instance. For information about the differences between sub-category edition instances, see [Instance selection](~~444722~~).
     *
     * Valid values:
     *
     *   cluster_ha: Cluster High-availability Edition
     *   single_node: Standalone Edition
     *
     * @example cluster_ha
     *
     * @var string
     */
    public $subSeriesCode;

    /**
     * @description The resource tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The number of topics.
     *
     * @example 10
     *
     * @var int
     */
    public $topicCount;

    /**
     * @description The time when the instance was last modified.
     *
     * @example 2022-08-02 00:00:00
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description The ID of the user who owns the instance.
     *
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
        'tags'            => 'tags',
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
        if (null !== $this->tags) {
            $res['tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
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
