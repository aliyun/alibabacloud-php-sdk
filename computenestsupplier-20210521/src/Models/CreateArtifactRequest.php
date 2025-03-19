<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateArtifactRequest\artifactBuildProperty;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateArtifactRequest\artifactProperty;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateArtifactRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateArtifactRequest extends Model
{
    /**
     * @description The build properties of the artifact, utilized for hosting and building the deployment package.
     *
     * @var artifactBuildProperty
     */
    public $artifactBuildProperty;

    /**
     * @description The type of the artifact build task. Valid values:
     *
     * - EcsImage: Build ECS (Elastic Container Service) image.
     *
     * - Dockerfile: Build container image based on Dockerfile.
     *
     * - Buildpacks: Build container image based on Buildpacks.
     *
     * - ContainerImage: Rebuild container image by renaming an existing container image.
     *
     * @example Dockerfile
     *
     * @var string
     */
    public $artifactBuildType;

    /**
     * @description The ID of the deployment package.
     *
     * @example artifact-eea08d1e2d3a43aexxxx
     *
     * @var string
     */
    public $artifactId;

    /**
     * @description The properties of the deployment object.
     *
     * @var artifactProperty
     */
    public $artifactProperty;

    /**
     * @description The type of the deployment package. Valid values:
     *
     *   EcsImage: Elastic Compute Service (ECS) image.
     *   AcrImage: container image.
     *   File: Object Storage Service (OSS) object.
     *   Script: script.
     *
     * This parameter is required.
     *
     * @example EcsImage
     *
     * @var string
     */
    public $artifactType;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example 10CM943JP0EN9D51H
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the deployment package.
     *
     * @example Test artifact
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the deployment package.
     *
     * This parameter is required.
     *
     * @example Name
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-aekzkt5buxxxxxx
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The supported regions.
     *
     * @var string[]
     */
    public $supportRegionIds;

    /**
     * @description The custom tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The version name of the deployment package.
     *
     * This parameter is required.
     *
     * @example v1
     *
     * @var string
     */
    public $versionName;
    protected $_name = [
        'artifactBuildProperty' => 'ArtifactBuildProperty',
        'artifactBuildType' => 'ArtifactBuildType',
        'artifactId' => 'ArtifactId',
        'artifactProperty' => 'ArtifactProperty',
        'artifactType' => 'ArtifactType',
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'name' => 'Name',
        'resourceGroupId' => 'ResourceGroupId',
        'supportRegionIds' => 'SupportRegionIds',
        'tag' => 'Tag',
        'versionName' => 'VersionName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->artifactBuildProperty) {
            $res['ArtifactBuildProperty'] = null !== $this->artifactBuildProperty ? $this->artifactBuildProperty->toMap() : null;
        }
        if (null !== $this->artifactBuildType) {
            $res['ArtifactBuildType'] = $this->artifactBuildType;
        }
        if (null !== $this->artifactId) {
            $res['ArtifactId'] = $this->artifactId;
        }
        if (null !== $this->artifactProperty) {
            $res['ArtifactProperty'] = null !== $this->artifactProperty ? $this->artifactProperty->toMap() : null;
        }
        if (null !== $this->artifactType) {
            $res['ArtifactType'] = $this->artifactType;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->supportRegionIds) {
            $res['SupportRegionIds'] = $this->supportRegionIds;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->versionName) {
            $res['VersionName'] = $this->versionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateArtifactRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArtifactBuildProperty'])) {
            $model->artifactBuildProperty = artifactBuildProperty::fromMap($map['ArtifactBuildProperty']);
        }
        if (isset($map['ArtifactBuildType'])) {
            $model->artifactBuildType = $map['ArtifactBuildType'];
        }
        if (isset($map['ArtifactId'])) {
            $model->artifactId = $map['ArtifactId'];
        }
        if (isset($map['ArtifactProperty'])) {
            $model->artifactProperty = artifactProperty::fromMap($map['ArtifactProperty']);
        }
        if (isset($map['ArtifactType'])) {
            $model->artifactType = $map['ArtifactType'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SupportRegionIds'])) {
            if (!empty($map['SupportRegionIds'])) {
                $model->supportRegionIds = $map['SupportRegionIds'];
            }
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }

        return $model;
    }
}
