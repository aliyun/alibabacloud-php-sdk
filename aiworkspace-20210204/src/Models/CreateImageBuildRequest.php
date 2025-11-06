<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateImageBuildRequest\buildConfig;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateImageBuildRequest\image;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateImageBuildRequest\resource;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateImageBuildRequest\targetRegistry;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateImageBuildRequest\userVpc;

class CreateImageBuildRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $accessibility;

    /**
     * @var buildConfig
     */
    public $buildConfig;

    /**
     * @var image
     */
    public $image;

    /**
     * @var string
     */
    public $imageBuildJobName;

    /**
     * @var bool
     */
    public $overwriteImageTag;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var resource
     */
    public $resource;

    /**
     * @var targetRegistry
     */
    public $targetRegistry;

    /**
     * @var userVpc
     */
    public $userVpc;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'accessibility' => 'Accessibility',
        'buildConfig' => 'BuildConfig',
        'image' => 'Image',
        'imageBuildJobName' => 'ImageBuildJobName',
        'overwriteImageTag' => 'OverwriteImageTag',
        'regionId' => 'RegionId',
        'resource' => 'Resource',
        'targetRegistry' => 'TargetRegistry',
        'userVpc' => 'UserVpc',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (null !== $this->buildConfig) {
            $this->buildConfig->validate();
        }
        if (null !== $this->image) {
            $this->image->validate();
        }
        if (null !== $this->resource) {
            $this->resource->validate();
        }
        if (null !== $this->targetRegistry) {
            $this->targetRegistry->validate();
        }
        if (null !== $this->userVpc) {
            $this->userVpc->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }

        if (null !== $this->buildConfig) {
            $res['BuildConfig'] = null !== $this->buildConfig ? $this->buildConfig->toArray($noStream) : $this->buildConfig;
        }

        if (null !== $this->image) {
            $res['Image'] = null !== $this->image ? $this->image->toArray($noStream) : $this->image;
        }

        if (null !== $this->imageBuildJobName) {
            $res['ImageBuildJobName'] = $this->imageBuildJobName;
        }

        if (null !== $this->overwriteImageTag) {
            $res['OverwriteImageTag'] = $this->overwriteImageTag;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resource) {
            $res['Resource'] = null !== $this->resource ? $this->resource->toArray($noStream) : $this->resource;
        }

        if (null !== $this->targetRegistry) {
            $res['TargetRegistry'] = null !== $this->targetRegistry ? $this->targetRegistry->toArray($noStream) : $this->targetRegistry;
        }

        if (null !== $this->userVpc) {
            $res['UserVpc'] = null !== $this->userVpc ? $this->userVpc->toArray($noStream) : $this->userVpc;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }

        if (isset($map['BuildConfig'])) {
            $model->buildConfig = buildConfig::fromMap($map['BuildConfig']);
        }

        if (isset($map['Image'])) {
            $model->image = image::fromMap($map['Image']);
        }

        if (isset($map['ImageBuildJobName'])) {
            $model->imageBuildJobName = $map['ImageBuildJobName'];
        }

        if (isset($map['OverwriteImageTag'])) {
            $model->overwriteImageTag = $map['OverwriteImageTag'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Resource'])) {
            $model->resource = resource::fromMap($map['Resource']);
        }

        if (isset($map['TargetRegistry'])) {
            $model->targetRegistry = targetRegistry::fromMap($map['TargetRegistry']);
        }

        if (isset($map['UserVpc'])) {
            $model->userVpc = userVpc::fromMap($map['UserVpc']);
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
