<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponseBody\data\accountInfo;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponseBody\data\aclInfo;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponseBody\data\extConfig;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponseBody\data\instanceQuotas;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponseBody\data\networkInfo;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponseBody\data\productInfo;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponseBody\data\software;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponseBody\data\tags;

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
     * @var string
     */
    public $bid;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var extConfig
     */
    public $extConfig;

    /**
     * @var int
     */
    public $groupCount;

    /**
     * @var string
     */
    public $instanceId;

    /**
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
     * @var string
     */
    public $paymentType;

    /**
     * @var productInfo
     */
    public $productInfo;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $releaseTime;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $seriesCode;

    /**
     * @var string
     */
    public $serviceCode;

    /**
     * @var software
     */
    public $software;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $subSeriesCode;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var int
     */
    public $topicCount;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'accountInfo' => 'accountInfo',
        'aclInfo' => 'aclInfo',
        'bid' => 'bid',
        'commodityCode' => 'commodityCode',
        'createTime' => 'createTime',
        'expireTime' => 'expireTime',
        'extConfig' => 'extConfig',
        'groupCount' => 'groupCount',
        'instanceId' => 'instanceId',
        'instanceName' => 'instanceName',
        'instanceQuotas' => 'instanceQuotas',
        'networkInfo' => 'networkInfo',
        'paymentType' => 'paymentType',
        'productInfo' => 'productInfo',
        'regionId' => 'regionId',
        'releaseTime' => 'releaseTime',
        'remark' => 'remark',
        'resourceGroupId' => 'resourceGroupId',
        'seriesCode' => 'seriesCode',
        'serviceCode' => 'serviceCode',
        'software' => 'software',
        'startTime' => 'startTime',
        'status' => 'status',
        'subSeriesCode' => 'subSeriesCode',
        'tags' => 'tags',
        'topicCount' => 'topicCount',
        'updateTime' => 'updateTime',
        'userId' => 'userId',
    ];

    public function validate()
    {
        if (null !== $this->accountInfo) {
            $this->accountInfo->validate();
        }
        if (null !== $this->aclInfo) {
            $this->aclInfo->validate();
        }
        if (null !== $this->extConfig) {
            $this->extConfig->validate();
        }
        if (\is_array($this->instanceQuotas)) {
            Model::validateArray($this->instanceQuotas);
        }
        if (null !== $this->networkInfo) {
            $this->networkInfo->validate();
        }
        if (null !== $this->productInfo) {
            $this->productInfo->validate();
        }
        if (null !== $this->software) {
            $this->software->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountInfo) {
            $res['accountInfo'] = null !== $this->accountInfo ? $this->accountInfo->toArray($noStream) : $this->accountInfo;
        }

        if (null !== $this->aclInfo) {
            $res['aclInfo'] = null !== $this->aclInfo ? $this->aclInfo->toArray($noStream) : $this->aclInfo;
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
            $res['extConfig'] = null !== $this->extConfig ? $this->extConfig->toArray($noStream) : $this->extConfig;
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
            if (\is_array($this->instanceQuotas)) {
                $res['instanceQuotas'] = [];
                $n1 = 0;
                foreach ($this->instanceQuotas as $item1) {
                    $res['instanceQuotas'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->networkInfo) {
            $res['networkInfo'] = null !== $this->networkInfo ? $this->networkInfo->toArray($noStream) : $this->networkInfo;
        }

        if (null !== $this->paymentType) {
            $res['paymentType'] = $this->paymentType;
        }

        if (null !== $this->productInfo) {
            $res['productInfo'] = null !== $this->productInfo ? $this->productInfo->toArray($noStream) : $this->productInfo;
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
            $res['software'] = null !== $this->software ? $this->software->toArray($noStream) : $this->software;
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
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['instanceQuotas'] as $item1) {
                    $model->instanceQuotas[$n1] = instanceQuotas::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
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
