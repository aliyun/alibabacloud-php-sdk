<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstancesResponseBody;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstancesResponseBody\gtmInstances\config;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstancesResponseBody\gtmInstances\usedQuota;
use AlibabaCloud\Tea\Model;

class gtmInstances extends Model
{
    /**
     * @var string
     */
    public $paymentType;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $smsQuota;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var config
     */
    public $config;

    /**
     * @var int
     */
    public $expireTimestamp;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $versionCode;

    /**
     * @var usedQuota
     */
    public $usedQuota;

    /**
     * @var int
     */
    public $taskQuota;

    /**
     * @var int
     */
    public $createTimestamp;
    protected $_name = [
        'paymentType'     => 'PaymentType',
        'expireTime'      => 'ExpireTime',
        'createTime'      => 'CreateTime',
        'smsQuota'        => 'SmsQuota',
        'instanceId'      => 'InstanceId',
        'config'          => 'Config',
        'expireTimestamp' => 'ExpireTimestamp',
        'resourceGroupId' => 'ResourceGroupId',
        'versionCode'     => 'VersionCode',
        'usedQuota'       => 'UsedQuota',
        'taskQuota'       => 'TaskQuota',
        'createTimestamp' => 'CreateTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->smsQuota) {
            $res['SmsQuota'] = $this->smsQuota;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->config) {
            $res['Config'] = null !== $this->config ? $this->config->toMap() : null;
        }
        if (null !== $this->expireTimestamp) {
            $res['ExpireTimestamp'] = $this->expireTimestamp;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->versionCode) {
            $res['VersionCode'] = $this->versionCode;
        }
        if (null !== $this->usedQuota) {
            $res['UsedQuota'] = null !== $this->usedQuota ? $this->usedQuota->toMap() : null;
        }
        if (null !== $this->taskQuota) {
            $res['TaskQuota'] = $this->taskQuota;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
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
        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['SmsQuota'])) {
            $model->smsQuota = $map['SmsQuota'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Config'])) {
            $model->config = config::fromMap($map['Config']);
        }
        if (isset($map['ExpireTimestamp'])) {
            $model->expireTimestamp = $map['ExpireTimestamp'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['VersionCode'])) {
            $model->versionCode = $map['VersionCode'];
        }
        if (isset($map['UsedQuota'])) {
            $model->usedQuota = usedQuota::fromMap($map['UsedQuota']);
        }
        if (isset($map['TaskQuota'])) {
            $model->taskQuota = $map['TaskQuota'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }

        return $model;
    }
}
