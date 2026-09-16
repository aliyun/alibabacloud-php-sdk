<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\GetArtifactBuildTaskResponseBody;

use AlibabaCloud\Dara\Model;

class sourceArtifact extends Model
{
    /**
     * @var string
     */
    public $artifactType;

    /**
     * @var int
     */
    public $layerCount;

    /**
     * @var string
     */
    public $repoId;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'artifactType' => 'ArtifactType',
        'layerCount' => 'LayerCount',
        'repoId' => 'RepoId',
        'size' => 'Size',
        'version' => 'Version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->artifactType) {
            $res['ArtifactType'] = $this->artifactType;
        }

        if (null !== $this->layerCount) {
            $res['LayerCount'] = $this->layerCount;
        }

        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['ArtifactType'])) {
            $model->artifactType = $map['ArtifactType'];
        }

        if (isset($map['LayerCount'])) {
            $model->layerCount = $map['LayerCount'];
        }

        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
