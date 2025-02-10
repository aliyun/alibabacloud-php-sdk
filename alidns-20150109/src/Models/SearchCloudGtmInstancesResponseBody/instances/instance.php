<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\SearchCloudGtmInstancesResponseBody\instances;

use AlibabaCloud\Dara\Model;

class instance extends Model
{
    /**
     * @var string
     */
    public $commodityCode;
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var int
     */
    public $createTimestamp;
    /**
     * @var int
     */
    public $expireTime;
    /**
     * @var string
     */
    public $expireTimestamp;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $instanceName;
    /**
     * @var int
     */
    public $monitorTaskQuota;
    /**
     * @var int
     */
    public $monthlyEmailUsed;
    /**
     * @var int
     */
    public $monthlySmsQuota;
    /**
     * @var int
     */
    public $monthlySmsUsed;
    /**
     * @var int
     */
    public $monthlyWebhookUsed;
    /**
     * @var string
     */
    public $scheduleDomainName;
    /**
     * @var string
     */
    public $updateTime;
    /**
     * @var int
     */
    public $updateTimestamp;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
