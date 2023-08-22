<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\GetArtifactBuildTaskResponseBody;

use AlibabaCloud\Tea\Model;

class sourceArtifact extends Model
{
    /**
     * @description The type of the artifact that is built in the task. The value can only be IMAGE.
     *
     * @example IMAGE
     *
     * @var string
     */
    public $artifactType;

    /**
     * @description The ID of the repository to which the source artifact belongs. The repository can only be an image repository.
     *
     * @example cri-shac42yvqzvq****
     *
     * @var string
     */
    public $repoId;

    /**
     * @description The version of the artifact. The artifact can only be an image.
     *
     * @example latest
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'artifactType' => 'ArtifactType',
        'repoId'       => 'RepoId',
        'version'      => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->artifactType) {
            $res['ArtifactType'] = $this->artifactType;
        }
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceArtifact
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArtifactType'])) {
            $model->artifactType = $map['ArtifactType'];
        }
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
