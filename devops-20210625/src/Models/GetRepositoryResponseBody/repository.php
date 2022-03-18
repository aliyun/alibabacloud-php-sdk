<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetRepositoryResponseBody;

use AlibabaCloud\SDK\Devops\V20210625\Models\GetRepositoryResponseBody\repository\namespace_;
use AlibabaCloud\Tea\Model;

class repository extends Model
{
    /**
     * @description 归档标识
     *
     * @var bool
     */
    public $archive;

    /**
     * @description 代码库头像地址
     *
     * @var string
     */
    public $avatarUrl;

    /**
     * @description 创建时间
     *
     * @var string
     */
    public $createdAt;

    /**
     * @description 创建者ID
     *
     * @var int
     */
    public $creatorId;

    /**
     * @description 默认分支
     *
     * @var string
     */
    public $defaultBranch;

    /**
     * @description DEMO库标识
     *
     * @var bool
     */
    public $demoProjectStatus;

    /**
     * @description 描述
     *
     * @var string
     */
    public $description;

    /**
     * @description HTTP克隆地址
     *
     * @var string
     */
    public $httpUrlToRepository;

    /**
     * @description 代码库ID
     *
     * @var int
     */
    public $id;

    /**
     * @description 最后活跃时间
     *
     * @var string
     */
    public $lastActivityAt;

    /**
     * @description 名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 名称（含父名称）
     *
     * @var string
     */
    public $nameWithNamespace;

    /**
     * @description 父空间
     *
     * @var namespace_
     */
    public $namespace;

    /**
     * @description 路径
     *
     * @var string
     */
    public $path;

    /**
     * @description 路径（含父路径）
     *
     * @var string
     */
    public $pathWithNamespace;

    /**
     * @description SSH克隆地址
     *
     * @var string
     */
    public $sshUrlToRepository;

    /**
     * @description 可见性。0：私有，10：内部公开
     *
     * @var int
     */
    public $visibilityLevel;

    /**
     * @description 页面访问地址
     *
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
