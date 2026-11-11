<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetEffectiveImageByIdResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetEffectiveImageByIdResponseBody\data\imageInfoRegionModelList\adaptorInfoBOList;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetEffectiveImageByIdResponseBody\data\imageInfoRegionModelList\appList;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetEffectiveImageByIdResponseBody\data\imageInfoRegionModelList\imageExtendInfoModel;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetEffectiveImageByIdResponseBody\data\imageInfoRegionModelList\imageRegionDistribute;

class imageInfoRegionModelList extends Model
{
    /**
     * @var adaptorInfoBOList[]
     */
    public $adaptorInfoBOList;

    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var appList[]
     */
    public $appList;

    /**
     * @var string
     */
    public $baseImageId;

    /**
     * @var string
     */
    public $baseImageVersion;

    /**
     * @var int
     */
    public $bizType;

    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var string
     */
    public $description;

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
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $imageCreateMode;

    /**
     * @var imageExtendInfoModel
     */
    public $imageExtendInfoModel;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var imageRegionDistribute
     */
    public $imageRegionDistribute;

    /**
     * @var string
     */
    public $imageSource;

    /**
     * @var string
     */
    public $imageType;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $latestVersionId;

    /**
     * @var bool
     */
    public $onlineVersion;

    /**
     * @var string
     */
    public $onlineVersionId;

    /**
     * @var string
     */
    public $osType;

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
    public $parentImageVersion;

    /**
     * @var int
     */
    public $platform;

    /**
     * @var string
     */
    public $platformName;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string[]
     */
    public $propertyMap;

    /**
     * @var string
     */
    public $protocolType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $versionId;
    protected $_name = [
        'adaptorInfoBOList' => 'AdaptorInfoBOList',
        'aliUid' => 'AliUid',
        'appList' => 'AppList',
        'baseImageId' => 'BaseImageId',
        'baseImageVersion' => 'BaseImageVersion',
        'bizType' => 'BizType',
        'bucketName' => 'BucketName',
        'description' => 'Description',
        'featureList' => 'FeatureList',
        'fotaVersion' => 'FotaVersion',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'imageCreateMode' => 'ImageCreateMode',
        'imageExtendInfoModel' => 'ImageExtendInfoModel',
        'imageId' => 'ImageId',
        'imageName' => 'ImageName',
        'imageRegionDistribute' => 'ImageRegionDistribute',
        'imageSource' => 'ImageSource',
        'imageType' => 'ImageType',
        'language' => 'Language',
        'latestVersionId' => 'LatestVersionId',
        'onlineVersion' => 'OnlineVersion',
        'onlineVersionId' => 'OnlineVersionId',
        'osType' => 'OsType',
        'packageType' => 'PackageType',
        'parentImageId' => 'ParentImageId',
        'parentImageVersion' => 'ParentImageVersion',
        'platform' => 'Platform',
        'platformName' => 'PlatformName',
        'productType' => 'ProductType',
        'propertyMap' => 'PropertyMap',
        'protocolType' => 'ProtocolType',
        'regionId' => 'RegionId',
        'status' => 'Status',
        'versionId' => 'VersionId',
    ];

    public function validate()
    {
        if (\is_array($this->adaptorInfoBOList)) {
            Model::validateArray($this->adaptorInfoBOList);
        }
        if (\is_array($this->appList)) {
            Model::validateArray($this->appList);
        }
        if (\is_array($this->featureList)) {
            Model::validateArray($this->featureList);
        }
        if (null !== $this->imageExtendInfoModel) {
            $this->imageExtendInfoModel->validate();
        }
        if (null !== $this->imageRegionDistribute) {
            $this->imageRegionDistribute->validate();
        }
        if (\is_array($this->propertyMap)) {
            Model::validateArray($this->propertyMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adaptorInfoBOList) {
            if (\is_array($this->adaptorInfoBOList)) {
                $res['AdaptorInfoBOList'] = [];
                $n1 = 0;
                foreach ($this->adaptorInfoBOList as $item1) {
                    $res['AdaptorInfoBOList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->appList) {
            if (\is_array($this->appList)) {
                $res['AppList'] = [];
                $n1 = 0;
                foreach ($this->appList as $item1) {
                    $res['AppList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->baseImageId) {
            $res['BaseImageId'] = $this->baseImageId;
        }

        if (null !== $this->baseImageVersion) {
            $res['BaseImageVersion'] = $this->baseImageVersion;
        }

        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
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

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->imageCreateMode) {
            $res['ImageCreateMode'] = $this->imageCreateMode;
        }

        if (null !== $this->imageExtendInfoModel) {
            $res['ImageExtendInfoModel'] = null !== $this->imageExtendInfoModel ? $this->imageExtendInfoModel->toArray($noStream) : $this->imageExtendInfoModel;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }

        if (null !== $this->imageRegionDistribute) {
            $res['ImageRegionDistribute'] = null !== $this->imageRegionDistribute ? $this->imageRegionDistribute->toArray($noStream) : $this->imageRegionDistribute;
        }

        if (null !== $this->imageSource) {
            $res['ImageSource'] = $this->imageSource;
        }

        if (null !== $this->imageType) {
            $res['ImageType'] = $this->imageType;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->latestVersionId) {
            $res['LatestVersionId'] = $this->latestVersionId;
        }

        if (null !== $this->onlineVersion) {
            $res['OnlineVersion'] = $this->onlineVersion;
        }

        if (null !== $this->onlineVersionId) {
            $res['OnlineVersionId'] = $this->onlineVersionId;
        }

        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }

        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
        }

        if (null !== $this->parentImageId) {
            $res['ParentImageId'] = $this->parentImageId;
        }

        if (null !== $this->parentImageVersion) {
            $res['ParentImageVersion'] = $this->parentImageVersion;
        }

        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        if (null !== $this->platformName) {
            $res['PlatformName'] = $this->platformName;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->propertyMap) {
            if (\is_array($this->propertyMap)) {
                $res['PropertyMap'] = [];
                foreach ($this->propertyMap as $key1 => $value1) {
                    $res['PropertyMap'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
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
        if (isset($map['AdaptorInfoBOList'])) {
            if (!empty($map['AdaptorInfoBOList'])) {
                $model->adaptorInfoBOList = [];
                $n1 = 0;
                foreach ($map['AdaptorInfoBOList'] as $item1) {
                    $model->adaptorInfoBOList[$n1] = adaptorInfoBOList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        if (isset($map['AppList'])) {
            if (!empty($map['AppList'])) {
                $model->appList = [];
                $n1 = 0;
                foreach ($map['AppList'] as $item1) {
                    $model->appList[$n1] = appList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['BaseImageId'])) {
            $model->baseImageId = $map['BaseImageId'];
        }

        if (isset($map['BaseImageVersion'])) {
            $model->baseImageVersion = $map['BaseImageVersion'];
        }

        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['ImageCreateMode'])) {
            $model->imageCreateMode = $map['ImageCreateMode'];
        }

        if (isset($map['ImageExtendInfoModel'])) {
            $model->imageExtendInfoModel = imageExtendInfoModel::fromMap($map['ImageExtendInfoModel']);
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }

        if (isset($map['ImageRegionDistribute'])) {
            $model->imageRegionDistribute = imageRegionDistribute::fromMap($map['ImageRegionDistribute']);
        }

        if (isset($map['ImageSource'])) {
            $model->imageSource = $map['ImageSource'];
        }

        if (isset($map['ImageType'])) {
            $model->imageType = $map['ImageType'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['LatestVersionId'])) {
            $model->latestVersionId = $map['LatestVersionId'];
        }

        if (isset($map['OnlineVersion'])) {
            $model->onlineVersion = $map['OnlineVersion'];
        }

        if (isset($map['OnlineVersionId'])) {
            $model->onlineVersionId = $map['OnlineVersionId'];
        }

        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }

        if (isset($map['PackageType'])) {
            $model->packageType = $map['PackageType'];
        }

        if (isset($map['ParentImageId'])) {
            $model->parentImageId = $map['ParentImageId'];
        }

        if (isset($map['ParentImageVersion'])) {
            $model->parentImageVersion = $map['ParentImageVersion'];
        }

        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        if (isset($map['PlatformName'])) {
            $model->platformName = $map['PlatformName'];
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['PropertyMap'])) {
            if (!empty($map['PropertyMap'])) {
                $model->propertyMap = [];
                foreach ($map['PropertyMap'] as $key1 => $value1) {
                    $model->propertyMap[$key1] = $value1;
                }
            }
        }

        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
