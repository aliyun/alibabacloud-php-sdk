<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Tea\Model;

class DeleteArtifactRequest extends Model
{
    /**
     * @description The ID of the artifact.
     *
     * This parameter is required.
     *
     * @example artifact-eea08d1e2d3a43aexxxx
     *
     * @var string
     */
    public $artifactId;

    /**
     * @description The version of the artifact.
     *
     * @example 2
     *
     * @var string
     */
    public $artifactVersion;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example 788E7CP0EN9D51P
     *
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'artifactId' => 'ArtifactId',
        'artifactVersion' => 'ArtifactVersion',
        'clientToken' => 'ClientToken',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->artifactId) {
            $res['ArtifactId'] = $this->artifactId;
        }
        if (null !== $this->artifactVersion) {
            $res['ArtifactVersion'] = $this->artifactVersion;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteArtifactRequest
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
