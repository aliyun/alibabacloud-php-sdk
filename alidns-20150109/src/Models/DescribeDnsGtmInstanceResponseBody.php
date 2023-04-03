<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstanceResponseBody\config;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstanceResponseBody\usedQuota;
use AlibabaCloud\Tea\Model;

class DescribeDnsGtmInstanceResponseBody extends Model
{
    /**
     * @description The configurations of the instance.
     *
     * @var config
     */
    public $config;

    /**
     * @description The time when the instance was created.
     *
     * @example 2020-10-14T06:58Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The UNIX timestamp that indicates when the instance was created.
     *
     * @example 1602656937000
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description The time when the instance expires.
     *
     * @example 2020-10-14T06:58Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The UNIX timestamp that indicates when the instance expires.
     *
     * @example 1602656937000
     *
     * @var int
     */
    public $expireTimestamp;

    /**
     * @description The ID of the instance.
     *
     * @example instanceid1
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The billing method. Valid value:
     *
     *   Subscription: You can pay in advance for the use of resources.
     *
     * @example Subscription
     *
     * @var string
     */
    public $paymentType;

    /**
     * @description The ID of the request.
     *
     * @example 84314904-D047-4176-A0EC-256D7F68C7F5
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the resource group to which the instance belongs.
     *
     * @example resourcegroupid1
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The total number of SMS notifications.
     *
     * @example 100
     *
     * @var int
     */
    public $smsQuota;

    /**
     * @description The total number of detection tasks.
     *
     * @example 100
     *
     * @var int
     */
    public $taskQuota;

    /**
     * @description The used quota.
     *
     * @var usedQuota
     */
    public $usedQuota;

    /**
     * @description The version of the instance.
     *
     * @example versioncode1
     *
     * @var string
     */
    public $versionCode;
    protected $_name = [
        'config'          => 'Config',
        'createTime'      => 'CreateTime',
        'createTimestamp' => 'CreateTimestamp',
        'expireTime'      => 'ExpireTime',
        'expireTimestamp' => 'ExpireTimestamp',
        'instanceId'      => 'InstanceId',
        'paymentType'     => 'PaymentType',
        'requestId'       => 'RequestId',
        'resourceGroupId' => 'ResourceGroupId',
        'smsQuota'        => 'SmsQuota',
        'taskQuota'       => 'TaskQuota',
        'usedQuota'       => 'UsedQuota',
        'versionCode'     => 'VersionCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = null !== $this->config ? $this->config->toMap() : null;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->expireTimestamp) {
            $res['ExpireTimestamp'] = $this->expireTimestamp;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->smsQuota) {
            $res['SmsQuota'] = $this->smsQuota;
        }
        if (null !== $this->taskQuota) {
            $res['TaskQuota'] = $this->taskQuota;
        }
        if (null !== $this->usedQuota) {
            $res['UsedQuota'] = null !== $this->usedQuota ? $this->usedQuota->toMap() : null;
        }
        if (null !== $this->versionCode) {
            $res['VersionCode'] = $this->versionCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDnsGtmInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = config::fromMap($map['Config']);
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['ExpireTimestamp'])) {
            $model->expireTimestamp = $map['ExpireTimestamp'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SmsQuota'])) {
            $model->smsQuota = $map['SmsQuota'];
        }
        if (isset($map['TaskQuota'])) {
            $model->taskQuota = $map['TaskQuota'];
        }
        if (isset($map['UsedQuota'])) {
            $model->usedQuota = usedQuota::fromMap($map['UsedQuota']);
        }
        if (isset($map['VersionCode'])) {
            $model->versionCode = $map['VersionCode'];
        }

        return $model;
    }
}
