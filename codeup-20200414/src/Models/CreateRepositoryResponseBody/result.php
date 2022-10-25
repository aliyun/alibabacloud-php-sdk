<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\CreateRepositoryResponseBody;

use AlibabaCloud\SDK\Codeup\V20200414\Models\CreateRepositoryResponseBody\result\namespace_;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var bool
     */
    public $archive;

    /**
     * @var string
     */
    public $avatarUrl;

    /**
     * @var bool
     */
    public $buildsEnableStatus;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var int
     */
    public $creatorId;

    /**
     * @var string
     */
    public $defaultBranch;

    /**
     * @var bool
     */
    public $demoProjectStatus;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $httpUrlToRepo;

    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $issuesEnableStatus;

    /**
     * @var string
     */
    public $lastActivityAt;

    /**
     * @var bool
     */
    public $mergeRequestEnableStatus;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nameWithNamespace;

    /**
     * @var namespace_
     */
    public $namespace;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $pathWithNamespace;

    /**
     * @var bool
     */
    public $public;

    /**
     * @var bool
     */
    public $snippetsEnableStatus;

    /**
     * @var string
     */
    public $sshUrlToRepo;

    /**
     * @var string[]
     */
    public $tagList;

    /**
     * @var string
     */
    public $visibilityLevel;

    /**
     * @var string
     */
    public $webUrl;

    /**
     * @var bool
     */
    public $wikiEnableStatus;
    protected $_name = [
        'archive'                  => 'Archive',
        'avatarUrl'                => 'AvatarUrl',
        'buildsEnableStatus'       => 'BuildsEnableStatus',
        'createdAt'                => 'CreatedAt',
        'creatorId'                => 'CreatorId',
        'defaultBranch'            => 'DefaultBranch',
        'demoProjectStatus'        => 'DemoProjectStatus',
        'description'              => 'Description',
        'httpUrlToRepo'            => 'HttpUrlToRepo',
        'id'                       => 'Id',
        'issuesEnableStatus'       => 'IssuesEnableStatus',
        'lastActivityAt'           => 'LastActivityAt',
        'mergeRequestEnableStatus' => 'MergeRequestEnableStatus',
        'name'                     => 'Name',
        'nameWithNamespace'        => 'NameWithNamespace',
        'namespace'                => 'Namespace',
        'path'                     => 'Path',
        'pathWithNamespace'        => 'PathWithNamespace',
        'public'                   => 'Public',
        'snippetsEnableStatus'     => 'SnippetsEnableStatus',
        'sshUrlToRepo'             => 'SshUrlToRepo',
        'tagList'                  => 'TagList',
        'visibilityLevel'          => 'VisibilityLevel',
        'webUrl'                   => 'WebUrl',
        'wikiEnableStatus'         => 'WikiEnableStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->archive) {
            $res['Archive'] = $this->archive;
        }
        if (null !== $this->avatarUrl) {
            $res['AvatarUrl'] = $this->avatarUrl;
        }
        if (null !== $this->buildsEnableStatus) {
            $res['BuildsEnableStatus'] = $this->buildsEnableStatus;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->defaultBranch) {
            $res['DefaultBranch'] = $this->defaultBranch;
        }
        if (null !== $this->demoProjectStatus) {
            $res['DemoProjectStatus'] = $this->demoProjectStatus;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->httpUrlToRepo) {
            $res['HttpUrlToRepo'] = $this->httpUrlToRepo;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->issuesEnableStatus) {
            $res['IssuesEnableStatus'] = $this->issuesEnableStatus;
        }
        if (null !== $this->lastActivityAt) {
            $res['LastActivityAt'] = $this->lastActivityAt;
        }
        if (null !== $this->mergeRequestEnableStatus) {
            $res['MergeRequestEnableStatus'] = $this->mergeRequestEnableStatus;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nameWithNamespace) {
            $res['NameWithNamespace'] = $this->nameWithNamespace;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = null !== $this->namespace ? $this->namespace->toMap() : null;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->pathWithNamespace) {
            $res['PathWithNamespace'] = $this->pathWithNamespace;
        }
        if (null !== $this->public) {
            $res['Public'] = $this->public;
        }
        if (null !== $this->snippetsEnableStatus) {
            $res['SnippetsEnableStatus'] = $this->snippetsEnableStatus;
        }
        if (null !== $this->sshUrlToRepo) {
            $res['SshUrlToRepo'] = $this->sshUrlToRepo;
        }
        if (null !== $this->tagList) {
            $res['TagList'] = $this->tagList;
        }
        if (null !== $this->visibilityLevel) {
            $res['VisibilityLevel'] = $this->visibilityLevel;
        }
        if (null !== $this->webUrl) {
            $res['WebUrl'] = $this->webUrl;
        }
        if (null !== $this->wikiEnableStatus) {
            $res['WikiEnableStatus'] = $this->wikiEnableStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Archive'])) {
            $model->archive = $map['Archive'];
        }
        if (isset($map['AvatarUrl'])) {
            $model->avatarUrl = $map['AvatarUrl'];
        }
        if (isset($map['BuildsEnableStatus'])) {
            $model->buildsEnableStatus = $map['BuildsEnableStatus'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['DefaultBranch'])) {
            $model->defaultBranch = $map['DefaultBranch'];
        }
        if (isset($map['DemoProjectStatus'])) {
            $model->demoProjectStatus = $map['DemoProjectStatus'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['HttpUrlToRepo'])) {
            $model->httpUrlToRepo = $map['HttpUrlToRepo'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IssuesEnableStatus'])) {
            $model->issuesEnableStatus = $map['IssuesEnableStatus'];
        }
        if (isset($map['LastActivityAt'])) {
            $model->lastActivityAt = $map['LastActivityAt'];
        }
        if (isset($map['MergeRequestEnableStatus'])) {
            $model->mergeRequestEnableStatus = $map['MergeRequestEnableStatus'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NameWithNamespace'])) {
            $model->nameWithNamespace = $map['NameWithNamespace'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = namespace_::fromMap($map['Namespace']);
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['PathWithNamespace'])) {
            $model->pathWithNamespace = $map['PathWithNamespace'];
        }
        if (isset($map['Public'])) {
            $model->public = $map['Public'];
        }
        if (isset($map['SnippetsEnableStatus'])) {
            $model->snippetsEnableStatus = $map['SnippetsEnableStatus'];
        }
        if (isset($map['SshUrlToRepo'])) {
            $model->sshUrlToRepo = $map['SshUrlToRepo'];
        }
        if (isset($map['TagList'])) {
            if (!empty($map['TagList'])) {
                $model->tagList = $map['TagList'];
            }
        }
        if (isset($map['VisibilityLevel'])) {
            $model->visibilityLevel = $map['VisibilityLevel'];
        }
        if (isset($map['WebUrl'])) {
            $model->webUrl = $map['WebUrl'];
        }
        if (isset($map['WikiEnableStatus'])) {
            $model->wikiEnableStatus = $map['WikiEnableStatus'];
        }

        return $model;
    }
}
