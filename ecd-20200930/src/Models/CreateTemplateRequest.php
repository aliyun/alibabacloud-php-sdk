<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateTemplateRequest\dataDiskList;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateTemplateRequest\regionConfigList;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateTemplateRequest\resourceTagList;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateTemplateRequest\siteConfigList;
use AlibabaCloud\Tea\Model;

class CreateTemplateRequest extends Model
{
    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @example 1
     *
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var dataDiskList[]
     */
    public $dataDiskList;

    /**
     * @example zh-CN
     *
     * @var string
     */
    public $defaultLanguage;

    /**
     * @var string
     */
    public $description;

    /**
     * @example desktopimage-windows-server-2022-64-asp
     *
     * @var string
     */
    public $imageId;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @example pg-8hlryfn331******
     *
     * @var string
     */
    public $policyGroupId;

    /**
     * @var bool
     */
    public $postPaidAfterUsedUp;

    /**
     * @example CloudDesktop
     *
     * @var string
     */
    public $productType;

    /**
     * @var regionConfigList[]
     */
    public $regionConfigList;

    /**
     * @example rg-4knxmfneq1e******
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var resourceTagList[]
     */
    public $resourceTagList;

    /**
     * @var siteConfigList[]
     */
    public $siteConfigList;

    /**
     * @example AutoPL
     *
     * @var string
     */
    public $systemDiskPerformanceLevel;

    /**
     * @example 80
     *
     * @var int
     */
    public $systemDiskSize;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $templateName;

    /**
     * @example ccg-0caoeogrk9m5****
     *
     * @var string
     */
    public $timerGroupId;

    /**
     * @var int
     */
    public $userDuration;
    protected $_name = [
        'autoPay' => 'AutoPay',
        'autoRenew' => 'AutoRenew',
        'bizType' => 'BizType',
        'chargeType' => 'ChargeType',
        'dataDiskList' => 'DataDiskList',
        'defaultLanguage' => 'DefaultLanguage',
        'description' => 'Description',
        'imageId' => 'ImageId',
        'period' => 'Period',
        'periodUnit' => 'PeriodUnit',
        'policyGroupId' => 'PolicyGroupId',
        'postPaidAfterUsedUp' => 'PostPaidAfterUsedUp',
        'productType' => 'ProductType',
        'regionConfigList' => 'RegionConfigList',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceTagList' => 'ResourceTagList',
        'siteConfigList' => 'SiteConfigList',
        'systemDiskPerformanceLevel' => 'SystemDiskPerformanceLevel',
        'systemDiskSize' => 'SystemDiskSize',
        'templateName' => 'TemplateName',
        'timerGroupId' => 'TimerGroupId',
        'userDuration' => 'UserDuration',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->dataDiskList) {
            $res['DataDiskList'] = [];
            if (null !== $this->dataDiskList && \is_array($this->dataDiskList)) {
                $n = 0;
                foreach ($this->dataDiskList as $item) {
                    $res['DataDiskList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->defaultLanguage) {
            $res['DefaultLanguage'] = $this->defaultLanguage;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }
        if (null !== $this->postPaidAfterUsedUp) {
            $res['PostPaidAfterUsedUp'] = $this->postPaidAfterUsedUp;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->regionConfigList) {
            $res['RegionConfigList'] = [];
            if (null !== $this->regionConfigList && \is_array($this->regionConfigList)) {
                $n = 0;
                foreach ($this->regionConfigList as $item) {
                    $res['RegionConfigList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceTagList) {
            $res['ResourceTagList'] = [];
            if (null !== $this->resourceTagList && \is_array($this->resourceTagList)) {
                $n = 0;
                foreach ($this->resourceTagList as $item) {
                    $res['ResourceTagList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->siteConfigList) {
            $res['SiteConfigList'] = [];
            if (null !== $this->siteConfigList && \is_array($this->siteConfigList)) {
                $n = 0;
                foreach ($this->siteConfigList as $item) {
                    $res['SiteConfigList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->systemDiskPerformanceLevel) {
            $res['SystemDiskPerformanceLevel'] = $this->systemDiskPerformanceLevel;
        }
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->timerGroupId) {
            $res['TimerGroupId'] = $this->timerGroupId;
        }
        if (null !== $this->userDuration) {
            $res['UserDuration'] = $this->userDuration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['DataDiskList'])) {
            if (!empty($map['DataDiskList'])) {
                $model->dataDiskList = [];
                $n = 0;
                foreach ($map['DataDiskList'] as $item) {
                    $model->dataDiskList[$n++] = null !== $item ? dataDiskList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DefaultLanguage'])) {
            $model->defaultLanguage = $map['DefaultLanguage'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['PolicyGroupId'])) {
            $model->policyGroupId = $map['PolicyGroupId'];
        }
        if (isset($map['PostPaidAfterUsedUp'])) {
            $model->postPaidAfterUsedUp = $map['PostPaidAfterUsedUp'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['RegionConfigList'])) {
            if (!empty($map['RegionConfigList'])) {
                $model->regionConfigList = [];
                $n = 0;
                foreach ($map['RegionConfigList'] as $item) {
                    $model->regionConfigList[$n++] = null !== $item ? regionConfigList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceTagList'])) {
            if (!empty($map['ResourceTagList'])) {
                $model->resourceTagList = [];
                $n = 0;
                foreach ($map['ResourceTagList'] as $item) {
                    $model->resourceTagList[$n++] = null !== $item ? resourceTagList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SiteConfigList'])) {
            if (!empty($map['SiteConfigList'])) {
                $model->siteConfigList = [];
                $n = 0;
                foreach ($map['SiteConfigList'] as $item) {
                    $model->siteConfigList[$n++] = null !== $item ? siteConfigList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SystemDiskPerformanceLevel'])) {
            $model->systemDiskPerformanceLevel = $map['SystemDiskPerformanceLevel'];
        }
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TimerGroupId'])) {
            $model->timerGroupId = $map['TimerGroupId'];
        }
        if (isset($map['UserDuration'])) {
            $model->userDuration = $map['UserDuration'];
        }

        return $model;
    }
}
