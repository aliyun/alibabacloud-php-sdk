<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataSourceResponseBody;

use AlibabaCloud\Tea\Model;

class dataSource extends Model
{
    /**
     * @description The connection configurations of the data source, including the connection address, access identity, and environment information. The envType parameter specifies the environment in which the data source is used. Valid values of the envType parameter:
     *
     *   Dev: development environment
     *   Prod: production environment
     *
     * The parameters that you need to configure for the data source vary based on the mode in which the data source is added. For more information, see [Data source connection information (ConnectionProperties)](https://help.aliyun.com/document_detail/2852465.html).
     * @example {
     * }
     * @var mixed
     */
    public $connectionProperties;

    /**
     * @description The mode in which the data source is added. The mode varies based on the data source type. Valid values:
     *
     *   InstanceMode: instance mode
     *   UrlMode: connection string mode
     *   CdhMode: CDH cluster mode
     *
     * @example UrlMode
     *
     * @var string
     */
    public $connectionPropertiesMode;

    /**
     * @description The time when the data source was added. This value is a UNIX timestamp.
     *
     * @example 1698286929333
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The ID of the user who adds the data source.
     *
     * @example 1107550004253538
     *
     * @var string
     */
    public $createUser;

    /**
     * @description The description of the data source.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The data source ID.
     *
     * @example 16738
     *
     * @var int
     */
    public $id;

    /**
     * @description The time when the data source was last modified. This value is a UNIX timestamp.
     *
     * @example 1698286929333
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @description The ID of the user who modifies the data source.
     *
     * @example 1107550004253538
     *
     * @var string
     */
    public $modifyUser;

    /**
     * @description The name of the data source.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the workspace with which the data source is associated.
     *
     * @example 52660
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The unique business key of the data source. For example, the unique business key of a Hologres data source is in the `${tenantOwnerId}:${regionId}:${type}:${instanceId}:${database}` format.
     *
     * @example 1107550004253538:cn-beijing:holo:hgprecn-cn-x0r3oun4k001:testdb
     *
     * @var string
     */
    public $qualifiedName;

    /**
     * @description The type of the data source.
     *
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
