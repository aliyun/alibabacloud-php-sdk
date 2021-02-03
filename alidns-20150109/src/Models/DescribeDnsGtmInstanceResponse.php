<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstanceResponse\config;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstanceResponse\usedQuota;
use AlibabaCloud\Tea\Model;

class DescribeDnsGtmInstanceResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $versionCode;

    /**
     * @var int
     */
    public $smsQuota;

    /**
     * @var int
     */
    public $taskQuota;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $createTimestamp;

    /**
     * @var string
     */
    public $expireTime;

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
    public $paymentType;

    /**
     * @var config
     */
    public $config;

    /**
     * @var usedQuota
     */
    public $usedQuota;
    protected $_name = [
        'requestId'       => 'RequestId',
        'instanceId'      => 'InstanceId',
        'versionCode'     => 'VersionCode',
        'smsQuota'        => 'SmsQuota',
        'taskQuota'       => 'TaskQuota',
        'createTime'      => 'CreateTime',
        'createTimestamp' => 'CreateTimestamp',
        'expireTime'      => 'ExpireTime',
        'expireTimestamp' => 'ExpireTimestamp',
        'resourceGroupId' => 'ResourceGroupId',
        'paymentType'     => 'PaymentType',
        'config'          => 'Config',
        'usedQuota'       => 'UsedQuota',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('versionCode', $this->versionCode, true);
        Model::validateRequired('smsQuota', $this->smsQuota, true);
        Model::validateRequired('taskQuota', $this->taskQuota, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('createTimestamp', $this->createTimestamp, true);
        Model::validateRequired('expireTime', $this->expireTime, true);
        Model::validateRequired('expireTimestamp', $this->expireTimestamp, true);
        Model::validateRequired('resourceGroupId', $this->resourceGroupId, true);
        Model::validateRequired('paymentType', $this->paymentType, true);
        Model::validateRequired('config', $this->config, true);
        Model::validateRequired('usedQuota', $this->usedQuota, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->versionCode) {
            $res['VersionCode'] = $this->versionCode;
        }
        if (null !== $this->smsQuota) {
            $res['SmsQuota'] = $this->smsQuota;
        }
        if (null !== $this->taskQuota) {
            $res['TaskQuota'] = $this->taskQuota;
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }
        if (null !== $this->config) {
            $res['Config'] = null !== $this->config ? $this->config->toMap() : null;
        }
        if (null !== $this->usedQuota) {
            $res['UsedQuota'] = null !== $this->usedQuota ? $this->usedQuota->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDnsGtmInstanceResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['VersionCode'])) {
            $model->versionCode = $map['VersionCode'];
        }
        if (isset($map['SmsQuota'])) {
            $model->smsQuota = $map['SmsQuota'];
        }
        if (isset($map['TaskQuota'])) {
            $model->taskQuota = $map['TaskQuota'];
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }
        if (isset($map['Config'])) {
            $model->config = config::fromMap($map['Config']);
        }
        if (isset($map['UsedQuota'])) {
            $model->usedQuota = usedQuota::fromMap($map['UsedQuota']);
        }

        return $model;
    }
}
