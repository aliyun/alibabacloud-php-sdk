<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetAgentSessionArtifactMetaResponseBody\jsonRpcResponse;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $artifactContent;

    /**
     * @var string
     */
    public $artifactName;

    /**
     * @var string
     */
    public $artifactPath;
    protected $_name = [
        'artifactContent' => 'ArtifactContent',
        'artifactName' => 'ArtifactName',
        'artifactPath' => 'ArtifactPath',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->artifactContent) {
            $res['ArtifactContent'] = $this->artifactContent;
        }

        if (null !== $this->artifactName) {
            $res['ArtifactName'] = $this->artifactName;
        }

        if (null !== $this->artifactPath) {
            $res['ArtifactPath'] = $this->artifactPath;
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
        if (isset($map['ArtifactContent'])) {
            $model->artifactContent = $map['ArtifactContent'];
        }

        if (isset($map['ArtifactName'])) {
            $model->artifactName = $map['ArtifactName'];
        }

        if (isset($map['ArtifactPath'])) {
            $model->artifactPath = $map['ArtifactPath'];
        }

        return $model;
    }
}
