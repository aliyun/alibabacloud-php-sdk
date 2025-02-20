<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\UpdateGroupResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $avatarUrl;
    /**
     * @var string
     */
    public $description;
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
     * @var string
     */
    public $type;
    /**
     * @var int
     */
    public $visibilityLevel;
    /**
     * @var string
     */
    public $webUrl;
    protected $_name = [
        'avatarUrl'         => 'avatarUrl',
        'description'       => 'description',
        'id'                => 'id',
        'name'              => 'name',
        'nameWithNamespace' => 'nameWithNamespace',
        'ownerId'           => 'ownerId',
        'parentId'          => 'parentId',
        'path'              => 'path',
        'pathWithNamespace' => 'pathWithNamespace',
        'type'              => 'type',
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
        if (null !== $this->avatarUrl) {
            $res['avatarUrl'] = $this->avatarUrl;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
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

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['avatarUrl'])) {
            $model->avatarUrl = $map['avatarUrl'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
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

        if (isset($map['type'])) {
            $model->type = $map['type'];
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
