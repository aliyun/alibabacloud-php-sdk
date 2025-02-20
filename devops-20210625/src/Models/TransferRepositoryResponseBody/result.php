<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\TransferRepositoryResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $accessLevel;
    /**
     * @var bool
     */
    public $archived;
    /**
     * @var string
     */
    public $createdAt;
    /**
     * @var int
     */
    public $creatorId;
    /**
     * @var bool
     */
    public $demoProject;
    /**
     * @var string
     */
    public $description;
    /**
     * @var bool
     */
    public $encrypted;
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
     * @var int
     */
    public $namespaceId;
    /**
     * @var string
     */
    public $path;
    /**
     * @var string
     */
    public $pathWithNamespace;
    /**
     * @var int
     */
    public $starCount;
    /**
     * @var bool
     */
    public $starred;
    /**
     * @var string
     */
    public $updatedAt;
    /**
     * @var int
     */
    public $visibilityLevel;
    /**
     * @var string
     */
    public $webUrl;
    protected $_name = [
        'accessLevel'       => 'accessLevel',
        'archived'          => 'archived',
        'createdAt'         => 'createdAt',
        'creatorId'         => 'creatorId',
        'demoProject'       => 'demoProject',
        'description'       => 'description',
        'encrypted'         => 'encrypted',
        'id'                => 'id',
        'lastActivityAt'    => 'lastActivityAt',
        'name'              => 'name',
        'nameWithNamespace' => 'nameWithNamespace',
        'namespaceId'       => 'namespaceId',
        'path'              => 'path',
        'pathWithNamespace' => 'pathWithNamespace',
        'starCount'         => 'starCount',
        'starred'           => 'starred',
        'updatedAt'         => 'updatedAt',
        'visibilityLevel'   => 'visibilityLevel',
        'webUrl'            => 'webUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->demoProject) {
            $res['demoProject'] = $this->demoProject;
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

        if (null !== $this->starCount) {
            $res['starCount'] = $this->starCount;
        }

        if (null !== $this->starred) {
            $res['starred'] = $this->starred;
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
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

        if (isset($map['demoProject'])) {
            $model->demoProject = $map['demoProject'];
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

        if (isset($map['starCount'])) {
            $model->starCount = $map['starCount'];
        }

        if (isset($map['starred'])) {
            $model->starred = $map['starred'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
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
