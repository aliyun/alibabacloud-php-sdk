<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstanceResponseBody\config;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstanceResponseBody\usedQuota;
use AlibabaCloud\Tea\Model;

class DescribeDnsGtmInstanceResponseBody extends Model
{
    /**
     * @var int
     */
    public $expireTimestamp;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $taskQuota;

    /**
     * @var config
     */
    public $config;

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
    public $versionCode;

    /**
     * @var string
     */
    public $paymentType;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var int
     */
    public $createTimestamp;

    /**
     * @var usedQuota
     */
    public $usedQuota;
    protected $_name = [
        'expireTimestamp' => 'ExpireTimestamp',
        'requestId'       => 'RequestId',
        'resourceGroupId' => 'ResourceGroupId',
        'instanceId'      => 'InstanceId',
        'taskQuota'       => 'TaskQuota',
        'config'          => 'Config',
        'createTime'      => 'CreateTime',
        'smsQuota'        => 'SmsQuota',
        'versionCode'     => 'VersionCode',
        'paymentType'     => 'PaymentType',
        'expireTime'      => 'ExpireTime',
        'createTimestamp' => 'CreateTimestamp',
        'usedQuota'       => 'UsedQuota',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expireTimestamp) {
            $res['ExpireTimestamp'] = $this->expireTimestamp;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->taskQuota) {
            $res['TaskQuota'] = $this->taskQuota;
        }
        if (null !== $this->config) {
            $res['Config'] = null !== $this->config ? $this->config->toMap() : null;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->smsQuota) {
            $res['SmsQuota'] = $this->smsQuota;
        }
        if (null !== $this->versionCode) {
            $res['VersionCode'] = $this->versionCode;
        }
        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->usedQuota) {
            $res['UsedQuota'] = null !== $this->usedQuota ? $this->usedQuota->toMap() : null;
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
        if (isset($map['ExpireTimestamp'])) {
            $model->expireTimestamp = $map['ExpireTimestamp'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TaskQuota'])) {
            $model->taskQuota = $map['TaskQuota'];
        }
        if (isset($map['Config'])) {
            $model->config = config::fromMap($map['Config']);
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['SmsQuota'])) {
            $model->smsQuota = $map['SmsQuota'];
        }
        if (isset($map['VersionCode'])) {
            $model->versionCode = $map['VersionCode'];
        }
        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['UsedQuota'])) {
            $model->usedQuota = usedQuota::fromMap($map['UsedQuota']);
        }

        return $model;
    }
}
