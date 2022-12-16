<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListInstancesResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
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
     * @example 10
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
     * @example Subscription
     *
     * @var string
     */
    public $paymentType;

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
     * @example 20
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
     * @example 6W0xz2uPfiwp****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'commodityCode' => 'commodityCode',
        'createTime'    => 'createTime',
        'expireTime'    => 'expireTime',
        'groupCount'    => 'groupCount',
        'instanceId'    => 'instanceId',
        'instanceName'  => 'instanceName',
        'paymentType'   => 'paymentType',
        'regionId'      => 'regionId',
        'releaseTime'   => 'releaseTime',
        'remark'        => 'remark',
        'seriesCode'    => 'seriesCode',
        'serviceCode'   => 'serviceCode',
        'startTime'     => 'startTime',
        'status'        => 'status',
        'subSeriesCode' => 'subSeriesCode',
        'topicCount'    => 'topicCount',
        'updateTime'    => 'updateTime',
        'userId'        => 'userId',
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
