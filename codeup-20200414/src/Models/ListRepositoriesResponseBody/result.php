<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\ListRepositoriesResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $lastActivityAt;

    /**
     * @var int
     */
    public $namespaceId;

    /**
     * @var string
     */
    public $avatarUrl;

    /**
     * @var int
     */
    public $starCount;

    /**
     * @var bool
     */
    public $archive;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var bool
     */
    public $demoProjectStatus;

    /**
     * @var bool
     */
    public $star;

    /**
     * @var string
     */
    public $importStatus;

    /**
     * @var string
     */
    public $webUrl;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $nameWithNamespace;

    /**
     * @var string
     */
    public $pathWithNamespace;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $visibilityLevel;

    /**
     * @var int
     */
    public $accessLevel;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'lastActivityAt'    => 'LastActivityAt',
        'namespaceId'       => 'NamespaceId',
        'avatarUrl'         => 'AvatarUrl',
        'starCount'         => 'StarCount',
        'archive'           => 'Archive',
        'createdAt'         => 'CreatedAt',
        'demoProjectStatus' => 'DemoProjectStatus',
        'star'              => 'Star',
        'importStatus'      => 'ImportStatus',
        'webUrl'            => 'WebUrl',
        'description'       => 'Description',
        'nameWithNamespace' => 'NameWithNamespace',
        'pathWithNamespace' => 'PathWithNamespace',
        'path'              => 'Path',
        'visibilityLevel'   => 'VisibilityLevel',
        'accessLevel'       => 'AccessLevel',
        'updatedAt'         => 'UpdatedAt',
        'name'              => 'Name',
        'id'                => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lastActivityAt) {
            $res['LastActivityAt'] = $this->lastActivityAt;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->avatarUrl) {
            $res['AvatarUrl'] = $this->avatarUrl;
        }
        if (null !== $this->starCount) {
            $res['StarCount'] = $this->starCount;
        }
        if (null !== $this->archive) {
            $res['Archive'] = $this->archive;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->demoProjectStatus) {
            $res['DemoProjectStatus'] = $this->demoProjectStatus;
        }
        if (null !== $this->star) {
            $res['Star'] = $this->star;
        }
        if (null !== $this->importStatus) {
            $res['ImportStatus'] = $this->importStatus;
        }
        if (null !== $this->webUrl) {
            $res['WebUrl'] = $this->webUrl;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->nameWithNamespace) {
            $res['NameWithNamespace'] = $this->nameWithNamespace;
        }
        if (null !== $this->pathWithNamespace) {
            $res['PathWithNamespace'] = $this->pathWithNamespace;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->visibilityLevel) {
            $res['VisibilityLevel'] = $this->visibilityLevel;
        }
        if (null !== $this->accessLevel) {
            $res['AccessLevel'] = $this->accessLevel;
        }
        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['LastActivityAt'])) {
            $model->lastActivityAt = $map['LastActivityAt'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['AvatarUrl'])) {
            $model->avatarUrl = $map['AvatarUrl'];
        }
        if (isset($map['StarCount'])) {
            $model->starCount = $map['StarCount'];
        }
        if (isset($map['Archive'])) {
            $model->archive = $map['Archive'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['DemoProjectStatus'])) {
            $model->demoProjectStatus = $map['DemoProjectStatus'];
        }
        if (isset($map['Star'])) {
            $model->star = $map['Star'];
        }
        if (isset($map['ImportStatus'])) {
            $model->importStatus = $map['ImportStatus'];
        }
        if (isset($map['WebUrl'])) {
            $model->webUrl = $map['WebUrl'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['NameWithNamespace'])) {
            $model->nameWithNamespace = $map['NameWithNamespace'];
        }
        if (isset($map['PathWithNamespace'])) {
            $model->pathWithNamespace = $map['PathWithNamespace'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['VisibilityLevel'])) {
            $model->visibilityLevel = $map['VisibilityLevel'];
        }
        if (isset($map['AccessLevel'])) {
            $model->accessLevel = $map['AccessLevel'];
        }
        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
