<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateArtifactRequest\artifactBuildProperty;

use AlibabaCloud\Tea\Model;

class codeRepo extends Model
{
    /**
     * @description The name of the branch in the code repository.
     *
     * @example main
     *
     * @var string
     */
    public $branch;

    /**
     * @description The endpoint.
     * The URL address used to access the privately deployed GitLab instance.
     *
     * @example http://121.40.25.0
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description The organization ID.
     *
     * @example 455231
     *
     * @var string
     */
    public $orgId;

    /**
     * @description The owner of the code repository.
     *
     * >  This parameter is available only if the git repository is private.
     *
     * @example aliyun-computenest
     *
     * @var string
     */
    public $owner;

    /**
     * @description The platform type. Valid values:
     *
     * - github
     *
     * - gitee
     * - gitlab
     * - codeup
     *
     * @example github
     *
     * @var string
     */
    public $platform;

    /**
     * @description The repository ID.
     *
     * @example 103
     *
     * @var int
     */
    public $repoId;

    /**
     * @description The name of the repository.
     *
     * @example aliyun-computenest/quickstart-Lobexxx
     *
     * @var string
     */
    public $repoName;
    protected $_name = [
        'branch' => 'Branch',
        'endpoint' => 'Endpoint',
        'orgId' => 'OrgId',
        'owner' => 'Owner',
        'platform' => 'Platform',
        'repoId' => 'RepoId',
        'repoName' => 'RepoName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->branch) {
            $res['Branch'] = $this->branch;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
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
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }
        if (isset($map['RepoName'])) {
            $model->repoName = $map['RepoName'];
        }

        return $model;
    }
}
