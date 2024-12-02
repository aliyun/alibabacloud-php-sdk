<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateArtifactRequest\artifactBuildProperty;

use AlibabaCloud\Tea\Model;

class codeRepo extends Model
{
    /**
     * @var string
     */
    public $branch;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $repoName;
    protected $_name = [
        'branch'   => 'Branch',
        'owner'    => 'Owner',
        'platform' => 'Platform',
        'repoName' => 'RepoName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->branch) {
            $res['Branch'] = $this->branch;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->repoName) {
            $res['RepoName'] = $this->repoName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return codeRepo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Branch'])) {
            $model->branch = $map['Branch'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['RepoName'])) {
            $model->repoName = $map['RepoName'];
        }

        return $model;
    }
}
