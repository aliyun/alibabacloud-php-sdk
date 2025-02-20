<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreateRepositoryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateRepositoryResponseBody\result\namespace_;

class result extends Model
{
    /**
     * @var bool
     */
    public $importFromSvn;
    /**
     * @var bool
     */
    public $archived;
    /**
     * @var string
     */
    public $avatarUrl;
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
    public $demoProject;
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
     * @var string
     */
    public $lastActivityAt;
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
     * @var string
     */
    public $sshUrlToRepo;
    /**
     * @var string
     */
    public $visibilityLevel;
    /**
     * @var string
     */
    public $webUrl;
    protected $_name = [
        'importFromSvn'     => 'Import_from_svn',
        'archived'          => 'archived',
        'avatarUrl'         => 'avatar_url',
        'createdAt'         => 'createdAt',
        'creatorId'         => 'creatorId',
        'defaultBranch'     => 'defaultBranch',
        'demoProject'       => 'demoProject',
        'description'       => 'description',
        'httpUrlToRepo'     => 'httpUrlToRepo',
        'id'                => 'id',
        'lastActivityAt'    => 'lastActivityAt',
        'name'              => 'name',
        'nameWithNamespace' => 'nameWithNamespace',
        'namespace'         => 'namespace',
        'path'              => 'path',
        'pathWithNamespace' => 'pathWithNamespace',
        'sshUrlToRepo'      => 'sshUrlToRepo',
        'visibilityLevel'   => 'visibilityLevel',
        'webUrl'            => 'webUrl',
    ];

    public function validate()
    {
        if (null !== $this->namespace) {
            $this->namespace->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->importFromSvn) {
            $res['Import_from_svn'] = $this->importFromSvn;
        }

        if (null !== $this->archived) {
            $res['archived'] = $this->archived;
        }

        if (null !== $this->avatarUrl) {
            $res['avatar_url'] = $this->avatarUrl;
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

        if (null !== $this->demoProject) {
            $res['demoProject'] = $this->demoProject;
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

        if (null !== $this->lastActivityAt) {
            $res['lastActivityAt'] = $this->lastActivityAt;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->nameWithNamespace) {
            $res['nameWithNamespace'] = $this->nameWithNamespace;
        }

        if (null !== $this->namespace) {
            $res['namespace'] = null !== $this->namespace ? $this->namespace->toArray($noStream) : $this->namespace;
        }

        if (null !== $this->path) {
            $res['path'] = $this->path;
        }

        if (null !== $this->pathWithNamespace) {
            $res['pathWithNamespace'] = $this->pathWithNamespace;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Import_from_svn'])) {
            $model->importFromSvn = $map['Import_from_svn'];
        }

        if (isset($map['archived'])) {
            $model->archived = $map['archived'];
        }

        if (isset($map['avatar_url'])) {
            $model->avatarUrl = $map['avatar_url'];
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

        if (isset($map['demoProject'])) {
            $model->demoProject = $map['demoProject'];
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

        if (isset($map['lastActivityAt'])) {
            $model->lastActivityAt = $map['lastActivityAt'];
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

        if (isset($map['sshUrlToRepo'])) {
            $model->sshUrlToRepo = $map['sshUrlToRepo'];
        }

        if (isset($map['visibilityLevel'])) {
            $model->visibilityLevel = $map['visibilityLevel'];
        }

        if (isset($map['webUrl'])) {
            $model->webUrl = $map['webUrl'];
        }

        return $model;
    }
}
