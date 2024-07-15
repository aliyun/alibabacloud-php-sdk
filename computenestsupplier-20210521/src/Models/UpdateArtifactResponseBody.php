<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Tea\Model;

class UpdateArtifactResponseBody extends Model
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
     * @description The properties of the deployment package.
     *
     * @example {\\"CommodityCode\\":\\"cmjj0005xxxx\\",\\"CommodityVersion\\":\\"V2022xxxx\\"}
     *
     * @var string
     */
    public $artifactProperty;

    /**
     * @description The type of the deployment package.
     *
     * @example EcsImage
     *
     * @var string
     */
    public $artifactType;

    /**
     * @description The version of the deployment package.
     *
     * @example 2
     *
     * @var string
     */
    public $artifactVersion;

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
     * @description The request ID.
     *
     * @example B1A0198B-F316-1B72-B8DD-28B6F6D6XXXX
     *
     * @var string
     */
    public $requestId;

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
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the region that supports the deployment package.
     *
     * @example [
     * ]
     * @var string
     */
    public $supportRegionIds;

    /**
     * @description The name of the deployment package.
     *
     * @example v1
     *
     * @var string
     */
    public $versionName;
    protected $_name = [
        'artifactId'       => 'ArtifactId',
        'artifactProperty' => 'ArtifactProperty',
        'artifactType'     => 'ArtifactType',
        'artifactVersion'  => 'ArtifactVersion',
        'description'      => 'Description',
        'gmtModified'      => 'GmtModified',
        'requestId'        => 'RequestId',
        'status'           => 'Status',
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
            $res['ArtifactProperty'] = $this->artifactProperty;
        }
        if (null !== $this->artifactType) {
            $res['ArtifactType'] = $this->artifactType;
        }
        if (null !== $this->artifactVersion) {
            $res['ArtifactVersion'] = $this->artifactVersion;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
     * @return UpdateArtifactResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArtifactId'])) {
            $model->artifactId = $map['ArtifactId'];
        }
        if (isset($map['ArtifactProperty'])) {
            $model->artifactProperty = $map['ArtifactProperty'];
        }
        if (isset($map['ArtifactType'])) {
            $model->artifactType = $map['ArtifactType'];
        }
        if (isset($map['ArtifactVersion'])) {
            $model->artifactVersion = $map['ArtifactVersion'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SupportRegionIds'])) {
            $model->supportRegionIds = $map['SupportRegionIds'];
        }
        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }

        return $model;
    }
}
