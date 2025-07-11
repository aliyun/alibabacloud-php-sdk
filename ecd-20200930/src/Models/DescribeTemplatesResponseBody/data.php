<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeTemplatesResponseBody;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeTemplatesResponseBody\data\dataDiskList;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeTemplatesResponseBody\data\regionConfigList;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeTemplatesResponseBody\data\resourceTagList;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeTemplatesResponseBody\data\siteConfigList;
use AlibabaCloud\Tea\Model;

class data extends Model
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
     * @example 2025-04-25T05:18:46.000+00:00
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2025-04-25T05:18:46.000+00:00
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example m-5q8ehbihx*****
     *
     * @var string
     */
    public $imageId;

    /**
     * @example User
     *
     * @var string
     */
    public $imageType;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @example pg-0caoeogkhz*****
     *
     * @var string
     */
    public $policyGroupId;

    /**
     * @var bool
     */
    public $postPaidAfterUsedUp;

    /**
     * @example CLOUD_DESKTOP
     *
     * @var string
     */
    public $productType;

    /**
     * @var regionConfigList[]
     */
    public $regionConfigList;

    /**
     * @example 1871984F-51F6-5588-BAF6-******
     *
     * @var string
     */
    public $requestId;

    /**
     * @example rg-a5fqjjqaejt***
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
     * @example b-0caoeogs88y*****
     *
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @example USER_TEMPLATE
     *
     * @var string
     */
    public $templateType;

    /**
     * @example bcc-dweha*****
     *
     * @var string
     */
    public $timerGroupId;

    /**
     * @var string
     */
    public $userDuration;
    protected $_name = [
        'autoPay' => 'AutoPay',
        'autoRenew' => 'AutoRenew',
        'chargeType' => 'ChargeType',
        'dataDiskList' => 'DataDiskList',
        'defaultLanguage' => 'DefaultLanguage',
        'description' => 'Description',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'imageId' => 'ImageId',
        'imageType' => 'ImageType',
        'period' => 'Period',
        'periodUnit' => 'PeriodUnit',
        'policyGroupId' => 'PolicyGroupId',
        'postPaidAfterUsedUp' => 'PostPaidAfterUsedUp',
        'productType' => 'ProductType',
        'regionConfigList' => 'RegionConfigList',
        'requestId' => 'RequestId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceTagList' => 'ResourceTagList',
        'siteConfigList' => 'SiteConfigList',
        'systemDiskPerformanceLevel' => 'SystemDiskPerformanceLevel',
        'systemDiskSize' => 'SystemDiskSize',
        'templateId' => 'TemplateId',
        'templateName' => 'TemplateName',
        'templateType' => 'TemplateType',
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
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageType) {
            $res['ImageType'] = $this->imageType;
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
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
     * @return data
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
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageType'])) {
            $model->imageType = $map['ImageType'];
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
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
