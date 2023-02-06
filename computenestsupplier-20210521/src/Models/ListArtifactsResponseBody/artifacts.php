<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListArtifactsResponseBody;

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
     * @example EcsImage
     *
     * @var string
     */
    public $artifactType;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 2022-10-20T02:19:55Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 2
     *
     * @var string
     */
    public $maxVersion;

    /**
     * @var string
     */
    public $name;

    /**
     * @example Created
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'artifactId'   => 'ArtifactId',
        'artifactType' => 'ArtifactType',
        'description'  => 'Description',
        'gmtModified'  => 'GmtModified',
        'maxVersion'   => 'MaxVersion',
        'name'         => 'Name',
        'status'       => 'Status',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
