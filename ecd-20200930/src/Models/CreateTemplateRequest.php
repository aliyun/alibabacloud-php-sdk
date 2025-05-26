<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateTemplateRequest\dataDiskList;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateTemplateRequest\regionConfigList;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateTemplateRequest\resourceTagList;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateTemplateRequest\siteConfigList;

class CreateTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var dataDiskList[]
     */
    public $dataDiskList;

    /**
     * @var string
     */
    public $defaultLanguage;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $policyGroupId;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var regionConfigList[]
     */
    public $regionConfigList;

    /**
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
     * @var string
     */
    public $systemDiskPerformanceLevel;

    /**
     * @var int
     */
    public $systemDiskSize;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $timerGroupId;
    protected $_name = [
        'bizType' => 'BizType',
        'dataDiskList' => 'DataDiskList',
        'defaultLanguage' => 'DefaultLanguage',
        'description' => 'Description',
        'imageId' => 'ImageId',
        'policyGroupId' => 'PolicyGroupId',
        'productType' => 'ProductType',
        'regionConfigList' => 'RegionConfigList',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceTagList' => 'ResourceTagList',
        'siteConfigList' => 'SiteConfigList',
        'systemDiskPerformanceLevel' => 'SystemDiskPerformanceLevel',
        'systemDiskSize' => 'SystemDiskSize',
        'templateName' => 'TemplateName',
        'timerGroupId' => 'TimerGroupId',
    ];

    public function validate()
    {
        if (\is_array($this->dataDiskList)) {
            Model::validateArray($this->dataDiskList);
        }
        if (\is_array($this->regionConfigList)) {
            Model::validateArray($this->regionConfigList);
        }
        if (\is_array($this->resourceTagList)) {
            Model::validateArray($this->resourceTagList);
        }
        if (\is_array($this->siteConfigList)) {
            Model::validateArray($this->siteConfigList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->dataDiskList) {
            if (\is_array($this->dataDiskList)) {
                $res['DataDiskList'] = [];
                $n1 = 0;
                foreach ($this->dataDiskList as $item1) {
                    $res['DataDiskList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->regionConfigList) {
            if (\is_array($this->regionConfigList)) {
                $res['RegionConfigList'] = [];
                $n1 = 0;
                foreach ($this->regionConfigList as $item1) {
                    $res['RegionConfigList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->resourceTagList) {
            if (\is_array($this->resourceTagList)) {
                $res['ResourceTagList'] = [];
                $n1 = 0;
                foreach ($this->resourceTagList as $item1) {
                    $res['ResourceTagList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->siteConfigList) {
            if (\is_array($this->siteConfigList)) {
                $res['SiteConfigList'] = [];
                $n1 = 0;
                foreach ($this->siteConfigList as $item1) {
                    $res['SiteConfigList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['DataDiskList'])) {
            if (!empty($map['DataDiskList'])) {
                $model->dataDiskList = [];
                $n1 = 0;
                foreach ($map['DataDiskList'] as $item1) {
                    $model->dataDiskList[$n1++] = dataDiskList::fromMap($item1);
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

        if (isset($map['PolicyGroupId'])) {
            $model->policyGroupId = $map['PolicyGroupId'];
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['RegionConfigList'])) {
            if (!empty($map['RegionConfigList'])) {
                $model->regionConfigList = [];
                $n1 = 0;
                foreach ($map['RegionConfigList'] as $item1) {
                    $model->regionConfigList[$n1++] = regionConfigList::fromMap($item1);
                }
            }
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ResourceTagList'])) {
            if (!empty($map['ResourceTagList'])) {
                $model->resourceTagList = [];
                $n1 = 0;
                foreach ($map['ResourceTagList'] as $item1) {
                    $model->resourceTagList[$n1++] = resourceTagList::fromMap($item1);
                }
            }
        }

        if (isset($map['SiteConfigList'])) {
            if (!empty($map['SiteConfigList'])) {
                $model->siteConfigList = [];
                $n1 = 0;
                foreach ($map['SiteConfigList'] as $item1) {
                    $model->siteConfigList[$n1++] = siteConfigList::fromMap($item1);
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

        return $model;
    }
}
