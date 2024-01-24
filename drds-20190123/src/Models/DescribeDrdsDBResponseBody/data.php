<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDBResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Indicates the time when the database was created. The value is in the UNIX timestamp format. Unit: ms.
     *
     * @example 1602050276000
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Indicates the storage type of the database.
     *
     * @example RDS
     *
     * @var string
     */
    public $dbInstType;

    /**
     * @description Indicates the name of the database.
     *
     * @example db_test
     *
     * @var string
     */
    public $dbName;

    /**
     * @description Indicates the type of the instance in which the database is deployed. Valid values:
     *
     *   **MASTER**: The instance is a primary instance.
     *   **SLAVE**: The instance is a read-only instance.
     *
     * @example MASTER
     *
     * @var string
     */
    public $instRole;

    /**
     * @description Indicates the database sharding method.
     *
     *   **HORIZONTAL**: The database is horizontally sharded.
     *   **VERTICAL**: The database is vertically sharded.
     *
     * @example HORIZONTAL
     *
     * @var string
     */
    public $mode;

    /**
     * @description Indicates the schema name of the database.
     *
     * @example db_test*******************
     *
     * @var string
     */
    public $schema;

    /**
     * @description Indicates the state of the database. Valid values:
     *
     *   **TO_BE_INIT**: The database is being created.
     *   **NORMAL**: The database is running.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'createTime' => 'CreateTime',
        'dbInstType' => 'DbInstType',
        'dbName'     => 'DbName',
        'instRole'   => 'InstRole',
        'mode'       => 'Mode',
        'schema'     => 'Schema',
        'status'     => 'Status',
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
        if (null !== $this->dbInstType) {
            $res['DbInstType'] = $this->dbInstType;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->instRole) {
            $res['InstRole'] = $this->instRole;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DbInstType'])) {
            $model->dbInstType = $map['DbInstType'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['InstRole'])) {
            $model->instRole = $map['InstRole'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
