<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListAgentSessionArtifactsResponseBody\jsonRpcResponse\result;

use AlibabaCloud\Dara\Model;

class artifacts extends Model
{
    /**
     * @var string
     */
    public $artifactName;

    /**
     * @var string
     */
    public $artifactPath;

    /**
     * @var string
     */
    public $artifactType;
    protected $_name = [
        'artifactName' => 'ArtifactName',
        'artifactPath' => 'ArtifactPath',
        'artifactType' => 'ArtifactType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->artifactName) {
            $res['ArtifactName'] = $this->artifactName;
        }

        if (null !== $this->artifactPath) {
            $res['ArtifactPath'] = $this->artifactPath;
        }

        if (null !== $this->artifactType) {
            $res['ArtifactType'] = $this->artifactType;
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
        if (isset($map['ArtifactName'])) {
            $model->artifactName = $map['ArtifactName'];
        }

        if (isset($map['ArtifactPath'])) {
            $model->artifactPath = $map['ArtifactPath'];
        }

        if (isset($map['ArtifactType'])) {
            $model->artifactType = $map['ArtifactType'];
        }

        return $model;
    }
}
