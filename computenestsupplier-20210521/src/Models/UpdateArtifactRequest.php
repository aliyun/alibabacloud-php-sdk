<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateArtifactRequest\artifactProperty;
use AlibabaCloud\Tea\Model;

class UpdateArtifactRequest extends Model
{
    /**
     * @description The ID of the deployment package.
     *
     * This parameter is required.
     * @example artifact-eea08d1e2d3a43aexxxx
     *
     * @var string
     */
    public $artifactId;

    /**
     * @description The properties of the deployment package.
     *
     * This parameter is required.
     * @var artifactProperty
     */
    public $artifactProperty;

    /**
     * @description The description of the deployment package.
     *
     * @example Description
     *
     * @var string
     */
    public $description;

    /**
     * @description The IDs of the regions that support the deployment package.
     *
     * @var string[]
     */
    public $supportRegionIds;

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
        'artifactId'       => 'ArtifactId',
        'artifactProperty' => 'ArtifactProperty',
        'description'      => 'Description',
        'supportRegionIds' => 'SupportRegionIds',
        'versionName'      => 'VersionName',
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
        if (null !== $this->artifactProperty) {
            $res['ArtifactProperty'] = null !== $this->artifactProperty ? $this->artifactProperty->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (isset($map['ArtifactId'])) {
            $model->artifactId = $map['ArtifactId'];
        }
        if (isset($map['ArtifactProperty'])) {
            $model->artifactProperty = artifactProperty::fromMap($map['ArtifactProperty']);
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
