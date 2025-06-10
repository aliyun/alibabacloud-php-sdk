<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cr\V20181201\Models\RepoConfiguration\artifactBuildRuleParameters;

class RepoConfiguration extends Model
{
    /**
     * @var artifactBuildRuleParameters
     */
    public $artifactBuildRuleParameters;

    /**
     * @var string
     */
    public $repoType;

    /**
     * @var bool
     */
    public $tagImmutability;
    protected $_name = [
        'artifactBuildRuleParameters' => 'ArtifactBuildRuleParameters',
        'repoType' => 'RepoType',
        'tagImmutability' => 'TagImmutability',
    ];

    public function validate()
    {
        if (null !== $this->artifactBuildRuleParameters) {
            $this->artifactBuildRuleParameters->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->artifactBuildRuleParameters) {
            $res['ArtifactBuildRuleParameters'] = null !== $this->artifactBuildRuleParameters ? $this->artifactBuildRuleParameters->toArray($noStream) : $this->artifactBuildRuleParameters;
        }

        if (null !== $this->repoType) {
            $res['RepoType'] = $this->repoType;
        }

        if (null !== $this->tagImmutability) {
            $res['TagImmutability'] = $this->tagImmutability;
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
        if (isset($map['ArtifactBuildRuleParameters'])) {
            $model->artifactBuildRuleParameters = artifactBuildRuleParameters::fromMap($map['ArtifactBuildRuleParameters']);
        }

        if (isset($map['RepoType'])) {
            $model->repoType = $map['RepoType'];
        }

        if (isset($map['TagImmutability'])) {
            $model->tagImmutability = $map['TagImmutability'];
        }

        return $model;
    }
}
