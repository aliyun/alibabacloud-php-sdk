<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataSourceResponseBody;

use AlibabaCloud\Tea\Model;

class dataSource extends Model
{
    /**
     * @example {
     * }
     * @var mixed
     */
    public $connectionProperties;

    /**
     * @example UrlMode
     *
     * @var string
     */
    public $connectionPropertiesMode;

    /**
     * @example 1698286929333
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 1107550004253538
     *
     * @var string
     */
    public $createUser;

    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @example 16738
     *
     * @var int
     */
    public $id;

    /**
     * @example 1698286929333
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @example 1107550004253538
     *
     * @var string
     */
    public $modifyUser;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example 52660
     *
     * @var int
     */
    public $projectId;

    /**
     * @example 1107550004253538:cn-beijing:holo:hgprecn-cn-x0r3oun4k001:testdb
     *
     * @var string
     */
    public $qualifiedName;

    /**
     * @example hologres
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'connectionProperties'     => 'ConnectionProperties',
        'connectionPropertiesMode' => 'ConnectionPropertiesMode',
        'createTime'               => 'CreateTime',
        'createUser'               => 'CreateUser',
        'description'              => 'Description',
        'id'                       => 'Id',
        'modifyTime'               => 'ModifyTime',
        'modifyUser'               => 'ModifyUser',
        'name'                     => 'Name',
        'projectId'                => 'ProjectId',
        'qualifiedName'            => 'QualifiedName',
        'type'                     => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionProperties) {
            $res['ConnectionProperties'] = $this->connectionProperties;
        }
        if (null !== $this->connectionPropertiesMode) {
            $res['ConnectionPropertiesMode'] = $this->connectionPropertiesMode;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->modifyUser) {
            $res['ModifyUser'] = $this->modifyUser;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->qualifiedName) {
            $res['QualifiedName'] = $this->qualifiedName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataSource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionProperties'])) {
            $model->connectionProperties = $map['ConnectionProperties'];
        }
        if (isset($map['ConnectionPropertiesMode'])) {
            $model->connectionPropertiesMode = $map['ConnectionPropertiesMode'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['ModifyUser'])) {
            $model->modifyUser = $map['ModifyUser'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['QualifiedName'])) {
            $model->qualifiedName = $map['QualifiedName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
