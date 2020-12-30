<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class DescribeLibraryDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $sourceLocation;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $libraryVersion;

    /**
     * @var string
     */
    public $properties;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'sourceLocation' => 'SourceLocation',
        'type'           => 'Type',
        'requestId'      => 'RequestId',
        'scope'          => 'Scope',
        'userId'         => 'UserId',
        'createTime'     => 'CreateTime',
        'sourceType'     => 'SourceType',
        'libraryVersion' => 'LibraryVersion',
        'properties'     => 'Properties',
        'bizId'          => 'BizId',
        'name'           => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceLocation) {
            $res['SourceLocation'] = $this->sourceLocation;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->libraryVersion) {
            $res['LibraryVersion'] = $this->libraryVersion;
        }
        if (null !== $this->properties) {
            $res['Properties'] = $this->properties;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLibraryDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceLocation'])) {
            $model->sourceLocation = $map['SourceLocation'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['LibraryVersion'])) {
            $model->libraryVersion = $map['LibraryVersion'];
        }
        if (isset($map['Properties'])) {
            $model->properties = $map['Properties'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
