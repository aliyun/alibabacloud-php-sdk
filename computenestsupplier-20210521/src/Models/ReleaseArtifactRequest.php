<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Tea\Model;

class ReleaseArtifactRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example artifact-9feded91880e4c78xxxx
     *
     * @var string
     */
    public $artifactId;
    protected $_name = [
        'artifactId' => 'ArtifactId',
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

        return $model;
    }
}
