<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDBsResponseBody\data;

use AlibabaCloud\Tea\Model;

class db extends Model
{
    /**
     * @description The time when the database is created. The value of this parameter is a UNIX timestamp. Unit: ms.
     *
     * @example 1563773824000
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The type of the database. Valid values: **RDS** and **POLARDB**.
     *
     * @example RDS
     *
     * @var string
     */
    public $dbInstType;

    /**
     * @description The name of the database.
     *
     * @example drds_test
     *
     * @var string
     */
    public $dbName;

    /**
     * @description The partitioning mode of the database. Valid values:
     *
     *   **HORIZONTAL**: The database is horizontally partitioned.
     *   **VERTICAL**: The database is vertically partitioned.
     *
     * @example HORIZONTAL
     *
     * @var string
     */
    public $mode;

    /**
     * @description The schema ID that is assigned to the partitioned database.
     *
     * @example drds_test_1563773871118kxqd
     *
     * @var string
     */
    public $schema;

    /**
     * @description The state of the database.
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
     * @return db
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
