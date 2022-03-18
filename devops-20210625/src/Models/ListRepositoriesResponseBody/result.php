<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListRepositoriesResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 代码库Id
     *
     * @var int
     */
    public $id;

    /**
     * @description 当前用户在该代码库上的权限类型
     *
     * @var int
     */
    public $accessLevel;

    /**
     * @description 代码库是否归档
     *
     * @var bool
     */
    public $archive;

    /**
     * @description 头像地址
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
     * @description 代码库描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 代码库导入状态
     *
     * @var string
     */
    public $importStatus;

    /**
     * @description 最后活跃时间
     *
     * @var string
     */
    public $lastActivityAt;

    /**
     * @description 代码库名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 代码库完整名称（含完整组名称）
     *
     * @var string
     */
    public $nameWithNamespace;

    /**
     * @description 上级路径的id
     *
     * @var int
     */
    public $namespaceId;

    /**
     * @description 代码库路径
     *
     * @var string
     */
    public $path;

    /**
     * @description 代码库完整路径（含完整组路径）
     *
     * @var string
     */
    public $pathWithNamespace;

    /**
     * @description 是否被收藏
     *
     * @var bool
     */
    public $star;

    /**
     * @description 被收藏的数量
     *
     * @var int
     */
    public $starCount;

    /**
     * @description 更新时间
     *
     * @var string
     */
    public $updatedAt;

    /**
     * @description 可见性;0标识私有的/10标识企业内公开
     *
     * @var string
     */
    public $visibilityLevel;

    /**
     * @description 页面访问时的URL
     *
     * @var string
     */
    public $webUrl;
    protected $_name = [
        'id'                => 'Id',
        'accessLevel'       => 'accessLevel',
        'archive'           => 'archive',
        'avatarUrl'         => 'avatarUrl',
        'createdAt'         => 'createdAt',
        'description'       => 'description',
        'importStatus'      => 'importStatus',
        'lastActivityAt'    => 'lastActivityAt',
        'name'              => 'name',
        'nameWithNamespace' => 'nameWithNamespace',
        'namespaceId'       => 'namespaceId',
        'path'              => 'path',
        'pathWithNamespace' => 'pathWithNamespace',
        'star'              => 'star',
        'starCount'         => 'starCount',
        'updatedAt'         => 'updatedAt',
        'visibilityLevel'   => 'visibilityLevel',
        'webUrl'            => 'webUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->accessLevel) {
            $res['accessLevel'] = $this->accessLevel;
        }
        if (null !== $this->archive) {
            $res['archive'] = $this->archive;
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
        if (null !== $this->importStatus) {
            $res['importStatus'] = $this->importStatus;
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
        if (null !== $this->star) {
            $res['star'] = $this->star;
        }
        if (null !== $this->starCount) {
            $res['starCount'] = $this->starCount;
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

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['accessLevel'])) {
            $model->accessLevel = $map['accessLevel'];
        }
        if (isset($map['archive'])) {
            $model->archive = $map['archive'];
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
        if (isset($map['importStatus'])) {
            $model->importStatus = $map['importStatus'];
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
        if (isset($map['star'])) {
            $model->star = $map['star'];
        }
        if (isset($map['starCount'])) {
            $model->starCount = $map['starCount'];
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
