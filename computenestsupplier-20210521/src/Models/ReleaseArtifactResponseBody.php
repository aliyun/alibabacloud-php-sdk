<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Tea\Model;

class ReleaseArtifactResponseBody extends Model
{
    /**
     * @description The ID of the artifact.
     *
     * @example artifact-9feded91880e4c78xxxx
     *
     * @var string
     */
    public $artifactId;

    /**
     * @description The content of the artifact.
     *
     * @example "{\\"Url\\":\\"https://computenest-artifacts-draft-cn-hangzhou.oss-cn-hangzhou.aliyuncs.com/130920852836xxxx/cn-hangzhou/service-8072a04e5a134382xxxx/165095355xxxx/changes.txt\\",\\"ConfigurationMetadata\\":\\"{\\\\\\"WorkDir\\\\\\":\\\\\\"/root\\\\\\",\\\\\\"Platform\\\\\\":\\\\\\"Linux\\\\\\",\\\\\\"CommandType\\\\\\":\\\\\\"RunShellScript\\\\\\",\\\\\\"UpgradeScript\\\\\\":\\\\\\"cd /root\\\\\\\\ncp changes.txt cpchanges.txt\\\\\\\\nmv changes.txt mvchangge.txt\\\\\\"}\\"}"
     *
     * @var string
     */
    public $artifactProperty;

    /**
     * @description The type of the artifact.
     *
     * @example File
     *
     * @var string
     */
    public $artifactType;

    /**
     * @description The version of the artifact.
     *
     * @example draft
     *
     * @var string
     */
    public $artifactVersion;

    /**
     * @description The description of the artifact.
     *
     * @example Description
     *
     * @var string
     */
    public $description;

    /**
     * @description The time when the artifact was modified.
     *
     * @example 1650954178000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The request ID.
     *
     * @example 3818BA7D-3F50-1A44-9FF3-04A52A59XXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The state of the artifact. Valid values:
     *
     *   Created: The artifact is created.
     *   Scanning: The artifact is being scanned.
     *   ScanFailed: The artifact failed to be scanned.
     *   Delivering: The artifact is being distributed.
     *   Available: The artifact is available.
     *   Deleted: The artifact is deleted.
     *
     * @example Created
     *
     * @var string
     */
    public $status;

    /**
     * @description The version name of the artifact.
     *
     * @example V1.0
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
        if (null !== $this->versionName) {
            $res['VersionName'] = $this->versionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReleaseArtifactResponseBody
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
        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }

        return $model;
    }
}
