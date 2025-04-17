<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateArtifactRequest\artifactBuildProperty;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateArtifactRequest\artifactProperty;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateArtifactRequest\tag;

class CreateArtifactRequest extends Model
{
    /**
     * @var artifactBuildProperty
     */
    public $artifactBuildProperty;

    /**
     * @var string
     */
    public $artifactBuildType;

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
    public $artifactType;

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
    public $name;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string[]
     */
    public $supportRegionIds;

    /**
     * @var tag[]
     */
    public $tag;

    /**
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
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->artifactBuildProperty) {
            $res['ArtifactBuildProperty'] = null !== $this->artifactBuildProperty ? $this->artifactBuildProperty->toArray($noStream) : $this->artifactBuildProperty;
        }

        if (null !== $this->artifactBuildType) {
            $res['ArtifactBuildType'] = $this->artifactBuildType;
        }

        if (null !== $this->artifactId) {
            $res['ArtifactId'] = $this->artifactId;
        }

        if (null !== $this->artifactProperty) {
            $res['ArtifactProperty'] = null !== $this->artifactProperty ? $this->artifactProperty->toArray($noStream) : $this->artifactProperty;
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
            if (\is_array($this->supportRegionIds)) {
                $res['SupportRegionIds'] = [];
                $n1 = 0;
                foreach ($this->supportRegionIds as $item1) {
                    $res['SupportRegionIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                $model->supportRegionIds = [];
                $n1 = 0;
                foreach ($map['SupportRegionIds'] as $item1) {
                    $model->supportRegionIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }

        return $model;
    }
}
