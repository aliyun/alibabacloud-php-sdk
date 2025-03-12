<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Tea\Model;

class ListArtifactRisksRequest extends Model
{
    /**
     * @description Artifact ID.
     *
     * @example artifact-3fd95cdfdf0d4b1fa00c
     *
     * @var string
     */
    public $artifactId;

    /**
     * @description Artifact version.
     *
     * @example 1
     *
     * @var string
     */
    public $artifactVersion;
    protected $_name = [
        'artifactId'      => 'ArtifactId',
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
        if (null !== $this->artifactVersion) {
            $res['ArtifactVersion'] = $this->artifactVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListArtifactRisksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArtifactId'])) {
            $model->artifactId = $map['ArtifactId'];
        }
        if (isset($map['ArtifactVersion'])) {
            $model->artifactVersion = $map['ArtifactVersion'];
        }

        return $model;
    }
}
