<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\ListGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $accessLevel;

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
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $visibilityLevel;

    /**
     * @var string
     */
    public $webUrl;
    protected $_name = [
        'accessLevel'       => 'AccessLevel',
        'createdAt'         => 'CreatedAt',
        'description'       => 'Description',
        'id'                => 'Id',
        'name'              => 'Name',
        'nameWithNamespace' => 'NameWithNamespace',
        'ownerId'           => 'OwnerId',
        'parentId'          => 'ParentId',
        'path'              => 'Path',
        'pathWithNamespace' => 'PathWithNamespace',
        'type'              => 'Type',
        'updatedAt'         => 'UpdatedAt',
        'visibilityLevel'   => 'VisibilityLevel',
        'webUrl'            => 'WebUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessLevel) {
            $res['AccessLevel'] = $this->accessLevel;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nameWithNamespace) {
            $res['NameWithNamespace'] = $this->nameWithNamespace;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->pathWithNamespace) {
            $res['PathWithNamespace'] = $this->pathWithNamespace;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
        }
        if (null !== $this->visibilityLevel) {
            $res['VisibilityLevel'] = $this->visibilityLevel;
        }
        if (null !== $this->webUrl) {
            $res['WebUrl'] = $this->webUrl;
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
        if (isset($map['AccessLevel'])) {
            $model->accessLevel = $map['AccessLevel'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NameWithNamespace'])) {
            $model->nameWithNamespace = $map['NameWithNamespace'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['PathWithNamespace'])) {
            $model->pathWithNamespace = $map['PathWithNamespace'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }
        if (isset($map['VisibilityLevel'])) {
            $model->visibilityLevel = $map['VisibilityLevel'];
        }
        if (isset($map['WebUrl'])) {
            $model->webUrl = $map['WebUrl'];
        }

        return $model;
    }
}
