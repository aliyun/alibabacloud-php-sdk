<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\UpdateRepositoryResponseBody;

use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateRepositoryResponseBody\result\namespace_;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var bool
     */
    public $archived;

    /**
     * @var string
     */
    public $avatarUrl;

    /**
     * @var bool
     */
    public $buildsEnabled;

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
    public $issuesEnabled;

    /**
     * @var string
     */
    public $lastActivityAt;

    /**
     * @var bool
     */
    public $mergeRequestsEnabled;

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
    public $snippetsEnabled;

    /**
     * @var string
     */
    public $sshUrlToRepo;

    /**
     * @var int
     */
    public $visibilityLevel;

    /**
     * @var string
     */
    public $webUrl;

    /**
     * @var bool
     */
    public $wikiEnabled;
    protected $_name = [
        'archived'             => 'archived',
        'avatarUrl'            => 'avatarUrl',
        'buildsEnabled'        => 'buildsEnabled',
        'createdAt'            => 'createdAt',
        'creatorId'            => 'creatorId',
        'defaultBranch'        => 'defaultBranch',
        'description'          => 'description',
        'httpUrlToRepo'        => 'httpUrlToRepo',
        'id'                   => 'id',
        'issuesEnabled'        => 'issuesEnabled',
        'lastActivityAt'       => 'lastActivityAt',
        'mergeRequestsEnabled' => 'mergeRequestsEnabled',
        'name'                 => 'name',
        'nameWithNamespace'    => 'nameWithNamespace',
        'namespace'            => 'namespace',
        'path'                 => 'path',
        'pathWithNamespace'    => 'pathWithNamespace',
        'snippetsEnabled'      => 'snippetsEnabled',
        'sshUrlToRepo'         => 'sshUrlToRepo',
        'visibilityLevel'      => 'visibilityLevel',
        'webUrl'               => 'webUrl',
        'wikiEnabled'          => 'wikiEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->archived) {
            $res['archived'] = $this->archived;
        }
        if (null !== $this->avatarUrl) {
            $res['avatarUrl'] = $this->avatarUrl;
        }
        if (null !== $this->buildsEnabled) {
            $res['buildsEnabled'] = $this->buildsEnabled;
        }
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }
        if (null !== $this->creatorId) {
            $res['creatorId'] = $this->creatorId;
        }
        if (null !== $this->defaultBranch) {
            $res['defaultBranch'] = $this->defaultBranch;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->httpUrlToRepo) {
            $res['httpUrlToRepo'] = $this->httpUrlToRepo;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->issuesEnabled) {
            $res['issuesEnabled'] = $this->issuesEnabled;
        }
        if (null !== $this->lastActivityAt) {
            $res['lastActivityAt'] = $this->lastActivityAt;
        }
        if (null !== $this->mergeRequestsEnabled) {
            $res['mergeRequestsEnabled'] = $this->mergeRequestsEnabled;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->nameWithNamespace) {
            $res['nameWithNamespace'] = $this->nameWithNamespace;
        }
        if (null !== $this->namespace) {
            $res['namespace'] = null !== $this->namespace ? $this->namespace->toMap() : null;
        }
        if (null !== $this->path) {
            $res['path'] = $this->path;
        }
        if (null !== $this->pathWithNamespace) {
            $res['pathWithNamespace'] = $this->pathWithNamespace;
        }
        if (null !== $this->snippetsEnabled) {
            $res['snippetsEnabled'] = $this->snippetsEnabled;
        }
        if (null !== $this->sshUrlToRepo) {
            $res['sshUrlToRepo'] = $this->sshUrlToRepo;
        }
        if (null !== $this->visibilityLevel) {
            $res['visibilityLevel'] = $this->visibilityLevel;
        }
        if (null !== $this->webUrl) {
            $res['webUrl'] = $this->webUrl;
        }
        if (null !== $this->wikiEnabled) {
            $res['wikiEnabled'] = $this->wikiEnabled;
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
        if (isset($map['archived'])) {
            $model->archived = $map['archived'];
        }
        if (isset($map['avatarUrl'])) {
            $model->avatarUrl = $map['avatarUrl'];
        }
        if (isset($map['buildsEnabled'])) {
            $model->buildsEnabled = $map['buildsEnabled'];
        }
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }
        if (isset($map['creatorId'])) {
            $model->creatorId = $map['creatorId'];
        }
        if (isset($map['defaultBranch'])) {
            $model->defaultBranch = $map['defaultBranch'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['httpUrlToRepo'])) {
            $model->httpUrlToRepo = $map['httpUrlToRepo'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['issuesEnabled'])) {
            $model->issuesEnabled = $map['issuesEnabled'];
        }
        if (isset($map['lastActivityAt'])) {
            $model->lastActivityAt = $map['lastActivityAt'];
        }
        if (isset($map['mergeRequestsEnabled'])) {
            $model->mergeRequestsEnabled = $map['mergeRequestsEnabled'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['nameWithNamespace'])) {
            $model->nameWithNamespace = $map['nameWithNamespace'];
        }
        if (isset($map['namespace'])) {
            $model->namespace = namespace_::fromMap($map['namespace']);
        }
        if (isset($map['path'])) {
            $model->path = $map['path'];
        }
        if (isset($map['pathWithNamespace'])) {
            $model->pathWithNamespace = $map['pathWithNamespace'];
        }
        if (isset($map['snippetsEnabled'])) {
            $model->snippetsEnabled = $map['snippetsEnabled'];
        }
        if (isset($map['sshUrlToRepo'])) {
            $model->sshUrlToRepo = $map['sshUrlToRepo'];
        }
        if (isset($map['visibilityLevel'])) {
            $model->visibilityLevel = $map['visibilityLevel'];
        }
        if (isset($map['webUrl'])) {
            $model->webUrl = $map['webUrl'];
        }
        if (isset($map['wikiEnabled'])) {
            $model->wikiEnabled = $map['wikiEnabled'];
        }

        return $model;
    }
}
