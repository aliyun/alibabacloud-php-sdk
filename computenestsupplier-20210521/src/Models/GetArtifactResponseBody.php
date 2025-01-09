<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetArtifactResponseBody\tags;
use AlibabaCloud\Tea\Model;

class GetArtifactResponseBody extends Model
{
    /**
     * @description The build properties of the artifact, utilized for hosting and building the deployment package.
     *
     * @example "{\\"RegionId\\":\\"xxx\\", \\"SourceImageId\\":\\"xxx\\", \\"\\":\\"xxx\\", \\"CommandType\\":\\"xxx\\", \\"CommandContent\\":\\"xxx\\"}"
     *
     * @var string
     */
    public $artifactBuildProperty;

    /**
     * @description The type of the deployment package to be built.
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
     * @description The latest version of the deployment package.
     *
     * @example 2
     *
     * @var int
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
     * @description Permission fields are applicable to container image artifact and Helm Chart artifact They can only change from Automatic to Public. Options:
     * - Automatic
     * @example Public
     *
     * @var string
     */
    public $permissionType;

    /**
     * @description The distribution progress of the deployment package.
     *
     * @example 100
     *
     * @var string
     */
    public $progress;

    /**
     * @description The request ID.
     *
     * @example B1A0198B-F316-1B72-B8DD-28B6F6D6XXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-aekzkt5buxxxxxx
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The status of the deployment package. Valid values:
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The description of the deployment package.
     *
     * @example "/usr/local/share/aliyun-assist/work/script/t-hz04zm90y6og0sg.sh: line 1: pip: command not found"
     *
     * @var string
     */
    public $statusDetail;

    /**
     * @description The ID of the region that supports the deployment package.
     *
     * @example ["cn-hangzhou","cn-beijing"]
     *
     * @var string
     */
    public $supportRegionIds;

    /**
     * @description The tags of the deployment package.
     *
     * @var tags[]
     */
    public $tags;

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
        'artifactBuildType'     => 'ArtifactBuildType',
        'artifactId'            => 'ArtifactId',
        'artifactProperty'      => 'ArtifactProperty',
        'artifactType'          => 'ArtifactType',
        'artifactVersion'       => 'ArtifactVersion',
        'description'           => 'Description',
        'gmtModified'           => 'GmtModified',
        'maxVersion'            => 'MaxVersion',
        'name'                  => 'Name',
        'permissionType'        => 'PermissionType',
        'progress'              => 'Progress',
        'requestId'             => 'RequestId',
        'resourceGroupId'       => 'ResourceGroupId',
        'status'                => 'Status',
        'statusDetail'          => 'StatusDetail',
        'supportRegionIds'      => 'SupportRegionIds',
        'tags'                  => 'Tags',
        'versionName'           => 'VersionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->artifactBuildProperty) {
            $res['ArtifactBuildProperty'] = $this->artifactBuildProperty;
        }
        if (null !== $this->artifactBuildType) {
            $res['ArtifactBuildType'] = $this->artifactBuildType;
        }
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
        if (null !== $this->maxVersion) {
            $res['MaxVersion'] = $this->maxVersion;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->permissionType) {
            $res['PermissionType'] = $this->permissionType;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusDetail) {
            $res['StatusDetail'] = $this->statusDetail;
        }
        if (null !== $this->supportRegionIds) {
            $res['SupportRegionIds'] = $this->supportRegionIds;
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
        if (null !== $this->versionName) {
            $res['VersionName'] = $this->versionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetArtifactResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArtifactBuildProperty'])) {
            $model->artifactBuildProperty = $map['ArtifactBuildProperty'];
        }
        if (isset($map['ArtifactBuildType'])) {
            $model->artifactBuildType = $map['ArtifactBuildType'];
        }
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
        if (isset($map['MaxVersion'])) {
            $model->maxVersion = $map['MaxVersion'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PermissionType'])) {
            $model->permissionType = $map['PermissionType'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusDetail'])) {
            $model->statusDetail = $map['StatusDetail'];
        }
        if (isset($map['SupportRegionIds'])) {
            $model->supportRegionIds = $map['SupportRegionIds'];
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
        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }

        return $model;
    }
}
