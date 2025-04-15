<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\BuildPipelineRun;

use AlibabaCloud\Dara\Model;

class codeConfig extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $branchName;

    /**
     * @var string
     */
    public $commitId;

    /**
     * @var string
     */
    public $commitUrl;

    /**
     * @var string
     */
    public $organizationId;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var string
     */
    public $repoFullName;

    /**
     * @var string
     */
    public $repoId;
    protected $_name = [
        'accountId' => 'AccountId',
        'branchName' => 'BranchName',
        'commitId' => 'CommitId',
        'commitUrl' => 'CommitUrl',
        'organizationId' => 'OrganizationId',
        'provider' => 'Provider',
        'repoFullName' => 'RepoFullName',
        'repoId' => 'RepoId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        if (null !== $this->branchName) {
            $res['BranchName'] = $this->branchName;
        }

        if (null !== $this->commitId) {
            $res['CommitId'] = $this->commitId;
        }

        if (null !== $this->commitUrl) {
            $res['CommitUrl'] = $this->commitUrl;
        }

        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }

        if (null !== $this->provider) {
            $res['Provider'] = $this->provider;
        }

        if (null !== $this->repoFullName) {
            $res['RepoFullName'] = $this->repoFullName;
        }

        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
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
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        if (isset($map['BranchName'])) {
            $model->branchName = $map['BranchName'];
        }

        if (isset($map['CommitId'])) {
            $model->commitId = $map['CommitId'];
        }

        if (isset($map['CommitUrl'])) {
            $model->commitUrl = $map['CommitUrl'];
        }

        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }

        if (isset($map['Provider'])) {
            $model->provider = $map['Provider'];
        }

        if (isset($map['RepoFullName'])) {
            $model->repoFullName = $map['RepoFullName'];
        }

        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }

        return $model;
    }
}
