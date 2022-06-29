<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\ListLibrariesResponseBody\items;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $libraryVersion;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $properties;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $sourceLocation;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'bizId'          => 'BizId',
        'createTime'     => 'CreateTime',
        'libraryVersion' => 'LibraryVersion',
        'name'           => 'Name',
        'properties'     => 'Properties',
        'scope'          => 'Scope',
        'sourceLocation' => 'SourceLocation',
        'sourceType'     => 'SourceType',
        'type'           => 'Type',
        'userId'         => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->libraryVersion) {
            $res['LibraryVersion'] = $this->libraryVersion;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->properties) {
            $res['Properties'] = $this->properties;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->sourceLocation) {
            $res['SourceLocation'] = $this->sourceLocation;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return item
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['LibraryVersion'])) {
            $model->libraryVersion = $map['LibraryVersion'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Properties'])) {
            $model->properties = $map['Properties'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['SourceLocation'])) {
            $model->sourceLocation = $map['SourceLocation'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
