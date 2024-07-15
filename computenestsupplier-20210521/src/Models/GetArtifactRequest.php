<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Tea\Model;

class GetArtifactRequest extends Model
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
     * @description The name of the deployment package.
     *
     * @example gpu-test
     *
     * @var string
     */
    public $artifactName;

    /**
     * @description The version of the deployment package.
     *
     * @example 1
     *
     * @var string
     */
    public $artifactVersion;
    protected $_name = [
        'artifactId'      => 'ArtifactId',
        'artifactName'    => 'ArtifactName',
        'artifactVersion' => 'ArtifactVersion',
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
        if (null !== $this->artifactName) {
            $res['ArtifactName'] = $this->artifactName;
        }
        if (null !== $this->artifactVersion) {
            $res['ArtifactVersion'] = $this->artifactVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetArtifactRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArtifactId'])) {
            $model->artifactId = $map['ArtifactId'];
        }
        if (isset($map['ArtifactName'])) {
            $model->artifactName = $map['ArtifactName'];
        }
        if (isset($map['ArtifactVersion'])) {
            $model->artifactVersion = $map['ArtifactVersion'];
        }

        return $model;
    }
}
