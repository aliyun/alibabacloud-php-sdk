<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Tea\Model;

class ReleaseArtifactRequest extends Model
{
    /**
     * @description The ID of the artifact.
     *
     * This parameter is required.
     *
     * @example artifact-9feded91880e4c78xxxx
     *
     * @var string
     */
    public $artifactId;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     *
     * @example 788E7CP0EN9D51P
     *
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'artifactId' => 'ArtifactId',
        'clientToken' => 'ClientToken',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->artifactId) {
            $res['ArtifactId'] = $this->artifactId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReleaseArtifactRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArtifactId'])) {
            $model->artifactId = $map['ArtifactId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
