<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListSoftwarelibSoftwareResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListSoftwarelibSoftwareResponseBody\dataList\versions;

class dataList extends Model
{
    /**
     * @var string
     */
    public $builtinSoftwareId;

    /**
     * @var string
     */
    public $checkBundleId;

    /**
     * @var string
     */
    public $checkSoftwareName;

    /**
     * @var string
     */
    public $classifyId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $devTags;

    /**
     * @var string[]
     */
    public $deviceGroupIds;

    /**
     * @var int
     */
    public $downloadTimes;

    /**
     * @var bool
     */
    public $hasNewVersion;

    /**
     * @var string
     */
    public $logoUrl;

    /**
     * @var string
     */
    public $macAppleVersion;

    /**
     * @var string
     */
    public $macIntelVersion;

    /**
     * @var string
     */
    public $matchMode;

    /**
     * @var string
     */
    public $officialDownloadUrl;

    /**
     * @var string
     */
    public $softwareId;

    /**
     * @var string
     */
    public $softwareName;

    /**
     * @var bool
     */
    public $sourceRemoved;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string[]
     */
    public $userGroupIds;

    /**
     * @var versions[]
     */
    public $versions;

    /**
     * @var string
     */
    public $windowsVersion;
    protected $_name = [
        'builtinSoftwareId' => 'BuiltinSoftwareId',
        'checkBundleId' => 'CheckBundleId',
        'checkSoftwareName' => 'CheckSoftwareName',
        'classifyId' => 'ClassifyId',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'devTags' => 'DevTags',
        'deviceGroupIds' => 'DeviceGroupIds',
        'downloadTimes' => 'DownloadTimes',
        'hasNewVersion' => 'HasNewVersion',
        'logoUrl' => 'LogoUrl',
        'macAppleVersion' => 'MacAppleVersion',
        'macIntelVersion' => 'MacIntelVersion',
        'matchMode' => 'MatchMode',
        'officialDownloadUrl' => 'OfficialDownloadUrl',
        'softwareId' => 'SoftwareId',
        'softwareName' => 'SoftwareName',
        'sourceRemoved' => 'SourceRemoved',
        'sourceType' => 'SourceType',
        'userGroupIds' => 'UserGroupIds',
        'versions' => 'Versions',
        'windowsVersion' => 'WindowsVersion',
    ];

    public function validate()
    {
        if (\is_array($this->devTags)) {
            Model::validateArray($this->devTags);
        }
        if (\is_array($this->deviceGroupIds)) {
            Model::validateArray($this->deviceGroupIds);
        }
        if (\is_array($this->userGroupIds)) {
            Model::validateArray($this->userGroupIds);
        }
        if (\is_array($this->versions)) {
            Model::validateArray($this->versions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->builtinSoftwareId) {
            $res['BuiltinSoftwareId'] = $this->builtinSoftwareId;
        }

        if (null !== $this->checkBundleId) {
            $res['CheckBundleId'] = $this->checkBundleId;
        }

        if (null !== $this->checkSoftwareName) {
            $res['CheckSoftwareName'] = $this->checkSoftwareName;
        }

        if (null !== $this->classifyId) {
            $res['ClassifyId'] = $this->classifyId;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->devTags) {
            if (\is_array($this->devTags)) {
                $res['DevTags'] = [];
                $n1 = 0;
                foreach ($this->devTags as $item1) {
                    $res['DevTags'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->deviceGroupIds) {
            if (\is_array($this->deviceGroupIds)) {
                $res['DeviceGroupIds'] = [];
                $n1 = 0;
                foreach ($this->deviceGroupIds as $item1) {
                    $res['DeviceGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->downloadTimes) {
            $res['DownloadTimes'] = $this->downloadTimes;
        }

        if (null !== $this->hasNewVersion) {
            $res['HasNewVersion'] = $this->hasNewVersion;
        }

        if (null !== $this->logoUrl) {
            $res['LogoUrl'] = $this->logoUrl;
        }

        if (null !== $this->macAppleVersion) {
            $res['MacAppleVersion'] = $this->macAppleVersion;
        }

        if (null !== $this->macIntelVersion) {
            $res['MacIntelVersion'] = $this->macIntelVersion;
        }

        if (null !== $this->matchMode) {
            $res['MatchMode'] = $this->matchMode;
        }

        if (null !== $this->officialDownloadUrl) {
            $res['OfficialDownloadUrl'] = $this->officialDownloadUrl;
        }

        if (null !== $this->softwareId) {
            $res['SoftwareId'] = $this->softwareId;
        }

        if (null !== $this->softwareName) {
            $res['SoftwareName'] = $this->softwareName;
        }

        if (null !== $this->sourceRemoved) {
            $res['SourceRemoved'] = $this->sourceRemoved;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        if (null !== $this->userGroupIds) {
            if (\is_array($this->userGroupIds)) {
                $res['UserGroupIds'] = [];
                $n1 = 0;
                foreach ($this->userGroupIds as $item1) {
                    $res['UserGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->versions) {
            if (\is_array($this->versions)) {
                $res['Versions'] = [];
                $n1 = 0;
                foreach ($this->versions as $item1) {
                    $res['Versions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->windowsVersion) {
            $res['WindowsVersion'] = $this->windowsVersion;
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
        if (isset($map['BuiltinSoftwareId'])) {
            $model->builtinSoftwareId = $map['BuiltinSoftwareId'];
        }

        if (isset($map['CheckBundleId'])) {
            $model->checkBundleId = $map['CheckBundleId'];
        }

        if (isset($map['CheckSoftwareName'])) {
            $model->checkSoftwareName = $map['CheckSoftwareName'];
        }

        if (isset($map['ClassifyId'])) {
            $model->classifyId = $map['ClassifyId'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DevTags'])) {
            if (!empty($map['DevTags'])) {
                $model->devTags = [];
                $n1 = 0;
                foreach ($map['DevTags'] as $item1) {
                    $model->devTags[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DeviceGroupIds'])) {
            if (!empty($map['DeviceGroupIds'])) {
                $model->deviceGroupIds = [];
                $n1 = 0;
                foreach ($map['DeviceGroupIds'] as $item1) {
                    $model->deviceGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DownloadTimes'])) {
            $model->downloadTimes = $map['DownloadTimes'];
        }

        if (isset($map['HasNewVersion'])) {
            $model->hasNewVersion = $map['HasNewVersion'];
        }

        if (isset($map['LogoUrl'])) {
            $model->logoUrl = $map['LogoUrl'];
        }

        if (isset($map['MacAppleVersion'])) {
            $model->macAppleVersion = $map['MacAppleVersion'];
        }

        if (isset($map['MacIntelVersion'])) {
            $model->macIntelVersion = $map['MacIntelVersion'];
        }

        if (isset($map['MatchMode'])) {
            $model->matchMode = $map['MatchMode'];
        }

        if (isset($map['OfficialDownloadUrl'])) {
            $model->officialDownloadUrl = $map['OfficialDownloadUrl'];
        }

        if (isset($map['SoftwareId'])) {
            $model->softwareId = $map['SoftwareId'];
        }

        if (isset($map['SoftwareName'])) {
            $model->softwareName = $map['SoftwareName'];
        }

        if (isset($map['SourceRemoved'])) {
            $model->sourceRemoved = $map['SourceRemoved'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        if (isset($map['UserGroupIds'])) {
            if (!empty($map['UserGroupIds'])) {
                $model->userGroupIds = [];
                $n1 = 0;
                foreach ($map['UserGroupIds'] as $item1) {
                    $model->userGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Versions'])) {
            if (!empty($map['Versions'])) {
                $model->versions = [];
                $n1 = 0;
                foreach ($map['Versions'] as $item1) {
                    $model->versions[$n1] = versions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['WindowsVersion'])) {
            $model->windowsVersion = $map['WindowsVersion'];
        }

        return $model;
    }
}
