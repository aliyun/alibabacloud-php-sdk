<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListArtifactsResponseBody;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListArtifactsResponseBody\artifacts\tags;
use AlibabaCloud\Tea\Model;

class artifacts extends Model
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
     * @description The type of the deployment package.
     *
     * @example EcsImage
     *
     * @var string
     */
    public $artifactType;

    /**
     * @description The description of the deployment package.
     *
     * @example Description
     *
     * @var string
     */
    public $description;

    /**
     * @description The time when the deployment package was modified.
     *
     * @example 2022-10-20T02:19:55Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The latest version of the deployment package.
     *
     * @example 2
     *
     * @var string
     */
    public $maxVersion;

    /**
     * @description The name of the deployment package.
     *
     * @example Name
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-aek25rexxxxxxxx
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The status of the deployment package. Valid values:
     *
     *   Created: The deployment package is created.
     *   Scanning: The deployment package is being scanned.
     *   ScanFailed: The deployment package failed to be scanned.
     *   Delivering: The deployment package is being distributed.
     *   Available: The deployment package is available.
     *   Deleted: The deployment package is deleted.
     *
     * @example Created
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'artifactId'      => 'ArtifactId',
        'artifactType'    => 'ArtifactType',
        'description'     => 'Description',
        'gmtModified'     => 'GmtModified',
        'maxVersion'      => 'MaxVersion',
        'name'            => 'Name',
        'resourceGroupId' => 'ResourceGroupId',
        'status'          => 'Status',
        'tags'            => 'Tags',
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
        if (null !== $this->artifactType) {
            $res['ArtifactType'] = $this->artifactType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->maxVersion) {
            $res['MaxVersion'] = $this->maxVersion;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return artifacts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArtifactId'])) {
            $model->artifactId = $map['ArtifactId'];
        }
        if (isset($map['ArtifactType'])) {
            $model->artifactType = $map['ArtifactType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['MaxVersion'])) {
            $model->maxVersion = $map['MaxVersion'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
