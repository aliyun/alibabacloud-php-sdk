<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListArtifactVersionsResponseBody;

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
     * @description The time when the certificate was created.
     *
     * @example 2022-10-20T02:19:53Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the deployment package was modified.
     *
     * @example 2022-10-20T02:19:55Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The distribution result of the image.
     *
     * @var string[]
     */
    public $imageDelivery;

    /**
     * @description The distribution progress of the deployment package.
     *
     * @example 100
     *
     * @var string
     */
    public $progress;

    /**
     * @description The result file of the security scan.
     *
     * @example https://compute-nest-security-audit-bucket-ap-southeast-1.oss-ap-southeast-1.aliyuncs.com/51416747xxxx/xxxx
     *
     * @var string
     */
    public $resultFile;

    /**
     * @description The result of the security scan. Valid values:
     *
     *   Normal: No risks exist on the deployment package.
     *   AtRisk: Risks exist on the deployment package.
     *   Processing: The deployment package is being scanned.
     *
     * @example Normal
     *
     * @var string
     */
    public $securityAuditResult;

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
     * @description The version name of the deployment package.
     *
     * @example v1
     *
     * @var string
     */
    public $versionName;
    protected $_name = [
        'artifactId'          => 'ArtifactId',
        'artifactProperty'    => 'ArtifactProperty',
        'artifactType'        => 'ArtifactType',
        'artifactVersion'     => 'ArtifactVersion',
        'gmtCreate'           => 'GmtCreate',
        'gmtModified'         => 'GmtModified',
        'imageDelivery'       => 'ImageDelivery',
        'progress'            => 'Progress',
        'resultFile'          => 'ResultFile',
        'securityAuditResult' => 'SecurityAuditResult',
        'status'              => 'Status',
        'supportRegionIds'    => 'SupportRegionIds',
        'versionName'         => 'VersionName',
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
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->imageDelivery) {
            $res['ImageDelivery'] = $this->imageDelivery;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->resultFile) {
            $res['ResultFile'] = $this->resultFile;
        }
        if (null !== $this->securityAuditResult) {
            $res['SecurityAuditResult'] = $this->securityAuditResult;
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
     * @return artifacts
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
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['ImageDelivery'])) {
            $model->imageDelivery = $map['ImageDelivery'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['ResultFile'])) {
            $model->resultFile = $map['ResultFile'];
        }
        if (isset($map['SecurityAuditResult'])) {
            $model->securityAuditResult = $map['SecurityAuditResult'];
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
