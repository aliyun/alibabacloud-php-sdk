<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\CreateRepositoryResponseBody;

use AlibabaCloud\SDK\Codeup\V20200414\Models\CreateRepositoryResponseBody\result\namespace_;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $defaultBranch;

    /**
     * @var bool
     */
    public $snippetsEnableStatus;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var bool
     */
    public $buildsEnableStatus;

    /**
     * @var string
     */
    public $webUrl;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $tagList;

    /**
     * @var bool
     */
    public $public;

    /**
     * @var string
     */
    public $pathWithNamespace;

    /**
     * @var string
     */
    public $visibilityLevel;

    /**
     * @var bool
     */
    public $wikiEnableStatus;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $lastActivityAt;

    /**
     * @var string
     */
    public $avatarUrl;

    /**
     * @var bool
     */
    public $archive;

    /**
     * @var namespace_
     */
    public $namespace;

    /**
     * @var bool
     */
    public $issuesEnableStatus;

    /**
     * @var bool
     */
    public $demoProjectStatus;

    /**
     * @var int
     */
    public $creatorId;

    /**
     * @var string
     */
    public $httpUrlToRepo;

    /**
     * @var string
     */
    public $nameWithNamespace;

    /**
     * @var bool
     */
    public $mergeRequestEnableStatus;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $sshUrlToRepo;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'defaultBranch'            => 'DefaultBranch',
        'snippetsEnableStatus'     => 'SnippetsEnableStatus',
        'createdAt'                => 'CreatedAt',
        'buildsEnableStatus'       => 'BuildsEnableStatus',
        'webUrl'                   => 'WebUrl',
        'description'              => 'Description',
        'tagList'                  => 'TagList',
        'public'                   => 'Public',
        'pathWithNamespace'        => 'PathWithNamespace',
        'visibilityLevel'          => 'VisibilityLevel',
        'wikiEnableStatus'         => 'WikiEnableStatus',
        'name'                     => 'Name',
        'lastActivityAt'           => 'LastActivityAt',
        'avatarUrl'                => 'AvatarUrl',
        'archive'                  => 'Archive',
        'namespace'                => 'Namespace',
        'issuesEnableStatus'       => 'IssuesEnableStatus',
        'demoProjectStatus'        => 'DemoProjectStatus',
        'creatorId'                => 'CreatorId',
        'httpUrlToRepo'            => 'HttpUrlToRepo',
        'nameWithNamespace'        => 'NameWithNamespace',
        'mergeRequestEnableStatus' => 'MergeRequestEnableStatus',
        'path'                     => 'Path',
        'sshUrlToRepo'             => 'SshUrlToRepo',
        'id'                       => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultBranch) {
            $res['DefaultBranch'] = $this->defaultBranch;
        }
        if (null !== $this->snippetsEnableStatus) {
            $res['SnippetsEnableStatus'] = $this->snippetsEnableStatus;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->buildsEnableStatus) {
            $res['BuildsEnableStatus'] = $this->buildsEnableStatus;
        }
        if (null !== $this->webUrl) {
            $res['WebUrl'] = $this->webUrl;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->tagList) {
            $res['TagList'] = $this->tagList;
        }
        if (null !== $this->public) {
            $res['Public'] = $this->public;
        }
        if (null !== $this->pathWithNamespace) {
            $res['PathWithNamespace'] = $this->pathWithNamespace;
        }
        if (null !== $this->visibilityLevel) {
            $res['VisibilityLevel'] = $this->visibilityLevel;
        }
        if (null !== $this->wikiEnableStatus) {
            $res['WikiEnableStatus'] = $this->wikiEnableStatus;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->lastActivityAt) {
            $res['LastActivityAt'] = $this->lastActivityAt;
        }
        if (null !== $this->avatarUrl) {
            $res['AvatarUrl'] = $this->avatarUrl;
        }
        if (null !== $this->archive) {
            $res['Archive'] = $this->archive;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = null !== $this->namespace ? $this->namespace->toMap() : null;
        }
        if (null !== $this->issuesEnableStatus) {
            $res['IssuesEnableStatus'] = $this->issuesEnableStatus;
        }
        if (null !== $this->demoProjectStatus) {
            $res['DemoProjectStatus'] = $this->demoProjectStatus;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->httpUrlToRepo) {
            $res['HttpUrlToRepo'] = $this->httpUrlToRepo;
        }
        if (null !== $this->nameWithNamespace) {
            $res['NameWithNamespace'] = $this->nameWithNamespace;
        }
        if (null !== $this->mergeRequestEnableStatus) {
            $res['MergeRequestEnableStatus'] = $this->mergeRequestEnableStatus;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->sshUrlToRepo) {
            $res['SshUrlToRepo'] = $this->sshUrlToRepo;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['DefaultBranch'])) {
            $model->defaultBranch = $map['DefaultBranch'];
        }
        if (isset($map['SnippetsEnableStatus'])) {
            $model->snippetsEnableStatus = $map['SnippetsEnableStatus'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['BuildsEnableStatus'])) {
            $model->buildsEnableStatus = $map['BuildsEnableStatus'];
        }
        if (isset($map['WebUrl'])) {
            $model->webUrl = $map['WebUrl'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['TagList'])) {
            if (!empty($map['TagList'])) {
                $model->tagList = $map['TagList'];
            }
        }
        if (isset($map['Public'])) {
            $model->public = $map['Public'];
        }
        if (isset($map['PathWithNamespace'])) {
            $model->pathWithNamespace = $map['PathWithNamespace'];
        }
        if (isset($map['VisibilityLevel'])) {
            $model->visibilityLevel = $map['VisibilityLevel'];
        }
        if (isset($map['WikiEnableStatus'])) {
            $model->wikiEnableStatus = $map['WikiEnableStatus'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['LastActivityAt'])) {
            $model->lastActivityAt = $map['LastActivityAt'];
        }
        if (isset($map['AvatarUrl'])) {
            $model->avatarUrl = $map['AvatarUrl'];
        }
        if (isset($map['Archive'])) {
            $model->archive = $map['Archive'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = namespace_::fromMap($map['Namespace']);
        }
        if (isset($map['IssuesEnableStatus'])) {
            $model->issuesEnableStatus = $map['IssuesEnableStatus'];
        }
        if (isset($map['DemoProjectStatus'])) {
            $model->demoProjectStatus = $map['DemoProjectStatus'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['HttpUrlToRepo'])) {
            $model->httpUrlToRepo = $map['HttpUrlToRepo'];
        }
        if (isset($map['NameWithNamespace'])) {
            $model->nameWithNamespace = $map['NameWithNamespace'];
        }
        if (isset($map['MergeRequestEnableStatus'])) {
            $model->mergeRequestEnableStatus = $map['MergeRequestEnableStatus'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['SshUrlToRepo'])) {
            $model->sshUrlToRepo = $map['SshUrlToRepo'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
