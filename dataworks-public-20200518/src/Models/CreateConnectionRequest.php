<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CreateConnectionRequest extends Model
{
    /**
     * @description The type of the connection string. Valid values:
     *
     *   odps
     *   mysql
     *   rds
     *   oss
     *   sqlserver
     *   polardb
     *   oracle
     *   mongodb
     *   emr
     *   postgresql
     *   analyticdb_for_mysql
     *   hybriddb_for_postgresql
     *   holo
     *
     * This parameter is required.
     * @example rds
     *
     * @var string
     */
    public $connectionType;

    /**
     * @description The details of the data source. Examples of details of some common data sources:
     *
     *   odps
     *
     * }
     *
     *   mysql
     *
     * }
     *
     *   rds
     *
     * }
     *
     *   oss
     *
     * }
     *
     *   sqlserver
     *
     * }
     *
     *   polardb
     *
     * }
     *
     *   oracle
     *
     * }
     *
     *   mongodb
     *
     * }
     *
     *   emr
     *
     * }
     *
     *   postgresql
     *
     * }
     *
     *   analyticdb_for_mysql
     *
     * }
     *
     *   hybriddb_for_postgresql
     *
     * }
     *
     *   holo
     *
     * }
     *
     *   kafka
     *
     * This parameter is required.
     * @example {"database":"dbname","instanceName":"instancename","password":"password","rdsOwnerId":"123","username":"username"}
     *
     * @var string
     */
    public $content;

    /**
     * @description The description of the connection string.
     *
     * @example abc
     *
     * @var string
     */
    public $description;

    /**
     * @description The environment in which the data source is used. Valid values: 0 and 1. The value 0 indicates the development environment. The value 1 indicates the production environment.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $envType;

    /**
     * @description The name of the data source.
     *
     * This parameter is required.
     * @example abc
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the workspace with which the data source is associated. You can call the [ListProjects](https://help.aliyun.com/document_detail/178393.html) operation to query the ID.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The subtype of the connection string. This parameter is used for scenarios where a type includes subtypes. The following type and subtypes are supported:
     *
     *   Type: `rds`
     *   Subtypes: `mysql`, `sqlserver`, and `postgresql`.
     *
     * @example mysql
     *
     * @var string
     */
    public $subType;
    protected $_name = [
        'connectionType' => 'ConnectionType',
        'content'        => 'Content',
        'description'    => 'Description',
        'envType'        => 'EnvType',
        'name'           => 'Name',
        'projectId'      => 'ProjectId',
        'subType'        => 'SubType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionType) {
            $res['ConnectionType'] = $this->connectionType;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->subType) {
            $res['SubType'] = $this->subType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateConnectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionType'])) {
            $model->connectionType = $map['ConnectionType'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['SubType'])) {
            $model->subType = $map['SubType'];
        }

        return $model;
    }
}
