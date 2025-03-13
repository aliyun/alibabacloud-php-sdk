<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreateRepositoryResponseBody;

use AlibabaCloud\SDK\Devops\V20210625\Models\CreateRepositoryResponseBody\result\namespace_;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $importFromSvn;

    /**
     * @example false
     *
     * @var bool
     */
    public $archived;

    /**
     * @example ""
     *
     * @var string
     */
    public $avatarUrl;

    /**
     * @example 2022-01-14T21:08:26+08:00
     *
     * @var string
     */
    public $createdAt;

    /**
     * @example 1233
     *
     * @var int
     */
    public $creatorId;

    /**
     * @example master
     *
     * @var string
     */
    public $defaultBranch;

    /**
     * @example false
     *
     * @var bool
     */
    public $demoProject;

    /**
     * @var string
     */
    public $description;

    /**
     * @example ""
     *
     * @var string
     */
    public $httpUrlToRepo;

    /**
     * @description id
     *
     * @example 2959
     *
     * @var int
     */
    public $id;

    /**
     * @example 2022-01-14T21:08:26+08:00
     *
     * @var string
     */
    public $lastActivityAt;

    /**
     * @example codeupTest
     *
     * @var string
     */
    public $name;

    /**
     * @example codeup-test-org / test-codeup
     *
     * @var string
     */
    public $nameWithNamespace;

    /**
     * @var namespace_
     */
    public $namespace;

    /**
     * @example test-codeup
     *
     * @var string
     */
    public $path;

    /**
     * @example codeup-test-org/test-codeup
     *
     * @var string
     */
    public $pathWithNamespace;

    /**
     * @example ""
     *
     * @var string
     */
    public $sshUrlToRepo;

    /**
     * @example 0
     *
     * @var string
     */
    public $visibilityLevel;

    /**
     * @description web url
     *
     * @example ""
     *
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
    }

    public function toMap()
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
            $res['namespace'] = null !== $this->namespace ? $this->namespace->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return result
     */
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
