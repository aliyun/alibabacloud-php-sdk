<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateAIDBClusterRequest\timeSlices;

class CreateAIDBClusterRequest extends Model
{
    /**
     * @var string
     */
    public $ackAdmin;

    /**
     * @var string
     */
    public $autoRenew;

    /**
     * @var bool
     */
    public $autoUseCoupon;

    /**
     * @var string
     */
    public $DBClusterDescription;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $DBNodeClass;

    /**
     * @var string
     */
    public $extension;

    /**
     * @var string
     */
    public $inferenceEngine;

    /**
     * @var string
     */
    public $kubeClusterId;

    /**
     * @var string
     */
    public $kubeConfig;

    /**
     * @var string
     */
    public $kubeManagement;

    /**
     * @var string
     */
    public $kubeType;

    /**
     * @var string
     */
    public $kubernetesConfig;

    /**
     * @var string
     */
    public $managementMode;

    /**
     * @var string
     */
    public $modeName;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $period;

    /**
     * @var string
     */
    public $promotionCode;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var int
     */
    public $storageSpace;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var timeSlices[]
     */
    public $timeSlices;

    /**
     * @var string
     */
    public $usedTime;

    /**
     * @var string
     */
    public $VPCId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'ackAdmin' => 'AckAdmin',
        'autoRenew' => 'AutoRenew',
        'autoUseCoupon' => 'AutoUseCoupon',
        'DBClusterDescription' => 'DBClusterDescription',
        'DBClusterId' => 'DBClusterId',
        'DBNodeClass' => 'DBNodeClass',
        'extension' => 'Extension',
        'inferenceEngine' => 'InferenceEngine',
        'kubeClusterId' => 'KubeClusterId',
        'kubeConfig' => 'KubeConfig',
        'kubeManagement' => 'KubeManagement',
        'kubeType' => 'KubeType',
        'kubernetesConfig' => 'KubernetesConfig',
        'managementMode' => 'ManagementMode',
        'modeName' => 'ModeName',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'password' => 'Password',
        'payType' => 'PayType',
        'period' => 'Period',
        'promotionCode' => 'PromotionCode',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'securityGroupId' => 'SecurityGroupId',
        'storageSpace' => 'StorageSpace',
        'storageType' => 'StorageType',
        'timeSlices' => 'TimeSlices',
        'usedTime' => 'UsedTime',
        'VPCId' => 'VPCId',
        'vSwitchId' => 'VSwitchId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->timeSlices)) {
            Model::validateArray($this->timeSlices);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ackAdmin) {
            $res['AckAdmin'] = $this->ackAdmin;
        }

        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }

        if (null !== $this->autoUseCoupon) {
            $res['AutoUseCoupon'] = $this->autoUseCoupon;
        }

        if (null !== $this->DBClusterDescription) {
            $res['DBClusterDescription'] = $this->DBClusterDescription;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->DBNodeClass) {
            $res['DBNodeClass'] = $this->DBNodeClass;
        }

        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }

        if (null !== $this->inferenceEngine) {
            $res['InferenceEngine'] = $this->inferenceEngine;
        }

        if (null !== $this->kubeClusterId) {
            $res['KubeClusterId'] = $this->kubeClusterId;
        }

        if (null !== $this->kubeConfig) {
            $res['KubeConfig'] = $this->kubeConfig;
        }

        if (null !== $this->kubeManagement) {
            $res['KubeManagement'] = $this->kubeManagement;
        }

        if (null !== $this->kubeType) {
            $res['KubeType'] = $this->kubeType;
        }

        if (null !== $this->kubernetesConfig) {
            $res['KubernetesConfig'] = $this->kubernetesConfig;
        }

        if (null !== $this->managementMode) {
            $res['ManagementMode'] = $this->managementMode;
        }

        if (null !== $this->modeName) {
            $res['ModeName'] = $this->modeName;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->promotionCode) {
            $res['PromotionCode'] = $this->promotionCode;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        if (null !== $this->storageSpace) {
            $res['StorageSpace'] = $this->storageSpace;
        }

        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }

        if (null !== $this->timeSlices) {
            if (\is_array($this->timeSlices)) {
                $res['TimeSlices'] = [];
                $n1 = 0;
                foreach ($this->timeSlices as $item1) {
                    $res['TimeSlices'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
        }

        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
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
        if (isset($map['AckAdmin'])) {
            $model->ackAdmin = $map['AckAdmin'];
        }

        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }

        if (isset($map['AutoUseCoupon'])) {
            $model->autoUseCoupon = $map['AutoUseCoupon'];
        }

        if (isset($map['DBClusterDescription'])) {
            $model->DBClusterDescription = $map['DBClusterDescription'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['DBNodeClass'])) {
            $model->DBNodeClass = $map['DBNodeClass'];
        }

        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }

        if (isset($map['InferenceEngine'])) {
            $model->inferenceEngine = $map['InferenceEngine'];
        }

        if (isset($map['KubeClusterId'])) {
            $model->kubeClusterId = $map['KubeClusterId'];
        }

        if (isset($map['KubeConfig'])) {
            $model->kubeConfig = $map['KubeConfig'];
        }

        if (isset($map['KubeManagement'])) {
            $model->kubeManagement = $map['KubeManagement'];
        }

        if (isset($map['KubeType'])) {
            $model->kubeType = $map['KubeType'];
        }

        if (isset($map['KubernetesConfig'])) {
            $model->kubernetesConfig = $map['KubernetesConfig'];
        }

        if (isset($map['ManagementMode'])) {
            $model->managementMode = $map['ManagementMode'];
        }

        if (isset($map['ModeName'])) {
            $model->modeName = $map['ModeName'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['PromotionCode'])) {
            $model->promotionCode = $map['PromotionCode'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        if (isset($map['StorageSpace'])) {
            $model->storageSpace = $map['StorageSpace'];
        }

        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        if (isset($map['TimeSlices'])) {
            if (!empty($map['TimeSlices'])) {
                $model->timeSlices = [];
                $n1 = 0;
                foreach ($map['TimeSlices'] as $item1) {
                    $model->timeSlices[$n1] = timeSlices::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
        }

        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
