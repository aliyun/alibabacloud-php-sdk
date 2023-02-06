<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Tea\Model;

class UpdateArtifactShrinkRequest extends Model
{
    /**
     * @example artifact-eea08d1e2d3a43aexxxx
     *
     * @var string
     */
    public $artifactId;

    /**
     * @var string
     */
    public $artifactPropertyShrink;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $supportRegionIds;

    /**
     * @example v1
     *
     * @var string
     */
    public $versionName;
    protected $_name = [
        'artifactId'             => 'ArtifactId',
        'artifactPropertyShrink' => 'ArtifactProperty',
        'description'            => 'Description',
        'supportRegionIds'       => 'SupportRegionIds',
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
     * @return UpdateArtifactShrinkRequest
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
