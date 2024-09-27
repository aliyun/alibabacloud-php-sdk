<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\ListCloudGtmInstancesResponseBody\instances;

use AlibabaCloud\Tea\Model;

class instance extends Model
{
    /**
     * @description The commodity code. Valid values:
     *
     *   dns_gtm_public_cn: commodity code on the China site (aliyun.com)
     *   dns_gtm_public_intl: commodity code on the international site (alibabacloud.com)
     *
     * @example dns_gtm_public_cn
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description Instance creation time.
     *
     * @example 2024-03-15T01:46Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Instance creation time (timestamp).
     *
     * @example 1231298343343
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description Instance expiration time.
     *
     * @example 2024-03-15T01:46Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description Instance expiration time (timestamp).
     *
     * @example 1231298343343
     *
     * @var int
     */
    public $expireTimestamp;

    /**
     * @description The ID of the GTM instance.
     *
     * @example gtm-cn-jmp3qnw**03
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Instance name.
     *
     * @example test
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description Monitor probe task quota.
     *
     * @example 100
     *
     * @var int
     */
    public $monitorTaskQuota;

    /**
     * @description Monthly email sending volume.
     *
     * @example 50
     *
     * @var int
     */
    public $monthlyEmailUsed;

    /**
     * @description SMS quota, only supported on the China site as international sites do not support SMS.
     *
     * @example 1000
     *
     * @var int
     */
    public $monthlySmsQuota;

    /**
     * @description Monthly SMS sending volume, only supported by the China site as international sites do not support SMS.
     *
     * @example 100
     *
     * @var int
     */
    public $monthlySmsUsed;

    /**
     * @description Monthly webhook send volume.
     *
     * @example 80
     *
     * @var int
     */
    public $monthlyWebhookUsed;

    /**
     * @description The access domain name, which consists of a hostname and a zone or a subzone.
     *
     * @example www.example.com
     *
     * @var string
     */
    public $scheduleDomainName;

    /**
     * @description The last time the instance was modified.
     *
     * @example 2024-03-15T01:46Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description The last modification time of the instance (timestamp).
     *
     * @example 1231298343343
     *
     * @var int
     */
    public $updateTimestamp;

    /**
     * @description GTM instance version:
     * - ultimate: Ultimate Edition
     * @example ultimate
     *
     * @var string
     */
    public $versionCode;
    protected $_name = [
        'commodityCode'      => 'CommodityCode',
        'createTime'         => 'CreateTime',
        'createTimestamp'    => 'CreateTimestamp',
        'expireTime'         => 'ExpireTime',
        'expireTimestamp'    => 'ExpireTimestamp',
        'instanceId'         => 'InstanceId',
        'instanceName'       => 'InstanceName',
        'monitorTaskQuota'   => 'MonitorTaskQuota',
        'monthlyEmailUsed'   => 'MonthlyEmailUsed',
        'monthlySmsQuota'    => 'MonthlySmsQuota',
        'monthlySmsUsed'     => 'MonthlySmsUsed',
        'monthlyWebhookUsed' => 'MonthlyWebhookUsed',
        'scheduleDomainName' => 'ScheduleDomainName',
        'updateTime'         => 'UpdateTime',
        'updateTimestamp'    => 'UpdateTimestamp',
        'versionCode'        => 'VersionCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
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
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->monitorTaskQuota) {
            $res['MonitorTaskQuota'] = $this->monitorTaskQuota;
        }
        if (null !== $this->monthlyEmailUsed) {
            $res['MonthlyEmailUsed'] = $this->monthlyEmailUsed;
        }
        if (null !== $this->monthlySmsQuota) {
            $res['MonthlySmsQuota'] = $this->monthlySmsQuota;
        }
        if (null !== $this->monthlySmsUsed) {
            $res['MonthlySmsUsed'] = $this->monthlySmsUsed;
        }
        if (null !== $this->monthlyWebhookUsed) {
            $res['MonthlyWebhookUsed'] = $this->monthlyWebhookUsed;
        }
        if (null !== $this->scheduleDomainName) {
            $res['ScheduleDomainName'] = $this->scheduleDomainName;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->updateTimestamp) {
            $res['UpdateTimestamp'] = $this->updateTimestamp;
        }
        if (null !== $this->versionCode) {
            $res['VersionCode'] = $this->versionCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
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
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['MonitorTaskQuota'])) {
            $model->monitorTaskQuota = $map['MonitorTaskQuota'];
        }
        if (isset($map['MonthlyEmailUsed'])) {
            $model->monthlyEmailUsed = $map['MonthlyEmailUsed'];
        }
        if (isset($map['MonthlySmsQuota'])) {
            $model->monthlySmsQuota = $map['MonthlySmsQuota'];
        }
        if (isset($map['MonthlySmsUsed'])) {
            $model->monthlySmsUsed = $map['MonthlySmsUsed'];
        }
        if (isset($map['MonthlyWebhookUsed'])) {
            $model->monthlyWebhookUsed = $map['MonthlyWebhookUsed'];
        }
        if (isset($map['ScheduleDomainName'])) {
            $model->scheduleDomainName = $map['ScheduleDomainName'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UpdateTimestamp'])) {
            $model->updateTimestamp = $map['UpdateTimestamp'];
        }
        if (isset($map['VersionCode'])) {
            $model->versionCode = $map['VersionCode'];
        }

        return $model;
    }
}
