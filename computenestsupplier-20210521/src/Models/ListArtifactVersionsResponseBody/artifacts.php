<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListArtifactVersionsResponseBody;

use AlibabaCloud\Tea\Model;

class artifacts extends Model
{
    /**
     * @example artifact-eea08d1e2d3a43aexxxx
     *
     * @var string
     */
    public $artifactId;

    /**
     * @example {\"CommodityCode\":\"cmjj0005xxxx\",\"CommodityVersion\":\"V2022xxxx\"}
     *
     * @var string
     */
    public $artifactProperty;

    /**
     * @example EcsImage
     *
     * @var string
     */
    public $artifactType;

    /**
     * @example 2
     *
     * @var string
     */
    public $artifactVersion;

    /**
     * @example 2022-10-20T02:19:53Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2022-10-20T02:19:55Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @var string[]
     */
    public $imageDelivery;

    /**
     * @example 100
     *
     * @var string
     */
    public $progress;

    /**
     * @var string
     */
    public $resultFile;

    /**
     * @example Normal
     *
     * @var string
     */
    public $securityAuditResult;

    /**
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @example [
     * ]
     * @var string
     */
    public $supportRegionIds;

    /**
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
