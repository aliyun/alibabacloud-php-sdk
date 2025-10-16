<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListImageRequest\tagList;

class ListImageRequest extends Model
{
    /**
     * @var string[]
     */
    public $bizRegionIdList;

    /**
     * @var int
     */
    public $bizType;

    /**
     * @var int[]
     */
    public $bizTypeList;

    /**
     * @var string[]
     */
    public $featureList;

    /**
     * @var string
     */
    public $fotaVersion;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var string
     */
    public $imageType;

    /**
     * @var string
     */
    public $languageType;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var string
     */
    public $packageType;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $platformName;

    /**
     * @var string[]
     */
    public $platformNameList;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string[]
     */
    public $productTypeList;

    /**
     * @var string
     */
    public $protocolType;

    /**
     * @var string
     */
    public $resourceInstanceType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tagList[]
     */
    public $tagList;
    protected $_name = [
        'bizRegionIdList' => 'BizRegionIdList',
        'bizType' => 'BizType',
        'bizTypeList' => 'BizTypeList',
        'featureList' => 'FeatureList',
        'fotaVersion' => 'FotaVersion',
        'imageId' => 'ImageId',
        'imageName' => 'ImageName',
        'imageType' => 'ImageType',
        'languageType' => 'LanguageType',
        'osType' => 'OsType',
        'packageType' => 'PackageType',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'platformName' => 'PlatformName',
        'platformNameList' => 'PlatformNameList',
        'productType' => 'ProductType',
        'productTypeList' => 'ProductTypeList',
        'protocolType' => 'ProtocolType',
        'resourceInstanceType' => 'ResourceInstanceType',
        'status' => 'Status',
        'tagList' => 'TagList',
    ];

    public function validate()
    {
        if (\is_array($this->bizRegionIdList)) {
            Model::validateArray($this->bizRegionIdList);
        }
        if (\is_array($this->bizTypeList)) {
            Model::validateArray($this->bizTypeList);
        }
        if (\is_array($this->featureList)) {
            Model::validateArray($this->featureList);
        }
        if (\is_array($this->platformNameList)) {
            Model::validateArray($this->platformNameList);
        }
        if (\is_array($this->productTypeList)) {
            Model::validateArray($this->productTypeList);
        }
        if (\is_array($this->tagList)) {
            Model::validateArray($this->tagList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizRegionIdList) {
            if (\is_array($this->bizRegionIdList)) {
                $res['BizRegionIdList'] = [];
                $n1 = 0;
                foreach ($this->bizRegionIdList as $item1) {
                    $res['BizRegionIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->bizTypeList) {
            if (\is_array($this->bizTypeList)) {
                $res['BizTypeList'] = [];
                $n1 = 0;
                foreach ($this->bizTypeList as $item1) {
                    $res['BizTypeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->featureList) {
            if (\is_array($this->featureList)) {
                $res['FeatureList'] = [];
                $n1 = 0;
                foreach ($this->featureList as $item1) {
                    $res['FeatureList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->fotaVersion) {
            $res['FotaVersion'] = $this->fotaVersion;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }

        if (null !== $this->imageType) {
            $res['ImageType'] = $this->imageType;
        }

        if (null !== $this->languageType) {
            $res['LanguageType'] = $this->languageType;
        }

        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }

        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->platformName) {
            $res['PlatformName'] = $this->platformName;
        }

        if (null !== $this->platformNameList) {
            if (\is_array($this->platformNameList)) {
                $res['PlatformNameList'] = [];
                $n1 = 0;
                foreach ($this->platformNameList as $item1) {
                    $res['PlatformNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->productTypeList) {
            if (\is_array($this->productTypeList)) {
                $res['ProductTypeList'] = [];
                $n1 = 0;
                foreach ($this->productTypeList as $item1) {
                    $res['ProductTypeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }

        if (null !== $this->resourceInstanceType) {
            $res['ResourceInstanceType'] = $this->resourceInstanceType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tagList) {
            if (\is_array($this->tagList)) {
                $res['TagList'] = [];
                $n1 = 0;
                foreach ($this->tagList as $item1) {
                    $res['TagList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['BizRegionIdList'])) {
            if (!empty($map['BizRegionIdList'])) {
                $model->bizRegionIdList = [];
                $n1 = 0;
                foreach ($map['BizRegionIdList'] as $item1) {
                    $model->bizRegionIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['BizTypeList'])) {
            if (!empty($map['BizTypeList'])) {
                $model->bizTypeList = [];
                $n1 = 0;
                foreach ($map['BizTypeList'] as $item1) {
                    $model->bizTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['FeatureList'])) {
            if (!empty($map['FeatureList'])) {
                $model->featureList = [];
                $n1 = 0;
                foreach ($map['FeatureList'] as $item1) {
                    $model->featureList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['FotaVersion'])) {
            $model->fotaVersion = $map['FotaVersion'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }

        if (isset($map['ImageType'])) {
            $model->imageType = $map['ImageType'];
        }

        if (isset($map['LanguageType'])) {
            $model->languageType = $map['LanguageType'];
        }

        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }

        if (isset($map['PackageType'])) {
            $model->packageType = $map['PackageType'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PlatformName'])) {
            $model->platformName = $map['PlatformName'];
        }

        if (isset($map['PlatformNameList'])) {
            if (!empty($map['PlatformNameList'])) {
                $model->platformNameList = [];
                $n1 = 0;
                foreach ($map['PlatformNameList'] as $item1) {
                    $model->platformNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['ProductTypeList'])) {
            if (!empty($map['ProductTypeList'])) {
                $model->productTypeList = [];
                $n1 = 0;
                foreach ($map['ProductTypeList'] as $item1) {
                    $model->productTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }

        if (isset($map['ResourceInstanceType'])) {
            $model->resourceInstanceType = $map['ResourceInstanceType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TagList'])) {
            if (!empty($map['TagList'])) {
                $model->tagList = [];
                $n1 = 0;
                foreach ($map['TagList'] as $item1) {
                    $model->tagList[$n1] = tagList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
