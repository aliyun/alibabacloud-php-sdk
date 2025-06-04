<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cddc\V20200320\Models\CreateMyBaseRequest\ECSClassList;
use AlibabaCloud\SDK\Cddc\V20200320\Models\CreateMyBaseRequest\tags;

class CreateMyBaseRequest extends Model
{
    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var string
     */
    public $autoRenew;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $dedicatedHostGroupDescription;

    /**
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @var ECSClassList[]
     */
    public $ECSClassList;

    /**
     * @var string
     */
    public $ecsDeploymentSetId;

    /**
     * @var string
     */
    public $ecsHostName;

    /**
     * @var string
     */
    public $ecsInstanceName;

    /**
     * @var string
     */
    public $ecsUniqueSuffix;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var int
     */
    public $internetMaxBandwidthOut;

    /**
     * @var string
     */
    public $keyPairName;

    /**
     * @var string
     */
    public $osPassword;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $passwordInherit;

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
    public $periodType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

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
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var bool
     */
    public $userDataInBase64;

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
    public $zoneId;
    protected $_name = [
        'autoPay' => 'AutoPay',
        'autoRenew' => 'AutoRenew',
        'clientToken' => 'ClientToken',
        'dedicatedHostGroupDescription' => 'DedicatedHostGroupDescription',
        'dedicatedHostGroupId' => 'DedicatedHostGroupId',
        'ECSClassList' => 'ECSClassList',
        'ecsDeploymentSetId' => 'EcsDeploymentSetId',
        'ecsHostName' => 'EcsHostName',
        'ecsInstanceName' => 'EcsInstanceName',
        'ecsUniqueSuffix' => 'EcsUniqueSuffix',
        'engine' => 'Engine',
        'imageId' => 'ImageId',
        'internetChargeType' => 'InternetChargeType',
        'internetMaxBandwidthOut' => 'InternetMaxBandwidthOut',
        'keyPairName' => 'KeyPairName',
        'osPassword' => 'OsPassword',
        'ownerId' => 'OwnerId',
        'passwordInherit' => 'PasswordInherit',
        'payType' => 'PayType',
        'period' => 'Period',
        'periodType' => 'PeriodType',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'securityGroupId' => 'SecurityGroupId',
        'tags' => 'Tags',
        'userData' => 'UserData',
        'userDataInBase64' => 'UserDataInBase64',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->ECSClassList)) {
            Model::validateArray($this->ECSClassList);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }

        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->dedicatedHostGroupDescription) {
            $res['DedicatedHostGroupDescription'] = $this->dedicatedHostGroupDescription;
        }

        if (null !== $this->dedicatedHostGroupId) {
            $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        }

        if (null !== $this->ECSClassList) {
            if (\is_array($this->ECSClassList)) {
                $res['ECSClassList'] = [];
                $n1 = 0;
                foreach ($this->ECSClassList as $item1) {
                    $res['ECSClassList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->ecsDeploymentSetId) {
            $res['EcsDeploymentSetId'] = $this->ecsDeploymentSetId;
        }

        if (null !== $this->ecsHostName) {
            $res['EcsHostName'] = $this->ecsHostName;
        }

        if (null !== $this->ecsInstanceName) {
            $res['EcsInstanceName'] = $this->ecsInstanceName;
        }

        if (null !== $this->ecsUniqueSuffix) {
            $res['EcsUniqueSuffix'] = $this->ecsUniqueSuffix;
        }

        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }

        if (null !== $this->internetMaxBandwidthOut) {
            $res['InternetMaxBandwidthOut'] = $this->internetMaxBandwidthOut;
        }

        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }

        if (null !== $this->osPassword) {
            $res['OsPassword'] = $this->osPassword;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->passwordInherit) {
            $res['PasswordInherit'] = $this->passwordInherit;
        }

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->periodType) {
            $res['PeriodType'] = $this->periodType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        if (null !== $this->userDataInBase64) {
            $res['UserDataInBase64'] = $this->userDataInBase64;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }

        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DedicatedHostGroupDescription'])) {
            $model->dedicatedHostGroupDescription = $map['DedicatedHostGroupDescription'];
        }

        if (isset($map['DedicatedHostGroupId'])) {
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }

        if (isset($map['ECSClassList'])) {
            if (!empty($map['ECSClassList'])) {
                $model->ECSClassList = [];
                $n1 = 0;
                foreach ($map['ECSClassList'] as $item1) {
                    $model->ECSClassList[$n1++] = ECSClassList::fromMap($item1);
                }
            }
        }

        if (isset($map['EcsDeploymentSetId'])) {
            $model->ecsDeploymentSetId = $map['EcsDeploymentSetId'];
        }

        if (isset($map['EcsHostName'])) {
            $model->ecsHostName = $map['EcsHostName'];
        }

        if (isset($map['EcsInstanceName'])) {
            $model->ecsInstanceName = $map['EcsInstanceName'];
        }

        if (isset($map['EcsUniqueSuffix'])) {
            $model->ecsUniqueSuffix = $map['EcsUniqueSuffix'];
        }

        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }

        if (isset($map['InternetMaxBandwidthOut'])) {
            $model->internetMaxBandwidthOut = $map['InternetMaxBandwidthOut'];
        }

        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }

        if (isset($map['OsPassword'])) {
            $model->osPassword = $map['OsPassword'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PasswordInherit'])) {
            $model->passwordInherit = $map['PasswordInherit'];
        }

        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['PeriodType'])) {
            $model->periodType = $map['PeriodType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        if (isset($map['UserDataInBase64'])) {
            $model->userDataInBase64 = $map['UserDataInBase64'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
