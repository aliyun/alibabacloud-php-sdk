<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\BuilderImageByParentShrinkRequest\resourceList;

class BuilderImageByParentShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $bizType;

    /**
     * @var int
     */
    public $dataDiskSize;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $distro;

    /**
     * @var string[]
     */
    public $driverIdList;

    /**
     * @var string
     */
    public $imageCreateMode;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $nodeInstanceType;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var string
     */
    public $packageType;

    /**
     * @var string
     */
    public $parentImageId;

    /**
     * @var string
     */
    public $performanceType;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $propertyMapShrink;

    /**
     * @var resourceList[]
     */
    public $resourceList;

    /**
     * @var string
     */
    public $runMode;

    /**
     * @var string
     */
    public $sourceRegion;

    /**
     * @var int
     */
    public $systemDiskSize;

    /**
     * @var string[]
     */
    public $vSwitchIdList;

    /**
     * @var string
     */
    public $versionName;
    protected $_name = [
        'bizType' => 'BizType',
        'dataDiskSize' => 'DataDiskSize',
        'description' => 'Description',
        'distro' => 'Distro',
        'driverIdList' => 'DriverIdList',
        'imageCreateMode' => 'ImageCreateMode',
        'imageName' => 'ImageName',
        'language' => 'Language',
        'nodeInstanceType' => 'NodeInstanceType',
        'officeSiteId' => 'OfficeSiteId',
        'packageType' => 'PackageType',
        'parentImageId' => 'ParentImageId',
        'performanceType' => 'PerformanceType',
        'productType' => 'ProductType',
        'propertyMapShrink' => 'PropertyMap',
        'resourceList' => 'ResourceList',
        'runMode' => 'RunMode',
        'sourceRegion' => 'SourceRegion',
        'systemDiskSize' => 'SystemDiskSize',
        'vSwitchIdList' => 'VSwitchIdList',
        'versionName' => 'VersionName',
    ];

    public function validate()
    {
        if (\is_array($this->driverIdList)) {
            Model::validateArray($this->driverIdList);
        }
        if (\is_array($this->resourceList)) {
            Model::validateArray($this->resourceList);
        }
        if (\is_array($this->vSwitchIdList)) {
            Model::validateArray($this->vSwitchIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->dataDiskSize) {
            $res['DataDiskSize'] = $this->dataDiskSize;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->distro) {
            $res['Distro'] = $this->distro;
        }

        if (null !== $this->driverIdList) {
            if (\is_array($this->driverIdList)) {
                $res['DriverIdList'] = [];
                $n1 = 0;
                foreach ($this->driverIdList as $item1) {
                    $res['DriverIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->imageCreateMode) {
            $res['ImageCreateMode'] = $this->imageCreateMode;
        }

        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->nodeInstanceType) {
            $res['NodeInstanceType'] = $this->nodeInstanceType;
        }

        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }

        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
        }

        if (null !== $this->parentImageId) {
            $res['ParentImageId'] = $this->parentImageId;
        }

        if (null !== $this->performanceType) {
            $res['PerformanceType'] = $this->performanceType;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->propertyMapShrink) {
            $res['PropertyMap'] = $this->propertyMapShrink;
        }

        if (null !== $this->resourceList) {
            if (\is_array($this->resourceList)) {
                $res['ResourceList'] = [];
                $n1 = 0;
                foreach ($this->resourceList as $item1) {
                    $res['ResourceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->runMode) {
            $res['RunMode'] = $this->runMode;
        }

        if (null !== $this->sourceRegion) {
            $res['SourceRegion'] = $this->sourceRegion;
        }

        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }

        if (null !== $this->vSwitchIdList) {
            if (\is_array($this->vSwitchIdList)) {
                $res['VSwitchIdList'] = [];
                $n1 = 0;
                foreach ($this->vSwitchIdList as $item1) {
                    $res['VSwitchIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->versionName) {
            $res['VersionName'] = $this->versionName;
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

        if (isset($map['DataDiskSize'])) {
            $model->dataDiskSize = $map['DataDiskSize'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Distro'])) {
            $model->distro = $map['Distro'];
        }

        if (isset($map['DriverIdList'])) {
            if (!empty($map['DriverIdList'])) {
                $model->driverIdList = [];
                $n1 = 0;
                foreach ($map['DriverIdList'] as $item1) {
                    $model->driverIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ImageCreateMode'])) {
            $model->imageCreateMode = $map['ImageCreateMode'];
        }

        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['NodeInstanceType'])) {
            $model->nodeInstanceType = $map['NodeInstanceType'];
        }

        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }

        if (isset($map['PackageType'])) {
            $model->packageType = $map['PackageType'];
        }

        if (isset($map['ParentImageId'])) {
            $model->parentImageId = $map['ParentImageId'];
        }

        if (isset($map['PerformanceType'])) {
            $model->performanceType = $map['PerformanceType'];
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['PropertyMap'])) {
            $model->propertyMapShrink = $map['PropertyMap'];
        }

        if (isset($map['ResourceList'])) {
            if (!empty($map['ResourceList'])) {
                $model->resourceList = [];
                $n1 = 0;
                foreach ($map['ResourceList'] as $item1) {
                    $model->resourceList[$n1] = resourceList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RunMode'])) {
            $model->runMode = $map['RunMode'];
        }

        if (isset($map['SourceRegion'])) {
            $model->sourceRegion = $map['SourceRegion'];
        }

        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }

        if (isset($map['VSwitchIdList'])) {
            if (!empty($map['VSwitchIdList'])) {
                $model->vSwitchIdList = [];
                $n1 = 0;
                foreach ($map['VSwitchIdList'] as $item1) {
                    $model->vSwitchIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }

        return $model;
    }
}
