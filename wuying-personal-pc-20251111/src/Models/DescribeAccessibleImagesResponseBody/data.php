<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\DescribeAccessibleImagesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\DescribeAccessibleImagesResponseBody\data\currentImageCodeInfo;

class data extends Model
{
    /**
     * @var string
     */
    public $activityType;

    /**
     * @var string
     */
    public $authTime;

    /**
     * @var bool
     */
    public $canUpdate;

    /**
     * @var currentImageCodeInfo
     */
    public $currentImageCodeInfo;

    /**
     * @var int
     */
    public $dataDiskSize;

    /**
     * @var string
     */
    public $deployMode;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $dockerImageSize;

    /**
     * @var bool
     */
    public $enableStartUpConfig;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageScope;

    /**
     * @var string
     */
    public $imageSource;

    /**
     * @var string
     */
    public $imageType;

    /**
     * @var bool
     */
    public $isGpu;

    /**
     * @var string
     */
    public $isLinggou;

    /**
     * @var bool
     */
    public $isWorkstation;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $operationSystem;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var string
     */
    public $permission;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $progress;

    /**
     * @var string
     */
    public $receiverType;

    /**
     * @var string[]
     */
    public $shareCodes;

    /**
     * @var string[]
     */
    public $shareCodesIncludeDisable;

    /**
     * @var bool
     */
    public $shared;

    /**
     * @var string
     */
    public $sharedBy;

    /**
     * @var string
     */
    public $sourceDesktopId;

    /**
     * @var string
     */
    public $sourceDesktopType;

    /**
     * @var string
     */
    public $sourceImageId;

    /**
     * @var string
     */
    public $sourceImageName;

    /**
     * @var string[]
     */
    public $startUpFileList;

    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $supportPublish;

    /**
     * @var int
     */
    public $systemDiskSize;

    /**
     * @var string
     */
    public $validationCode;
    protected $_name = [
        'activityType' => 'ActivityType',
        'authTime' => 'AuthTime',
        'canUpdate' => 'CanUpdate',
        'currentImageCodeInfo' => 'CurrentImageCodeInfo',
        'dataDiskSize' => 'DataDiskSize',
        'deployMode' => 'DeployMode',
        'description' => 'Description',
        'dockerImageSize' => 'DockerImageSize',
        'enableStartUpConfig' => 'EnableStartUpConfig',
        'gmtCreated' => 'GmtCreated',
        'imageId' => 'ImageId',
        'imageScope' => 'ImageScope',
        'imageSource' => 'ImageSource',
        'imageType' => 'ImageType',
        'isGpu' => 'IsGpu',
        'isLinggou' => 'IsLinggou',
        'isWorkstation' => 'IsWorkstation',
        'name' => 'Name',
        'operationSystem' => 'OperationSystem',
        'osType' => 'OsType',
        'permission' => 'Permission',
        'platform' => 'Platform',
        'progress' => 'Progress',
        'receiverType' => 'ReceiverType',
        'shareCodes' => 'ShareCodes',
        'shareCodesIncludeDisable' => 'ShareCodesIncludeDisable',
        'shared' => 'Shared',
        'sharedBy' => 'SharedBy',
        'sourceDesktopId' => 'SourceDesktopId',
        'sourceDesktopType' => 'SourceDesktopType',
        'sourceImageId' => 'SourceImageId',
        'sourceImageName' => 'SourceImageName',
        'startUpFileList' => 'StartUpFileList',
        'status' => 'Status',
        'supportPublish' => 'SupportPublish',
        'systemDiskSize' => 'SystemDiskSize',
        'validationCode' => 'ValidationCode',
    ];

    public function validate()
    {
        if (null !== $this->currentImageCodeInfo) {
            $this->currentImageCodeInfo->validate();
        }
        if (\is_array($this->shareCodes)) {
            Model::validateArray($this->shareCodes);
        }
        if (\is_array($this->shareCodesIncludeDisable)) {
            Model::validateArray($this->shareCodesIncludeDisable);
        }
        if (\is_array($this->startUpFileList)) {
            Model::validateArray($this->startUpFileList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activityType) {
            $res['ActivityType'] = $this->activityType;
        }

        if (null !== $this->authTime) {
            $res['AuthTime'] = $this->authTime;
        }

        if (null !== $this->canUpdate) {
            $res['CanUpdate'] = $this->canUpdate;
        }

        if (null !== $this->currentImageCodeInfo) {
            $res['CurrentImageCodeInfo'] = null !== $this->currentImageCodeInfo ? $this->currentImageCodeInfo->toArray($noStream) : $this->currentImageCodeInfo;
        }

        if (null !== $this->dataDiskSize) {
            $res['DataDiskSize'] = $this->dataDiskSize;
        }

        if (null !== $this->deployMode) {
            $res['DeployMode'] = $this->deployMode;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->dockerImageSize) {
            $res['DockerImageSize'] = $this->dockerImageSize;
        }

        if (null !== $this->enableStartUpConfig) {
            $res['EnableStartUpConfig'] = $this->enableStartUpConfig;
        }

        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->imageScope) {
            $res['ImageScope'] = $this->imageScope;
        }

        if (null !== $this->imageSource) {
            $res['ImageSource'] = $this->imageSource;
        }

        if (null !== $this->imageType) {
            $res['ImageType'] = $this->imageType;
        }

        if (null !== $this->isGpu) {
            $res['IsGpu'] = $this->isGpu;
        }

        if (null !== $this->isLinggou) {
            $res['IsLinggou'] = $this->isLinggou;
        }

        if (null !== $this->isWorkstation) {
            $res['IsWorkstation'] = $this->isWorkstation;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->operationSystem) {
            $res['OperationSystem'] = $this->operationSystem;
        }

        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }

        if (null !== $this->permission) {
            $res['Permission'] = $this->permission;
        }

        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }

        if (null !== $this->receiverType) {
            $res['ReceiverType'] = $this->receiverType;
        }

        if (null !== $this->shareCodes) {
            if (\is_array($this->shareCodes)) {
                $res['ShareCodes'] = [];
                $n1 = 0;
                foreach ($this->shareCodes as $item1) {
                    $res['ShareCodes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->shareCodesIncludeDisable) {
            if (\is_array($this->shareCodesIncludeDisable)) {
                $res['ShareCodesIncludeDisable'] = [];
                $n1 = 0;
                foreach ($this->shareCodesIncludeDisable as $item1) {
                    $res['ShareCodesIncludeDisable'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->shared) {
            $res['Shared'] = $this->shared;
        }

        if (null !== $this->sharedBy) {
            $res['SharedBy'] = $this->sharedBy;
        }

        if (null !== $this->sourceDesktopId) {
            $res['SourceDesktopId'] = $this->sourceDesktopId;
        }

        if (null !== $this->sourceDesktopType) {
            $res['SourceDesktopType'] = $this->sourceDesktopType;
        }

        if (null !== $this->sourceImageId) {
            $res['SourceImageId'] = $this->sourceImageId;
        }

        if (null !== $this->sourceImageName) {
            $res['SourceImageName'] = $this->sourceImageName;
        }

        if (null !== $this->startUpFileList) {
            if (\is_array($this->startUpFileList)) {
                $res['StartUpFileList'] = [];
                $n1 = 0;
                foreach ($this->startUpFileList as $item1) {
                    $res['StartUpFileList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->supportPublish) {
            $res['SupportPublish'] = $this->supportPublish;
        }

        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }

        if (null !== $this->validationCode) {
            $res['ValidationCode'] = $this->validationCode;
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
        if (isset($map['ActivityType'])) {
            $model->activityType = $map['ActivityType'];
        }

        if (isset($map['AuthTime'])) {
            $model->authTime = $map['AuthTime'];
        }

        if (isset($map['CanUpdate'])) {
            $model->canUpdate = $map['CanUpdate'];
        }

        if (isset($map['CurrentImageCodeInfo'])) {
            $model->currentImageCodeInfo = currentImageCodeInfo::fromMap($map['CurrentImageCodeInfo']);
        }

        if (isset($map['DataDiskSize'])) {
            $model->dataDiskSize = $map['DataDiskSize'];
        }

        if (isset($map['DeployMode'])) {
            $model->deployMode = $map['DeployMode'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DockerImageSize'])) {
            $model->dockerImageSize = $map['DockerImageSize'];
        }

        if (isset($map['EnableStartUpConfig'])) {
            $model->enableStartUpConfig = $map['EnableStartUpConfig'];
        }

        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['ImageScope'])) {
            $model->imageScope = $map['ImageScope'];
        }

        if (isset($map['ImageSource'])) {
            $model->imageSource = $map['ImageSource'];
        }

        if (isset($map['ImageType'])) {
            $model->imageType = $map['ImageType'];
        }

        if (isset($map['IsGpu'])) {
            $model->isGpu = $map['IsGpu'];
        }

        if (isset($map['IsLinggou'])) {
            $model->isLinggou = $map['IsLinggou'];
        }

        if (isset($map['IsWorkstation'])) {
            $model->isWorkstation = $map['IsWorkstation'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OperationSystem'])) {
            $model->operationSystem = $map['OperationSystem'];
        }

        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }

        if (isset($map['Permission'])) {
            $model->permission = $map['Permission'];
        }

        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }

        if (isset($map['ReceiverType'])) {
            $model->receiverType = $map['ReceiverType'];
        }

        if (isset($map['ShareCodes'])) {
            if (!empty($map['ShareCodes'])) {
                $model->shareCodes = [];
                $n1 = 0;
                foreach ($map['ShareCodes'] as $item1) {
                    $model->shareCodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ShareCodesIncludeDisable'])) {
            if (!empty($map['ShareCodesIncludeDisable'])) {
                $model->shareCodesIncludeDisable = [];
                $n1 = 0;
                foreach ($map['ShareCodesIncludeDisable'] as $item1) {
                    $model->shareCodesIncludeDisable[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Shared'])) {
            $model->shared = $map['Shared'];
        }

        if (isset($map['SharedBy'])) {
            $model->sharedBy = $map['SharedBy'];
        }

        if (isset($map['SourceDesktopId'])) {
            $model->sourceDesktopId = $map['SourceDesktopId'];
        }

        if (isset($map['SourceDesktopType'])) {
            $model->sourceDesktopType = $map['SourceDesktopType'];
        }

        if (isset($map['SourceImageId'])) {
            $model->sourceImageId = $map['SourceImageId'];
        }

        if (isset($map['SourceImageName'])) {
            $model->sourceImageName = $map['SourceImageName'];
        }

        if (isset($map['StartUpFileList'])) {
            if (!empty($map['StartUpFileList'])) {
                $model->startUpFileList = [];
                $n1 = 0;
                foreach ($map['StartUpFileList'] as $item1) {
                    $model->startUpFileList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SupportPublish'])) {
            $model->supportPublish = $map['SupportPublish'];
        }

        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }

        if (isset($map['ValidationCode'])) {
            $model->validationCode = $map['ValidationCode'];
        }

        return $model;
    }
}
