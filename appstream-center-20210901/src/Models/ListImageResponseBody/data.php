<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListImageResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListImageResponseBody\data\appList;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListImageResponseBody\data\imageRegionDistributeList;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListImageResponseBody\data\snapshotList;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListImageResponseBody\data\tagList;

class data extends Model
{
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
     * @var bool
     */
    public $compatibleMode;

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
    public $driverList;

    /**
     * @var string
     */
    public $environmentId;

    /**
     * @var string[]
     */
    public $featureList;

    /**
     * @var string
     */
    public $fotaChannel;

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
     * @var string
     */
    public $imageIconUrl;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var imageRegionDistributeList[]
     */
    public $imageRegionDistributeList;

    /**
     * @var string[]
     */
    public $imageRegionList;

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
     * @var string
     */
    public $protocolType;

    /**
     * @var int
     */
    public $rating;

    /**
     * @var string
     */
    public $resourceInstanceCategory;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var string
     */
    public $sessionType;

    /**
     * @var snapshotList[]
     */
    public $snapshotList;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $supportedLanguageList;

    /**
     * @var int
     */
    public $systemDiskSize;

    /**
     * @var tagList[]
     */
    public $tagList;

    /**
     * @var string
     */
    public $versionId;

    /**
     * @var string
     */
    public $versionName;

    /**
     * @var bool
     */
    public $volumeEncryptionEnabled;

    /**
     * @var string
     */
    public $volumeEncryptionKey;
    protected $_name = [
        'aliUid' => 'AliUid',
        'appList' => 'AppList',
        'baseImageId' => 'BaseImageId',
        'baseImageVersion' => 'BaseImageVersion',
        'bizType' => 'BizType',
        'compatibleMode' => 'CompatibleMode',
        'dataDiskSize' => 'DataDiskSize',
        'description' => 'Description',
        'distro' => 'Distro',
        'driverList' => 'DriverList',
        'environmentId' => 'EnvironmentId',
        'featureList' => 'FeatureList',
        'fotaChannel' => 'FotaChannel',
        'fotaVersion' => 'FotaVersion',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'imageCreateMode' => 'ImageCreateMode',
        'imageIconUrl' => 'ImageIconUrl',
        'imageId' => 'ImageId',
        'imageName' => 'ImageName',
        'imageRegionDistributeList' => 'ImageRegionDistributeList',
        'imageRegionList' => 'ImageRegionList',
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
        'protocolType' => 'ProtocolType',
        'rating' => 'Rating',
        'resourceInstanceCategory' => 'ResourceInstanceCategory',
        'scene' => 'Scene',
        'sessionType' => 'SessionType',
        'snapshotList' => 'SnapshotList',
        'status' => 'Status',
        'supportedLanguageList' => 'SupportedLanguageList',
        'systemDiskSize' => 'SystemDiskSize',
        'tagList' => 'TagList',
        'versionId' => 'VersionId',
        'versionName' => 'VersionName',
        'volumeEncryptionEnabled' => 'VolumeEncryptionEnabled',
        'volumeEncryptionKey' => 'VolumeEncryptionKey',
    ];

    public function validate()
    {
        if (\is_array($this->appList)) {
            Model::validateArray($this->appList);
        }
        if (\is_array($this->driverList)) {
            Model::validateArray($this->driverList);
        }
        if (\is_array($this->featureList)) {
            Model::validateArray($this->featureList);
        }
        if (\is_array($this->imageRegionDistributeList)) {
            Model::validateArray($this->imageRegionDistributeList);
        }
        if (\is_array($this->imageRegionList)) {
            Model::validateArray($this->imageRegionList);
        }
        if (\is_array($this->snapshotList)) {
            Model::validateArray($this->snapshotList);
        }
        if (\is_array($this->supportedLanguageList)) {
            Model::validateArray($this->supportedLanguageList);
        }
        if (\is_array($this->tagList)) {
            Model::validateArray($this->tagList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->compatibleMode) {
            $res['CompatibleMode'] = $this->compatibleMode;
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

        if (null !== $this->driverList) {
            if (\is_array($this->driverList)) {
                $res['DriverList'] = [];
                $n1 = 0;
                foreach ($this->driverList as $item1) {
                    $res['DriverList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->environmentId) {
            $res['EnvironmentId'] = $this->environmentId;
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

        if (null !== $this->fotaChannel) {
            $res['FotaChannel'] = $this->fotaChannel;
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

        if (null !== $this->imageIconUrl) {
            $res['ImageIconUrl'] = $this->imageIconUrl;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }

        if (null !== $this->imageRegionDistributeList) {
            if (\is_array($this->imageRegionDistributeList)) {
                $res['ImageRegionDistributeList'] = [];
                $n1 = 0;
                foreach ($this->imageRegionDistributeList as $item1) {
                    $res['ImageRegionDistributeList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->imageRegionList) {
            if (\is_array($this->imageRegionList)) {
                $res['ImageRegionList'] = [];
                $n1 = 0;
                foreach ($this->imageRegionList as $item1) {
                    $res['ImageRegionList'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }

        if (null !== $this->rating) {
            $res['Rating'] = $this->rating;
        }

        if (null !== $this->resourceInstanceCategory) {
            $res['ResourceInstanceCategory'] = $this->resourceInstanceCategory;
        }

        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }

        if (null !== $this->sessionType) {
            $res['SessionType'] = $this->sessionType;
        }

        if (null !== $this->snapshotList) {
            if (\is_array($this->snapshotList)) {
                $res['SnapshotList'] = [];
                $n1 = 0;
                foreach ($this->snapshotList as $item1) {
                    $res['SnapshotList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->supportedLanguageList) {
            if (\is_array($this->supportedLanguageList)) {
                $res['SupportedLanguageList'] = [];
                $n1 = 0;
                foreach ($this->supportedLanguageList as $item1) {
                    $res['SupportedLanguageList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
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

        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }

        if (null !== $this->versionName) {
            $res['VersionName'] = $this->versionName;
        }

        if (null !== $this->volumeEncryptionEnabled) {
            $res['VolumeEncryptionEnabled'] = $this->volumeEncryptionEnabled;
        }

        if (null !== $this->volumeEncryptionKey) {
            $res['VolumeEncryptionKey'] = $this->volumeEncryptionKey;
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

        if (isset($map['CompatibleMode'])) {
            $model->compatibleMode = $map['CompatibleMode'];
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

        if (isset($map['DriverList'])) {
            if (!empty($map['DriverList'])) {
                $model->driverList = [];
                $n1 = 0;
                foreach ($map['DriverList'] as $item1) {
                    $model->driverList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EnvironmentId'])) {
            $model->environmentId = $map['EnvironmentId'];
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

        if (isset($map['FotaChannel'])) {
            $model->fotaChannel = $map['FotaChannel'];
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

        if (isset($map['ImageIconUrl'])) {
            $model->imageIconUrl = $map['ImageIconUrl'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }

        if (isset($map['ImageRegionDistributeList'])) {
            if (!empty($map['ImageRegionDistributeList'])) {
                $model->imageRegionDistributeList = [];
                $n1 = 0;
                foreach ($map['ImageRegionDistributeList'] as $item1) {
                    $model->imageRegionDistributeList[$n1] = imageRegionDistributeList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ImageRegionList'])) {
            if (!empty($map['ImageRegionList'])) {
                $model->imageRegionList = [];
                $n1 = 0;
                foreach ($map['ImageRegionList'] as $item1) {
                    $model->imageRegionList[$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }

        if (isset($map['Rating'])) {
            $model->rating = $map['Rating'];
        }

        if (isset($map['ResourceInstanceCategory'])) {
            $model->resourceInstanceCategory = $map['ResourceInstanceCategory'];
        }

        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }

        if (isset($map['SessionType'])) {
            $model->sessionType = $map['SessionType'];
        }

        if (isset($map['SnapshotList'])) {
            if (!empty($map['SnapshotList'])) {
                $model->snapshotList = [];
                $n1 = 0;
                foreach ($map['SnapshotList'] as $item1) {
                    $model->snapshotList[$n1] = snapshotList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SupportedLanguageList'])) {
            if (!empty($map['SupportedLanguageList'])) {
                $model->supportedLanguageList = [];
                $n1 = 0;
                foreach ($map['SupportedLanguageList'] as $item1) {
                    $model->supportedLanguageList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
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

        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }

        if (isset($map['VolumeEncryptionEnabled'])) {
            $model->volumeEncryptionEnabled = $map['VolumeEncryptionEnabled'];
        }

        if (isset($map['VolumeEncryptionKey'])) {
            $model->volumeEncryptionKey = $map['VolumeEncryptionKey'];
        }

        return $model;
    }
}
