<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\DescribeImageDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\DescribeImageDetailResponseBody\data\currentImageCodeInfo;

class data extends Model
{
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
    public $description;

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
     * @var bool
     */
    public $isGpu;

    /**
     * @var string
     */
    public $name;

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
    public $sourceDesktopType;

    /**
     * @var string[]
     */
    public $startUpFileList;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $systemDiskSize;
    protected $_name = [
        'currentImageCodeInfo' => 'CurrentImageCodeInfo',
        'dataDiskSize' => 'DataDiskSize',
        'description' => 'Description',
        'enableStartUpConfig' => 'EnableStartUpConfig',
        'gmtCreated' => 'GmtCreated',
        'imageId' => 'ImageId',
        'imageScope' => 'ImageScope',
        'isGpu' => 'IsGpu',
        'name' => 'Name',
        'osType' => 'OsType',
        'permission' => 'Permission',
        'platform' => 'Platform',
        'progress' => 'Progress',
        'shareCodes' => 'ShareCodes',
        'shareCodesIncludeDisable' => 'ShareCodesIncludeDisable',
        'shared' => 'Shared',
        'sourceDesktopType' => 'SourceDesktopType',
        'startUpFileList' => 'StartUpFileList',
        'status' => 'Status',
        'systemDiskSize' => 'SystemDiskSize',
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
        if (null !== $this->currentImageCodeInfo) {
            $res['CurrentImageCodeInfo'] = null !== $this->currentImageCodeInfo ? $this->currentImageCodeInfo->toArray($noStream) : $this->currentImageCodeInfo;
        }

        if (null !== $this->dataDiskSize) {
            $res['DataDiskSize'] = $this->dataDiskSize;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
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

        if (null !== $this->isGpu) {
            $res['IsGpu'] = $this->isGpu;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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

        if (null !== $this->sourceDesktopType) {
            $res['SourceDesktopType'] = $this->sourceDesktopType;
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

        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
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
        if (isset($map['CurrentImageCodeInfo'])) {
            $model->currentImageCodeInfo = currentImageCodeInfo::fromMap($map['CurrentImageCodeInfo']);
        }

        if (isset($map['DataDiskSize'])) {
            $model->dataDiskSize = $map['DataDiskSize'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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

        if (isset($map['IsGpu'])) {
            $model->isGpu = $map['IsGpu'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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

        if (isset($map['SourceDesktopType'])) {
            $model->sourceDesktopType = $map['SourceDesktopType'];
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

        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }

        return $model;
    }
}
