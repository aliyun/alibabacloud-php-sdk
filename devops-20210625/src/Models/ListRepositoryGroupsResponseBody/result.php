<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListRepositoryGroupsResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $accessLevel;
    /**
     * @var string
     */
    public $avatarUrl;
    /**
     * @var string
     */
    public $createdAt;
    /**
     * @var string
     */
    public $description;
    /**
     * @var int
     */
    public $groupCount;
    /**
     * @var int
     */
    public $id;
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
    public $ownerId;
    /**
     * @var int
     */
    public $parentId;
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
    public $projectCount;
    /**
     * @var string
     */
    public $type;
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
        'avatarUrl'         => 'avatarUrl',
        'createdAt'         => 'createdAt',
        'description'       => 'description',
        'groupCount'        => 'groupCount',
        'id'                => 'id',
        'name'              => 'name',
        'nameWithNamespace' => 'nameWithNamespace',
        'ownerId'           => 'ownerId',
        'parentId'          => 'parentId',
        'path'              => 'path',
        'pathWithNamespace' => 'pathWithNamespace',
        'projectCount'      => 'projectCount',
        'type'              => 'type',
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

        if (null !== $this->avatarUrl) {
            $res['avatarUrl'] = $this->avatarUrl;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->groupCount) {
            $res['groupCount'] = $this->groupCount;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->nameWithNamespace) {
            $res['nameWithNamespace'] = $this->nameWithNamespace;
        }

        if (null !== $this->ownerId) {
            $res['ownerId'] = $this->ownerId;
        }

        if (null !== $this->parentId) {
            $res['parentId'] = $this->parentId;
        }

        if (null !== $this->path) {
            $res['path'] = $this->path;
        }

        if (null !== $this->pathWithNamespace) {
            $res['pathWithNamespace'] = $this->pathWithNamespace;
        }

        if (null !== $this->projectCount) {
            $res['projectCount'] = $this->projectCount;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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

        if (isset($map['avatarUrl'])) {
            $model->avatarUrl = $map['avatarUrl'];
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['groupCount'])) {
            $model->groupCount = $map['groupCount'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['nameWithNamespace'])) {
            $model->nameWithNamespace = $map['nameWithNamespace'];
        }

        if (isset($map['ownerId'])) {
            $model->ownerId = $map['ownerId'];
        }

        if (isset($map['parentId'])) {
            $model->parentId = $map['parentId'];
        }

        if (isset($map['path'])) {
            $model->path = $map['path'];
        }

        if (isset($map['pathWithNamespace'])) {
            $model->pathWithNamespace = $map['pathWithNamespace'];
        }

        if (isset($map['projectCount'])) {
            $model->projectCount = $map['projectCount'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
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
