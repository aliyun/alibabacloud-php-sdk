<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\CreateInstanceV1Request\agentNodeGroup;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\CreateInstanceV1Request\backendNodeGroups;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\CreateInstanceV1Request\frontendNodeGroups;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\CreateInstanceV1Request\observerNodeGroups;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\CreateInstanceV1Request\tags;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\CreateInstanceV1Request\vSwitches;

class CreateInstanceV1Request extends Model
{
    /**
     * @var string
     */
    public $adminPassword;

    /**
     * @var agentNodeGroup
     */
    public $agentNodeGroup;

    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @var backendNodeGroups[]
     */
    public $backendNodeGroups;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var bool
     */
    public $encrypted;

    /**
     * @var frontendNodeGroups[]
     */
    public $frontendNodeGroups;

    /**
     * @var string
     */
    public $gatewayType;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $kmsKeyId;

    /**
     * @var observerNodeGroups[]
     */
    public $observerNodeGroups;

    /**
     * @var string
     */
    public $ossAccessingRoleName;

    /**
     * @var string
     */
    public $packageType;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $pricingCycle;

    /**
     * @var string
     */
    public $promotionOptionNo;

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
    public $runMode;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var vSwitches[]
     */
    public $vSwitches;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'adminPassword' => 'AdminPassword',
        'agentNodeGroup' => 'AgentNodeGroup',
        'autoPay' => 'AutoPay',
        'autoRenew' => 'AutoRenew',
        'backendNodeGroups' => 'BackendNodeGroups',
        'clientToken' => 'ClientToken',
        'duration' => 'Duration',
        'encrypted' => 'Encrypted',
        'frontendNodeGroups' => 'FrontendNodeGroups',
        'gatewayType' => 'GatewayType',
        'instanceName' => 'InstanceName',
        'kmsKeyId' => 'KmsKeyId',
        'observerNodeGroups' => 'ObserverNodeGroups',
        'ossAccessingRoleName' => 'OssAccessingRoleName',
        'packageType' => 'PackageType',
        'payType' => 'PayType',
        'pricingCycle' => 'PricingCycle',
        'promotionOptionNo' => 'PromotionOptionNo',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'runMode' => 'RunMode',
        'tags' => 'Tags',
        'vSwitches' => 'VSwitches',
        'version' => 'Version',
        'vpcId' => 'VpcId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (null !== $this->agentNodeGroup) {
            $this->agentNodeGroup->validate();
        }
        if (\is_array($this->backendNodeGroups)) {
            Model::validateArray($this->backendNodeGroups);
        }
        if (\is_array($this->frontendNodeGroups)) {
            Model::validateArray($this->frontendNodeGroups);
        }
        if (\is_array($this->observerNodeGroups)) {
            Model::validateArray($this->observerNodeGroups);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (\is_array($this->vSwitches)) {
            Model::validateArray($this->vSwitches);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adminPassword) {
            $res['AdminPassword'] = $this->adminPassword;
        }

        if (null !== $this->agentNodeGroup) {
            $res['AgentNodeGroup'] = null !== $this->agentNodeGroup ? $this->agentNodeGroup->toArray($noStream) : $this->agentNodeGroup;
        }

        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }

        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }

        if (null !== $this->backendNodeGroups) {
            if (\is_array($this->backendNodeGroups)) {
                $res['BackendNodeGroups'] = [];
                $n1 = 0;
                foreach ($this->backendNodeGroups as $item1) {
                    $res['BackendNodeGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->encrypted) {
            $res['Encrypted'] = $this->encrypted;
        }

        if (null !== $this->frontendNodeGroups) {
            if (\is_array($this->frontendNodeGroups)) {
                $res['FrontendNodeGroups'] = [];
                $n1 = 0;
                foreach ($this->frontendNodeGroups as $item1) {
                    $res['FrontendNodeGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->gatewayType) {
            $res['GatewayType'] = $this->gatewayType;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->kmsKeyId) {
            $res['KmsKeyId'] = $this->kmsKeyId;
        }

        if (null !== $this->observerNodeGroups) {
            if (\is_array($this->observerNodeGroups)) {
                $res['ObserverNodeGroups'] = [];
                $n1 = 0;
                foreach ($this->observerNodeGroups as $item1) {
                    $res['ObserverNodeGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ossAccessingRoleName) {
            $res['OssAccessingRoleName'] = $this->ossAccessingRoleName;
        }

        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
        }

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }

        if (null !== $this->promotionOptionNo) {
            $res['PromotionOptionNo'] = $this->promotionOptionNo;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->runMode) {
            $res['RunMode'] = $this->runMode;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vSwitches) {
            if (\is_array($this->vSwitches)) {
                $res['VSwitches'] = [];
                $n1 = 0;
                foreach ($this->vSwitches as $item1) {
                    $res['VSwitches'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['AdminPassword'])) {
            $model->adminPassword = $map['AdminPassword'];
        }

        if (isset($map['AgentNodeGroup'])) {
            $model->agentNodeGroup = agentNodeGroup::fromMap($map['AgentNodeGroup']);
        }

        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }

        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }

        if (isset($map['BackendNodeGroups'])) {
            if (!empty($map['BackendNodeGroups'])) {
                $model->backendNodeGroups = [];
                $n1 = 0;
                foreach ($map['BackendNodeGroups'] as $item1) {
                    $model->backendNodeGroups[$n1] = backendNodeGroups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['Encrypted'])) {
            $model->encrypted = $map['Encrypted'];
        }

        if (isset($map['FrontendNodeGroups'])) {
            if (!empty($map['FrontendNodeGroups'])) {
                $model->frontendNodeGroups = [];
                $n1 = 0;
                foreach ($map['FrontendNodeGroups'] as $item1) {
                    $model->frontendNodeGroups[$n1] = frontendNodeGroups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['GatewayType'])) {
            $model->gatewayType = $map['GatewayType'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['KmsKeyId'])) {
            $model->kmsKeyId = $map['KmsKeyId'];
        }

        if (isset($map['ObserverNodeGroups'])) {
            if (!empty($map['ObserverNodeGroups'])) {
                $model->observerNodeGroups = [];
                $n1 = 0;
                foreach ($map['ObserverNodeGroups'] as $item1) {
                    $model->observerNodeGroups[$n1] = observerNodeGroups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['OssAccessingRoleName'])) {
            $model->ossAccessingRoleName = $map['OssAccessingRoleName'];
        }

        if (isset($map['PackageType'])) {
            $model->packageType = $map['PackageType'];
        }

        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }

        if (isset($map['PromotionOptionNo'])) {
            $model->promotionOptionNo = $map['PromotionOptionNo'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['RunMode'])) {
            $model->runMode = $map['RunMode'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['VSwitches'])) {
            if (!empty($map['VSwitches'])) {
                $model->vSwitches = [];
                $n1 = 0;
                foreach ($map['VSwitches'] as $item1) {
                    $model->vSwitches[$n1] = vSwitches::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
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
