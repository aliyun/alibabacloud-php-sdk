<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateArtifactShrinkRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateArtifactShrinkRequest extends Model
{
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
     * @var string
     */
    public $artifactPropertyShrink;

    /**
     * @description The type of the deployment package. Valid values:
     *
     *   EcsImage: Elastic Compute Service (ECS) image.
     *   AcrImage: container image.
     *   File: Object Storage Service (OSS) object.
     *   Script: script.
     *
     * This parameter is required.
     * @example EcsImage
     *
     * @var string
     */
    public $artifactType;

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
     * @example v1
     *
     * @var string
     */
    public $versionName;
    protected $_name = [
        'artifactId'             => 'ArtifactId',
        'artifactPropertyShrink' => 'ArtifactProperty',
        'artifactType'           => 'ArtifactType',
        'description'            => 'Description',
        'name'                   => 'Name',
        'resourceGroupId'        => 'ResourceGroupId',
        'supportRegionIds'       => 'SupportRegionIds',
        'tag'                    => 'Tag',
        'versionName'            => 'VersionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->artifactId) {
            $res['ArtifactId'] = $this->artifactId;
        }
        if (null !== $this->artifactPropertyShrink) {
            $res['ArtifactProperty'] = $this->artifactPropertyShrink;
        }
        if (null !== $this->artifactType) {
            $res['ArtifactType'] = $this->artifactType;
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
     * @return CreateArtifactShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArtifactId'])) {
            $model->artifactId = $map['ArtifactId'];
        }
        if (isset($map['ArtifactProperty'])) {
            $model->artifactPropertyShrink = $map['ArtifactProperty'];
        }
        if (isset($map['ArtifactType'])) {
            $model->artifactType = $map['ArtifactType'];
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
                $n          = 0;
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
