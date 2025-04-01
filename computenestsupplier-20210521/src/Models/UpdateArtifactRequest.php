<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateArtifactRequest\artifactBuildProperty;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateArtifactRequest\artifactProperty;

class UpdateArtifactRequest extends Model
{
    /**
     * @var artifactBuildProperty
     */
    public $artifactBuildProperty;

    /**
     * @var string
     */
    public $artifactId;

    /**
     * @var artifactProperty
     */
    public $artifactProperty;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $permissionType;

    /**
     * @var string[]
     */
    public $supportRegionIds;

    /**
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

    public function validate()
    {
        if (null !== $this->artifactBuildProperty) {
            $this->artifactBuildProperty->validate();
        }
        if (null !== $this->artifactProperty) {
            $this->artifactProperty->validate();
        }
        if (\is_array($this->supportRegionIds)) {
            Model::validateArray($this->supportRegionIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->artifactBuildProperty) {
            $res['ArtifactBuildProperty'] = null !== $this->artifactBuildProperty ? $this->artifactBuildProperty->toArray($noStream) : $this->artifactBuildProperty;
        }

        if (null !== $this->artifactId) {
            $res['ArtifactId'] = $this->artifactId;
        }

        if (null !== $this->artifactProperty) {
            $res['ArtifactProperty'] = null !== $this->artifactProperty ? $this->artifactProperty->toArray($noStream) : $this->artifactProperty;
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
            if (\is_array($this->supportRegionIds)) {
                $res['SupportRegionIds'] = [];
                $n1 = 0;
                foreach ($this->supportRegionIds as $item1) {
                    $res['SupportRegionIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->versionName) {
            $res['VersionName'] = $this->versionName;
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
                $model->supportRegionIds = [];
                $n1 = 0;
                foreach ($map['SupportRegionIds'] as $item1) {
                    $model->supportRegionIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }

        return $model;
    }
}
