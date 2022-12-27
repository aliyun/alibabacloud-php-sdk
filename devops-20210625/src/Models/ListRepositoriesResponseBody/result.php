<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListRepositoriesResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $id;

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
    public $archive;

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
     * @var string
     */
    public $description;

    /**
     * @example ""
     *
     * @var string
     */
    public $importStatus;

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
     * @example 745
     *
     * @var int
     */
    public $namespaceId;

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
     * @example false
     *
     * @var bool
     */
    public $star;

    /**
     * @example 0
     *
     * @var int
     */
    public $starCount;

    /**
     * @example 2022-01-14T21:08:26+08:00
     *
     * @var string
     */
    public $updatedAt;

    /**
     * @example 0
     *
     * @var string
     */
    public $visibilityLevel;

    /**
     * @example ""
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
