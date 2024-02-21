<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListInstancesResponseBody\data;

use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListInstancesResponseBody\data\list_\productInfo;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListInstancesResponseBody\data\list_\tags;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description The commodity code of the instance. The commodity code of ApsaraMQ for RocketMQ 5.0 instances has a similar format to ons_rmqsub_public_cn.
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
     * @description The number of consumer groups that are created on the instance.
     *
     * @example 10
     *
     * @var int
     */
    public $groupCount;

    /**
     * @description The instance ID.
     *
     * @example rmq-cn-7e22ody****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The instance name.
     *
     * @example test instance
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The billing method of the instance.
     *
     * Valid values:
     *
     *   PayAsYouGo
     *   Subscription
     *
     * @example Subscription
     *
     * @var string
     */
    public $paymentType;

    /**
     * @description The product information of instance.
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
     * @description The instance description.
     *
     * @example This is remark for instance.
     *
     * @var string
     */
    public $remark;

    /**
     * @description The ID of the resource group to which the instance belongs.
     *
     * @example rg-acfmx7caj******
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The primary edition of the instance.
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
     * @description The time when the instance was started.
     *
     * @example 2022-08-01 00:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The instance status.
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
     * @description The sub-category edition of the instance.
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
     * @description The number of topics that are created on the instance.
     *
     * @example 20
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
     * @example 6W0xz2uPfiwp****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'commodityCode'   => 'commodityCode',
        'createTime'      => 'createTime',
        'expireTime'      => 'expireTime',
        'groupCount'      => 'groupCount',
        'instanceId'      => 'instanceId',
        'instanceName'    => 'instanceName',
        'paymentType'     => 'paymentType',
        'productInfo'     => 'productInfo',
        'regionId'        => 'regionId',
        'releaseTime'     => 'releaseTime',
        'remark'          => 'remark',
        'resourceGroupId' => 'resourceGroupId',
        'seriesCode'      => 'seriesCode',
        'serviceCode'     => 'serviceCode',
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
        if (null !== $this->commodityCode) {
            $res['commodityCode'] = $this->commodityCode;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->expireTime) {
            $res['expireTime'] = $this->expireTime;
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
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commodityCode'])) {
            $model->commodityCode = $map['commodityCode'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['expireTime'])) {
            $model->expireTime = $map['expireTime'];
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
