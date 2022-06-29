<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models;

use AlibabaCloud\Tea\Model;

class CreateLibraryRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

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
    public $regionId;

    /**
     * @var int
     */
    public $resourceOwnerId;

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
    protected $_name = [
        'clientToken'     => 'ClientToken',
        'libraryVersion'  => 'LibraryVersion',
        'name'            => 'Name',
        'properties'      => 'Properties',
        'regionId'        => 'RegionId',
        'resourceOwnerId' => 'ResourceOwnerId',
        'scope'           => 'Scope',
        'sourceLocation'  => 'SourceLocation',
        'sourceType'      => 'SourceType',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLibraryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
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

        return $model;
    }
}
