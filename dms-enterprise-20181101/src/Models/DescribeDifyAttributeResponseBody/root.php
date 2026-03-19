<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DescribeDifyAttributeResponseBody;

use AlibabaCloud\Dara\Model;

class root extends Model
{
    /**
     * @var string
     */
    public $appType;

    /**
     * @var string
     */
    public $appUuid;

    /**
     * @var string
     */
    public $billingInstanceId;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $difyInstanceId;

    /**
     * @var string
     */
    public $difyInstanceName;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $replicas;

    /**
     * @var string
     */
    public $resourceQuota;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $workspaceId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'appType' => 'AppType',
        'appUuid' => 'AppUuid',
        'billingInstanceId' => 'BillingInstanceId',
        'chargeType' => 'ChargeType',
        'difyInstanceId' => 'DifyInstanceId',
        'difyInstanceName' => 'DifyInstanceName',
        'expireTime' => 'ExpireTime',
        'regionId' => 'RegionId',
        'replicas' => 'Replicas',
        'resourceQuota' => 'ResourceQuota',
        'securityGroupId' => 'SecurityGroupId',
        'status' => 'Status',
        'storageType' => 'StorageType',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
        'workspaceId' => 'WorkspaceId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }

        if (null !== $this->appUuid) {
            $res['AppUuid'] = $this->appUuid;
        }

        if (null !== $this->billingInstanceId) {
            $res['BillingInstanceId'] = $this->billingInstanceId;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->difyInstanceId) {
            $res['DifyInstanceId'] = $this->difyInstanceId;
        }

        if (null !== $this->difyInstanceName) {
            $res['DifyInstanceName'] = $this->difyInstanceName;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->replicas) {
            $res['Replicas'] = $this->replicas;
        }

        if (null !== $this->resourceQuota) {
            $res['ResourceQuota'] = $this->resourceQuota;
        }

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }

        if (isset($map['AppUuid'])) {
            $model->appUuid = $map['AppUuid'];
        }

        if (isset($map['BillingInstanceId'])) {
            $model->billingInstanceId = $map['BillingInstanceId'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['DifyInstanceId'])) {
            $model->difyInstanceId = $map['DifyInstanceId'];
        }

        if (isset($map['DifyInstanceName'])) {
            $model->difyInstanceName = $map['DifyInstanceName'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Replicas'])) {
            $model->replicas = $map['Replicas'];
        }

        if (isset($map['ResourceQuota'])) {
            $model->resourceQuota = $map['ResourceQuota'];
        }

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
