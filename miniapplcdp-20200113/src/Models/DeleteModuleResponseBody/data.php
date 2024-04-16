<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\DeleteModuleResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
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
    public $ownerAppId;

    /**
     * @var string
     */
    public $ownerUserId;

    /**
     * @var string
     */
    public $platform;
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
        'ownerAppId'             => 'OwnerAppId',
        'ownerUserId'            => 'OwnerUserId',
        'platform'               => 'Platform',
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
        if (null !== $this->ownerAppId) {
            $res['OwnerAppId'] = $this->ownerAppId;
        }
        if (null !== $this->ownerUserId) {
            $res['OwnerUserId'] = $this->ownerUserId;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
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
        if (isset($map['OwnerAppId'])) {
            $model->ownerAppId = $map['OwnerAppId'];
        }
        if (isset($map['OwnerUserId'])) {
            $model->ownerUserId = $map['OwnerUserId'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        return $model;
    }
}
