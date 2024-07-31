<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class UpdateConnectionRequest extends Model
{
    /**
     * @description The data source ID. You can call the [ListConnections](https://help.aliyun.com/document_detail/173911.html) operation to query the ID.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $connectionId;

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
     * }
     * @example {"database":"dbname","instanceName":"instancename","password":"password","rdsOwnerId":"123","username":"username"}
     *
     * @var string
     */
    public $content;

    /**
     * @description The description of the data source.
     *
     * @example abc
     *
     * @var string
     */
    public $description;

    /**
     * @description The environment in which the data source is used. Valid values: 0 and 1. The value 0 indicates the development environment. The value 1 indicates the production environment.
     *
     * @example 1
     *
     * @var int
     */
    public $envType;

    /**
     * @description The status of the data source. Valid values: ENABLED and DISABLED. The value ENABLED indicates that the data source is in the normal state. The value DISABLED indicates that the data source is in an abnormal state.
     *
     * @example ENABLED
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'connectionId' => 'ConnectionId',
        'content'      => 'Content',
        'description'  => 'Description',
        'envType'      => 'EnvType',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionId) {
            $res['ConnectionId'] = $this->connectionId;
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateConnectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionId'])) {
            $model->connectionId = $map['ConnectionId'];
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
