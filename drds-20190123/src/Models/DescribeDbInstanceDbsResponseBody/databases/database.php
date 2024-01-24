<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDbInstanceDbsResponseBody\databases;

use AlibabaCloud\Tea\Model;

class database extends Model
{
    /**
     * @description Indicates the name of a storage-layer database.
     *
     * @example db_test
     *
     * @var string
     */
    public $dbName;

    /**
     * @description Indicates the description of the storage-layer database.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates the state of the storage-layer database. Valid values:
     *
     *   **0**: The database is being created.
     *   **1**: The database is available.
     *   **3**: The database is being deleted.
     *
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'dbName'      => 'DbName',
        'description' => 'Description',
        'status'      => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return database
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
