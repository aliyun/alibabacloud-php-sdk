<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\GetArtifactBuildTaskResponseBody;

use AlibabaCloud\Tea\Model;

class targetArtifact extends Model
{
    /**
     * @var string
     */
    public $repoId;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $artifactType;
    protected $_name = [
        'repoId'       => 'RepoId',
        'version'      => 'Version',
        'artifactType' => 'ArtifactType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->artifactType) {
            $res['ArtifactType'] = $this->artifactType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return targetArtifact
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['ArtifactType'])) {
            $model->artifactType = $map['ArtifactType'];
        }

        return $model;
    }
}
