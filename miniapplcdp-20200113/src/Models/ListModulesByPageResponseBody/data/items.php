<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ListModulesByPageResponseBody\data;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $icon;

    /**
     * @var string
     */
    public $latestPublishedCommit;

    /**
     * @var string
     */
    public $latestPublishedVersion;

    /**
     * @var string
     */
    public $minimumPlatformVersion;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $moduleId;

    /**
     * @var string
     */
    public $moduleName;

    /**
     * @var string
     */
    public $moduleType;

    /**
     * @var string
     */
    public $ownerAppId;

    /**
     * @var string
     */
    public $ownerUserId;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $platformVersion;
    protected $_name = [
        'createTime'             => 'CreateTime',
        'description'            => 'Description',
        'icon'                   => 'Icon',
        'latestPublishedCommit'  => 'LatestPublishedCommit',
        'latestPublishedVersion' => 'LatestPublishedVersion',
        'minimumPlatformVersion' => 'MinimumPlatformVersion',
        'modifiedTime'           => 'ModifiedTime',
        'moduleId'               => 'ModuleId',
        'moduleName'             => 'ModuleName',
        'moduleType'             => 'ModuleType',
        'ownerAppId'             => 'OwnerAppId',
        'ownerUserId'            => 'OwnerUserId',
        'platform'               => 'Platform',
        'platformVersion'        => 'PlatformVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }
        if (null !== $this->latestPublishedCommit) {
            $res['LatestPublishedCommit'] = $this->latestPublishedCommit;
        }
        if (null !== $this->latestPublishedVersion) {
            $res['LatestPublishedVersion'] = $this->latestPublishedVersion;
        }
        if (null !== $this->minimumPlatformVersion) {
            $res['MinimumPlatformVersion'] = $this->minimumPlatformVersion;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->moduleId) {
            $res['ModuleId'] = $this->moduleId;
        }
        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
        }
        if (null !== $this->moduleType) {
            $res['ModuleType'] = $this->moduleType;
        }
        if (null !== $this->ownerAppId) {
            $res['OwnerAppId'] = $this->ownerAppId;
        }
        if (null !== $this->ownerUserId) {
            $res['OwnerUserId'] = $this->ownerUserId;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->platformVersion) {
            $res['PlatformVersion'] = $this->platformVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }
        if (isset($map['LatestPublishedCommit'])) {
            $model->latestPublishedCommit = $map['LatestPublishedCommit'];
        }
        if (isset($map['LatestPublishedVersion'])) {
            $model->latestPublishedVersion = $map['LatestPublishedVersion'];
        }
        if (isset($map['MinimumPlatformVersion'])) {
            $model->minimumPlatformVersion = $map['MinimumPlatformVersion'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['ModuleId'])) {
            $model->moduleId = $map['ModuleId'];
        }
        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }
        if (isset($map['ModuleType'])) {
            $model->moduleType = $map['ModuleType'];
        }
        if (isset($map['OwnerAppId'])) {
            $model->ownerAppId = $map['OwnerAppId'];
        }
        if (isset($map['OwnerUserId'])) {
            $model->ownerUserId = $map['OwnerUserId'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['PlatformVersion'])) {
            $model->platformVersion = $map['PlatformVersion'];
        }

        return $model;
    }
}
