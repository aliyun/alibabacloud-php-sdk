<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class UpdateGroupRequest extends Model
{
    /**
     * @example f0b1e61dxxxxxxx975a93f9129d2513
     *
     * @var string
     */
    public $accessToken;

    /**
     * @example https://tcs-devops.aliyuncs.com/thumbnail/112afcb7a6a35c3f67f1bea827c4/w/100/h/100
     *
     * @var string
     */
    public $avatarUrl;

    /**
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example codeup_group
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example codeup_group
     *
     * @var string
     */
    public $path;

    /**
     * @description This parameter is required.
     *
     * @example org/group/subgroup/here
     *
     * @var string
     */
    public $pathWithNamespace;

    /**
     * @example 10
     *
     * @var int
     */
    public $visibilityLevel;

    /**
     * @description This parameter is required.
     *
     * @example 1e9903d8b3f1xxxxxf9286ef5
     *
     * @var string
     */
    public $organizationId;
    protected $_name = [
        'accessToken'       => 'accessToken',
        'avatarUrl'         => 'avatarUrl',
        'description'       => 'description',
        'name'              => 'name',
        'path'              => 'path',
        'pathWithNamespace' => 'pathWithNamespace',
        'visibilityLevel'   => 'visibilityLevel',
        'organizationId'    => 'organizationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['accessToken'] = $this->accessToken;
        }
        if (null !== $this->avatarUrl) {
            $res['avatarUrl'] = $this->avatarUrl;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->path) {
            $res['path'] = $this->path;
        }
        if (null !== $this->pathWithNamespace) {
            $res['pathWithNamespace'] = $this->pathWithNamespace;
        }
        if (null !== $this->visibilityLevel) {
            $res['visibilityLevel'] = $this->visibilityLevel;
        }
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessToken'])) {
            $model->accessToken = $map['accessToken'];
        }
        if (isset($map['avatarUrl'])) {
            $model->avatarUrl = $map['avatarUrl'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['path'])) {
            $model->path = $map['path'];
        }
        if (isset($map['pathWithNamespace'])) {
            $model->pathWithNamespace = $map['pathWithNamespace'];
        }
        if (isset($map['visibilityLevel'])) {
            $model->visibilityLevel = $map['visibilityLevel'];
        }
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }

        return $model;
    }
}
