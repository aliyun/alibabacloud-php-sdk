<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateArtifactRequest\artifactBuildProperty;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateArtifactRequest\artifactProperty;
use AlibabaCloud\Tea\Model;

class UpdateArtifactRequest extends Model
{
    /**
     * @description The build properties of the artifact, utilized for hosting and building the deployment package.
     *
     * @var artifactBuildProperty
     */
    public $artifactBuildProperty;

    /**
     * @description The ID of the deployment package.
     *
     * This parameter is required.
     *
     * @example artifact-eea08d1e2d3a43aexxxx
     *
     * @var string
     */
    public $artifactId;

    /**
     * @description The properties of the deployment package.
     *
     * @var artifactProperty
     */
    public $artifactProperty;

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
     * @example Description
     *
     * @var string
     */
    public $description;

    /**
     * @description Permission fields are applicable to container image artifact and Helm Chart artifact. They can only change from Automatic to Public. Options:
     *
     * Public
     *
     * Automatic
     *
     * @example Public
     *
     * @var string
     */
    public $permissionType;

    /**
     * @description The IDs of the regions that support the deployment package.
     *
     * @var string[]
     */
    public $supportRegionIds;

    /**
     * @description The version name of the deployment package.
     *
     * @example v1
     *
     * @var string
     */
    public $versionName;
    protected $_name = [
        'artifactBuildProperty' => 'ArtifactBuildProperty',
        'artifactId' => 'ArtifactId',
        'artifactProperty' => 'ArtifactProperty',
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'permissionType' => 'PermissionType',
        'supportRegionIds' => 'SupportRegionIds',
        'versionName' => 'VersionName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->artifactBuildProperty) {
            $res['ArtifactBuildProperty'] = null !== $this->artifactBuildProperty ? $this->artifactBuildProperty->toMap() : null;
        }
        if (null !== $this->artifactId) {
            $res['ArtifactId'] = $this->artifactId;
        }
        if (null !== $this->artifactProperty) {
            $res['ArtifactProperty'] = null !== $this->artifactProperty ? $this->artifactProperty->toMap() : null;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->permissionType) {
            $res['PermissionType'] = $this->permissionType;
        }
        if (null !== $this->supportRegionIds) {
            $res['SupportRegionIds'] = $this->supportRegionIds;
        }
        if (null !== $this->versionName) {
            $res['VersionName'] = $this->versionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateArtifactRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArtifactBuildProperty'])) {
            $model->artifactBuildProperty = artifactBuildProperty::fromMap($map['ArtifactBuildProperty']);
        }
        if (isset($map['ArtifactId'])) {
            $model->artifactId = $map['ArtifactId'];
        }
        if (isset($map['ArtifactProperty'])) {
            $model->artifactProperty = artifactProperty::fromMap($map['ArtifactProperty']);
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['PermissionType'])) {
            $model->permissionType = $map['PermissionType'];
        }
        if (isset($map['SupportRegionIds'])) {
            if (!empty($map['SupportRegionIds'])) {
                $model->supportRegionIds = $map['SupportRegionIds'];
            }
        }
        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }

        return $model;
    }
}
