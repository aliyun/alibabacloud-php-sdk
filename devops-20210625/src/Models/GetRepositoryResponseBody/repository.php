<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetRepositoryResponseBody;

use AlibabaCloud\SDK\Devops\V20210625\Models\GetRepositoryResponseBody\repository\namespace_;
use AlibabaCloud\Tea\Model;

class repository extends Model
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
    public $httpUrlToRepository;

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
    public $sshUrlToRepository;

    /**
     * @var int
     */
    public $visibilityLevel;

    /**
     * @var string
     */
    public $webUrl;
    protected $_name = [
        'archive'             => 'archive',
        'avatarUrl'           => 'avatarUrl',
        'createdAt'           => 'createdAt',
        'creatorId'           => 'creatorId',
        'defaultBranch'       => 'defaultBranch',
        'demoProjectStatus'   => 'demoProjectStatus',
        'description'         => 'description',
        'httpUrlToRepository' => 'httpUrlToRepository',
        'id'                  => 'id',
        'lastActivityAt'      => 'lastActivityAt',
        'name'                => 'name',
        'nameWithNamespace'   => 'nameWithNamespace',
        'namespace'           => 'namespace',
        'path'                => 'path',
        'pathWithNamespace'   => 'pathWithNamespace',
        'sshUrlToRepository'  => 'sshUrlToRepository',
        'visibilityLevel'     => 'visibilityLevel',
        'webUrl'              => 'webUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->archive) {
            $res['archive'] = $this->archive;
        }
        if (null !== $this->avatarUrl) {
            $res['avatarUrl'] = $this->avatarUrl;
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
        if (null !== $this->demoProjectStatus) {
            $res['demoProjectStatus'] = $this->demoProjectStatus;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->httpUrlToRepository) {
            $res['httpUrlToRepository'] = $this->httpUrlToRepository;
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
            $res['namespace'] = null !== $this->namespace ? $this->namespace->toMap() : null;
        }
        if (null !== $this->path) {
            $res['path'] = $this->path;
        }
        if (null !== $this->pathWithNamespace) {
            $res['pathWithNamespace'] = $this->pathWithNamespace;
        }
        if (null !== $this->sshUrlToRepository) {
            $res['sshUrlToRepository'] = $this->sshUrlToRepository;
        }
        if (null !== $this->visibilityLevel) {
            $res['visibilityLevel'] = $this->visibilityLevel;
        }
        if (null !== $this->webUrl) {
            $res['webUrl'] = $this->webUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return repository
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['archive'])) {
            $model->archive = $map['archive'];
        }
        if (isset($map['avatarUrl'])) {
            $model->avatarUrl = $map['avatarUrl'];
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
        if (isset($map['demoProjectStatus'])) {
            $model->demoProjectStatus = $map['demoProjectStatus'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['httpUrlToRepository'])) {
            $model->httpUrlToRepository = $map['httpUrlToRepository'];
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
        if (isset($map['sshUrlToRepository'])) {
            $model->sshUrlToRepository = $map['sshUrlToRepository'];
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
