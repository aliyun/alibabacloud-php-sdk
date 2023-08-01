<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListUserResourcesResponseBody\result\repositoryInfos;

use AlibabaCloud\Tea\Model;

class repositoryInfo extends Model
{
    /**
     * @example 40
     *
     * @var int
     */
    public $accessLevel;

    /**
     * @example false
     *
     * @var bool
     */
    public $archived;

    /**
     * @example 2022-01-14T21:08:26+08:00
     *
     * @var string
     */
    public $createdAt;

    /**
     * @example 12679
     *
     * @var int
     */
    public $creatorId;

    /**
     * @var string
     */
    public $description;

    /**
     * @example false
     *
     * @var bool
     */
    public $encrypted;

    /**
     * @example 37229
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
     * @example test-repo
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nameWithNamespace;

    /**
     * @example 600002
     *
     * @var int
     */
    public $namespaceId;

    /**
     * @example test-repo
     *
     * @var string
     */
    public $path;

    /**
     * @example test-org/test-group/test-repo
     *
     * @var string
     */
    public $pathWithNamespace;

    /**
     * @example 2022-01-14T21:08:26+08:00
     *
     * @var string
     */
    public $updatedAt;

    /**
     * @example 0
     *
     * @var int
     */
    public $visibilityLevel;
    protected $_name = [
        'accessLevel'       => 'accessLevel',
        'archived'          => 'archived',
        'createdAt'         => 'createdAt',
        'creatorId'         => 'creatorId',
        'description'       => 'description',
        'encrypted'         => 'encrypted',
        'id'                => 'id',
        'lastActivityAt'    => 'lastActivityAt',
        'name'              => 'name',
        'nameWithNamespace' => 'nameWithNamespace',
        'namespaceId'       => 'namespaceId',
        'path'              => 'path',
        'pathWithNamespace' => 'pathWithNamespace',
        'updatedAt'         => 'updatedAt',
        'visibilityLevel'   => 'visibilityLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessLevel) {
            $res['accessLevel'] = $this->accessLevel;
        }
        if (null !== $this->archived) {
            $res['archived'] = $this->archived;
        }
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }
        if (null !== $this->creatorId) {
            $res['creatorId'] = $this->creatorId;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->encrypted) {
            $res['encrypted'] = $this->encrypted;
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
        if (null !== $this->namespaceId) {
            $res['namespaceId'] = $this->namespaceId;
        }
        if (null !== $this->path) {
            $res['path'] = $this->path;
        }
        if (null !== $this->pathWithNamespace) {
            $res['pathWithNamespace'] = $this->pathWithNamespace;
        }
        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
        }
        if (null !== $this->visibilityLevel) {
            $res['visibilityLevel'] = $this->visibilityLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return repositoryInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessLevel'])) {
            $model->accessLevel = $map['accessLevel'];
        }
        if (isset($map['archived'])) {
            $model->archived = $map['archived'];
        }
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }
        if (isset($map['creatorId'])) {
            $model->creatorId = $map['creatorId'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['encrypted'])) {
            $model->encrypted = $map['encrypted'];
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
        if (isset($map['namespaceId'])) {
            $model->namespaceId = $map['namespaceId'];
        }
        if (isset($map['path'])) {
            $model->path = $map['path'];
        }
        if (isset($map['pathWithNamespace'])) {
            $model->pathWithNamespace = $map['pathWithNamespace'];
        }
        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }
        if (isset($map['visibilityLevel'])) {
            $model->visibilityLevel = $map['visibilityLevel'];
        }

        return $model;
    }
}
