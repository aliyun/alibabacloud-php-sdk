<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\ListGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $createdAt;

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
        'type'              => 'Type',
        'createdAt'         => 'CreatedAt',
        'ownerId'           => 'OwnerId',
        'parentId'          => 'ParentId',
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
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
