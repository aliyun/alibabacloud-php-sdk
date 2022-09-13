<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponseBody;

use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponseBody\data\accountInfo;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponseBody\data\extConfig;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponseBody\data\instanceQuotas;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponseBody\data\networkInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var accountInfo
     */
    public $accountInfo;

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
    public $seriesCode;

    /**
     * @var string
     */
    public $serviceCode;

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
        'accountInfo'    => 'accountInfo',
        'bid'            => 'bid',
        'commodityCode'  => 'commodityCode',
        'createTime'     => 'createTime',
        'expireTime'     => 'expireTime',
        'extConfig'      => 'extConfig',
        'groupCount'     => 'groupCount',
        'instanceId'     => 'instanceId',
        'instanceName'   => 'instanceName',
        'instanceQuotas' => 'instanceQuotas',
        'networkInfo'    => 'networkInfo',
        'paymentType'    => 'paymentType',
        'regionId'       => 'regionId',
        'releaseTime'    => 'releaseTime',
        'remark'         => 'remark',
        'seriesCode'     => 'seriesCode',
        'serviceCode'    => 'serviceCode',
        'startTime'      => 'startTime',
        'status'         => 'status',
        'subSeriesCode'  => 'subSeriesCode',
        'topicCount'     => 'topicCount',
        'updateTime'     => 'updateTime',
        'userId'         => 'userId',
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
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->releaseTime) {
            $res['releaseTime'] = $this->releaseTime;
        }
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
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
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['releaseTime'])) {
            $model->releaseTime = $map['releaseTime'];
        }
        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
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
