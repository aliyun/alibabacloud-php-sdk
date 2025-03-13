<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\UpdateRepositoryResponseBody\result;

use AlibabaCloud\Tea\Model;

class namespace_ extends Model
{
    /**
     * @example https://xxx
     *
     * @var string
     */
    public $avatar;

    /**
     * @example 2022-02-18 14:24:54
     *
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 29322
     *
     * @var int
     */
    public $id;

    /**
     * @example codeup
     *
     * @var string
     */
    public $name;

    /**
     * @example 19238
     *
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $path;

    /**
     * @example 2022-03-18 14:24:54
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
        'avatar'          => 'avatar',
        'createdAt'       => 'createdAt',
        'description'     => 'description',
        'id'              => 'id',
        'name'            => 'name',
        'ownerId'         => 'ownerId',
        'path'            => 'path',
        'updatedAt'       => 'updatedAt',
        'visibilityLevel' => 'visibilityLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avatar) {
            $res['avatar'] = $this->avatar;
        }
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
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
        if (null !== $this->ownerId) {
            $res['ownerId'] = $this->ownerId;
        }
        if (null !== $this->path) {
            $res['path'] = $this->path;
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
     * @return namespace_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['avatar'])) {
            $model->avatar = $map['avatar'];
        }
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
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
        if (isset($map['ownerId'])) {
            $model->ownerId = $map['ownerId'];
        }
        if (isset($map['path'])) {
            $model->path = $map['path'];
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
