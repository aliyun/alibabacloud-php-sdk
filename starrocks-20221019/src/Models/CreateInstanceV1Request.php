<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models;

use AlibabaCloud\SDK\Starrocks\V20221019\Models\CreateInstanceV1Request\backendNodeGroups;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\CreateInstanceV1Request\frontendNodeGroups;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\CreateInstanceV1Request\observerNodeGroups;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\CreateInstanceV1Request\tags;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\CreateInstanceV1Request\vSwitches;
use AlibabaCloud\Tea\Model;

class CreateInstanceV1Request extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example password_example
     *
     * @var string
     */
    public $adminPassword;

    /**
     * @example true
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @var backendNodeGroups[]
     */
    public $backendNodeGroups;

    /**
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example 1
     *
     * @var int
     */
    public $duration;

    /**
     * @example true
     *
     * @var bool
     */
    public $encrypted;

    /**
     * @var frontendNodeGroups[]
     */
    public $frontendNodeGroups;

    /**
     * @description This parameter is required.
     *
     * @example c1
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example fdsdf****
     *
     * @var string
     */
    public $kmsKeyId;

    /**
     * @var observerNodeGroups[]
     */
    public $observerNodeGroups;

    /**
     * @example AliyunEMRStarRocksAccessingOSSRole
     *
     * @var string
     */
    public $ossAccessingRoleName;

    /**
     * @description This parameter is required.
     *
     * @example official
     *
     * @var string
     */
    public $packageType;

    /**
     * @description This parameter is required.
     *
     * @example prePaid
     *
     * @var string
     */
    public $payType;

    /**
     * @example Month
     *
     * @var string
     */
    public $pricingCycle;

    /**
     * @example 165445235634
     *
     * @var string
     */
    public $promotionOptionNo;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example rg-aekzllkih7jqxxx
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description This parameter is required.
     *
     * @example shared_data
     *
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
     * @description This parameter is required.
     *
     * @example 3
     *
     * @var string
     */
    public $version;

    /**
     * @description VPC ID。
     *
     * This parameter is required.
     *
     * @example vpc-bp1fll2mci6d7pw8m****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'adminPassword' => 'AdminPassword',
        'autoRenew' => 'AutoRenew',
        'backendNodeGroups' => 'BackendNodeGroups',
        'clientToken' => 'ClientToken',
        'duration' => 'Duration',
        'encrypted' => 'Encrypted',
        'frontendNodeGroups' => 'FrontendNodeGroups',
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->adminPassword) {
            $res['AdminPassword'] = $this->adminPassword;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->backendNodeGroups) {
            $res['BackendNodeGroups'] = [];
            if (null !== $this->backendNodeGroups && \is_array($this->backendNodeGroups)) {
                $n = 0;
                foreach ($this->backendNodeGroups as $item) {
                    $res['BackendNodeGroups'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['FrontendNodeGroups'] = [];
            if (null !== $this->frontendNodeGroups && \is_array($this->frontendNodeGroups)) {
                $n = 0;
                foreach ($this->frontendNodeGroups as $item) {
                    $res['FrontendNodeGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->kmsKeyId) {
            $res['KmsKeyId'] = $this->kmsKeyId;
        }
        if (null !== $this->observerNodeGroups) {
            $res['ObserverNodeGroups'] = [];
            if (null !== $this->observerNodeGroups && \is_array($this->observerNodeGroups)) {
                $n = 0;
                foreach ($this->observerNodeGroups as $item) {
                    $res['ObserverNodeGroups'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vSwitches) {
            $res['VSwitches'] = [];
            if (null !== $this->vSwitches && \is_array($this->vSwitches)) {
                $n = 0;
                foreach ($this->vSwitches as $item) {
                    $res['VSwitches'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return CreateInstanceV1Request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdminPassword'])) {
            $model->adminPassword = $map['AdminPassword'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['BackendNodeGroups'])) {
            if (!empty($map['BackendNodeGroups'])) {
                $model->backendNodeGroups = [];
                $n = 0;
                foreach ($map['BackendNodeGroups'] as $item) {
                    $model->backendNodeGroups[$n++] = null !== $item ? backendNodeGroups::fromMap($item) : $item;
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
                $n = 0;
                foreach ($map['FrontendNodeGroups'] as $item) {
                    $model->frontendNodeGroups[$n++] = null !== $item ? frontendNodeGroups::fromMap($item) : $item;
                }
            }
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
                $n = 0;
                foreach ($map['ObserverNodeGroups'] as $item) {
                    $model->observerNodeGroups[$n++] = null !== $item ? observerNodeGroups::fromMap($item) : $item;
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
                $n = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VSwitches'])) {
            if (!empty($map['VSwitches'])) {
                $model->vSwitches = [];
                $n = 0;
                foreach ($map['VSwitches'] as $item) {
                    $model->vSwitches[$n++] = null !== $item ? vSwitches::fromMap($item) : $item;
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
