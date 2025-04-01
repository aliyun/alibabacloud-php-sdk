<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListArtifactVersionsResponseBody;

use AlibabaCloud\Dara\Model;

class artifacts extends Model
{
    /**
     * @var string
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
     * @var string
     */
    public $artifactProperty;

    /**
     * @var string
     */
    public $artifactType;

    /**
     * @var string
     */
    public $artifactVersion;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string[]
     */
    public $imageDelivery;

    /**
     * @var string
     */
    public $progress;

    /**
     * @var string
     */
    public $resultFile;

    /**
     * @var string
     */
    public $securityAuditResult;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusDetail;

    /**
     * @var string
     */
    public $supportRegionIds;

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
        'artifactVersion' => 'ArtifactVersion',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'imageDelivery' => 'ImageDelivery',
        'progress' => 'Progress',
        'resultFile' => 'ResultFile',
        'securityAuditResult' => 'SecurityAuditResult',
        'status' => 'Status',
        'statusDetail' => 'StatusDetail',
        'supportRegionIds' => 'SupportRegionIds',
        'versionName' => 'VersionName',
    ];

    public function validate()
    {
        if (\is_array($this->imageDelivery)) {
            Model::validateArray($this->imageDelivery);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->imageDelivery) {
            if (\is_array($this->imageDelivery)) {
                $res['ImageDelivery'] = [];
                foreach ($this->imageDelivery as $key1 => $value1) {
                    $res['ImageDelivery'][$key1] = $value1;
                }
            }
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

        if (null !== $this->statusDetail) {
            $res['StatusDetail'] = $this->statusDetail;
        }

        if (null !== $this->supportRegionIds) {
            $res['SupportRegionIds'] = $this->supportRegionIds;
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

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['ImageDelivery'])) {
            if (!empty($map['ImageDelivery'])) {
                $model->imageDelivery = [];
                foreach ($map['ImageDelivery'] as $key1 => $value1) {
                    $model->imageDelivery[$key1] = $value1;
                }
            }
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

        if (isset($map['StatusDetail'])) {
            $model->statusDetail = $map['StatusDetail'];
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
