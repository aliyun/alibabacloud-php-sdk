<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class Database extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $createdBy;

    /**
     * @var string
     */
    public $description;

    /**
     * @example oss://examplebuket/exampledb
     *
     * @var string
     */
    public $locationUri;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ownerName;

    /**
     * @var string
     */
    public $ownerType;

    /**
     * @var string[]
     */
    public $parameters;

    /**
     * @var PrincipalPrivilegeSet
     */
    public $privileges;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'createTime'  => 'CreateTime',
        'createdBy'   => 'CreatedBy',
        'description' => 'Description',
        'locationUri' => 'LocationUri',
        'name'        => 'Name',
        'ownerName'   => 'OwnerName',
        'ownerType'   => 'OwnerType',
        'parameters'  => 'Parameters',
        'privileges'  => 'Privileges',
        'updateTime'  => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createdBy) {
            $res['CreatedBy'] = $this->createdBy;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->locationUri) {
            $res['LocationUri'] = $this->locationUri;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }
        if (null !== $this->ownerType) {
            $res['OwnerType'] = $this->ownerType;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->privileges) {
            $res['Privileges'] = null !== $this->privileges ? $this->privileges->toMap() : null;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Database
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreatedBy'])) {
            $model->createdBy = $map['CreatedBy'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['LocationUri'])) {
            $model->locationUri = $map['LocationUri'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }
        if (isset($map['OwnerType'])) {
            $model->ownerType = $map['OwnerType'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['Privileges'])) {
            $model->privileges = PrincipalPrivilegeSet::fromMap($map['Privileges']);
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
