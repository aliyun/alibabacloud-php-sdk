<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstancesResponseBody;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstancesResponseBody\gtmInstances\config;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstancesResponseBody\gtmInstances\usedQuota;
use AlibabaCloud\Tea\Model;

class gtmInstances extends Model
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
     * @description The timestamp that indicates when the instance was created.
     *
     * @example 1602658709000
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
     * @description The timestamp that indicates when the instance expires.
     *
     * @example 1602658709000
     *
     * @var int
     */
    public $expireTimestamp;

    /**
     * @description The ID of the instance.
     *
     * @example instance1
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The billing method of the instance.
     *
     *   The value is set to Subscription.
     *
     * @example Subscription
     *
     * @var string
     */
    public $paymentType;

    /**
     * @description The ID of the resource group to which the instance belongs.
     *
     * @example resourceGroupid123
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The total number of SMS notifications.
     *
     * @example 1
     *
     * @var int
     */
    public $smsQuota;

    /**
     * @description The total number of detection tasks.
     *
     * @example 1
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
     * @example testVersion1
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
     * @return gtmInstances
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
