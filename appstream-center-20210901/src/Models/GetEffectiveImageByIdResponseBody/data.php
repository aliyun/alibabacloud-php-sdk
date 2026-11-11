<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetEffectiveImageByIdResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetEffectiveImageByIdResponseBody\data\imageInfoRegionModelList;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetEffectiveImageByIdResponseBody\data\tagList;

class data extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var int
     */
    public $bizType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $document;

    /**
     * @var string
     */
    public $environmentId;

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
    public $imageIconUrl;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var imageInfoRegionModelList[]
     */
    public $imageInfoRegionModelList;

    /**
     * @var string
     */
    public $imageName;

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
    public $latestVersionId;

    /**
     * @var int
     */
    public $onlineVersionDataDiskSize;

    /**
     * @var string
     */
    public $onlineVersionId;

    /**
     * @var int
     */
    public $onlineVersionSystemDiskSize;

    /**
     * @var bool
     */
    public $onlineVersionVolumeEncryptionEnabled;

    /**
     * @var string
     */
    public $onlineVersionVolumeEncryptionKey;

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
    public $status;

    /**
     * @var tagList[]
     */
    public $tagList;

    /**
     * @var string
     */
    public $versionId;
    protected $_name = [
        'aliUid' => 'AliUid',
        'bizType' => 'BizType',
        'description' => 'Description',
        'document' => 'Document',
        'environmentId' => 'EnvironmentId',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'imageIconUrl' => 'ImageIconUrl',
        'imageId' => 'ImageId',
        'imageInfoRegionModelList' => 'ImageInfoRegionModelList',
        'imageName' => 'ImageName',
        'imageRegionList' => 'ImageRegionList',
        'imageType' => 'ImageType',
        'latestVersionId' => 'LatestVersionId',
        'onlineVersionDataDiskSize' => 'OnlineVersionDataDiskSize',
        'onlineVersionId' => 'OnlineVersionId',
        'onlineVersionSystemDiskSize' => 'OnlineVersionSystemDiskSize',
        'onlineVersionVolumeEncryptionEnabled' => 'OnlineVersionVolumeEncryptionEnabled',
        'onlineVersionVolumeEncryptionKey' => 'OnlineVersionVolumeEncryptionKey',
        'osType' => 'OsType',
        'packageType' => 'PackageType',
        'parentImageId' => 'ParentImageId',
        'productType' => 'ProductType',
        'protocolType' => 'ProtocolType',
        'rating' => 'Rating',
        'status' => 'Status',
        'tagList' => 'TagList',
        'versionId' => 'VersionId',
    ];

    public function validate()
    {
        if (\is_array($this->imageInfoRegionModelList)) {
            Model::validateArray($this->imageInfoRegionModelList);
        }
        if (\is_array($this->imageRegionList)) {
            Model::validateArray($this->imageRegionList);
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

        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->document) {
            $res['Document'] = $this->document;
        }

        if (null !== $this->environmentId) {
            $res['EnvironmentId'] = $this->environmentId;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->imageIconUrl) {
            $res['ImageIconUrl'] = $this->imageIconUrl;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->imageInfoRegionModelList) {
            if (\is_array($this->imageInfoRegionModelList)) {
                $res['ImageInfoRegionModelList'] = [];
                $n1 = 0;
                foreach ($this->imageInfoRegionModelList as $item1) {
                    $res['ImageInfoRegionModelList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
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

        if (null !== $this->latestVersionId) {
            $res['LatestVersionId'] = $this->latestVersionId;
        }

        if (null !== $this->onlineVersionDataDiskSize) {
            $res['OnlineVersionDataDiskSize'] = $this->onlineVersionDataDiskSize;
        }

        if (null !== $this->onlineVersionId) {
            $res['OnlineVersionId'] = $this->onlineVersionId;
        }

        if (null !== $this->onlineVersionSystemDiskSize) {
            $res['OnlineVersionSystemDiskSize'] = $this->onlineVersionSystemDiskSize;
        }

        if (null !== $this->onlineVersionVolumeEncryptionEnabled) {
            $res['OnlineVersionVolumeEncryptionEnabled'] = $this->onlineVersionVolumeEncryptionEnabled;
        }

        if (null !== $this->onlineVersionVolumeEncryptionKey) {
            $res['OnlineVersionVolumeEncryptionKey'] = $this->onlineVersionVolumeEncryptionKey;
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

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }

        if (null !== $this->rating) {
            $res['Rating'] = $this->rating;
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
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Document'])) {
            $model->document = $map['Document'];
        }

        if (isset($map['EnvironmentId'])) {
            $model->environmentId = $map['EnvironmentId'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['ImageIconUrl'])) {
            $model->imageIconUrl = $map['ImageIconUrl'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['ImageInfoRegionModelList'])) {
            if (!empty($map['ImageInfoRegionModelList'])) {
                $model->imageInfoRegionModelList = [];
                $n1 = 0;
                foreach ($map['ImageInfoRegionModelList'] as $item1) {
                    $model->imageInfoRegionModelList[$n1] = imageInfoRegionModelList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
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

        if (isset($map['LatestVersionId'])) {
            $model->latestVersionId = $map['LatestVersionId'];
        }

        if (isset($map['OnlineVersionDataDiskSize'])) {
            $model->onlineVersionDataDiskSize = $map['OnlineVersionDataDiskSize'];
        }

        if (isset($map['OnlineVersionId'])) {
            $model->onlineVersionId = $map['OnlineVersionId'];
        }

        if (isset($map['OnlineVersionSystemDiskSize'])) {
            $model->onlineVersionSystemDiskSize = $map['OnlineVersionSystemDiskSize'];
        }

        if (isset($map['OnlineVersionVolumeEncryptionEnabled'])) {
            $model->onlineVersionVolumeEncryptionEnabled = $map['OnlineVersionVolumeEncryptionEnabled'];
        }

        if (isset($map['OnlineVersionVolumeEncryptionKey'])) {
            $model->onlineVersionVolumeEncryptionKey = $map['OnlineVersionVolumeEncryptionKey'];
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

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }

        if (isset($map['Rating'])) {
            $model->rating = $map['Rating'];
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

        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
