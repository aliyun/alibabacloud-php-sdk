<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\CheckScaleOutBalancedResponseBody\tableDetails;

use AlibabaCloud\Tea\Model;

class tableDetail extends Model
{
    /**
     * @description The cluster. The value is fixed as **default**.
     *
     * @example default
     *
     * @var string
     */
    public $cluster;

    /**
     * @description The database name.
     *
     * @example db_name
     *
     * @var string
     */
    public $database;

    /**
     * @description The error details. Valid values:
     *
     *   **1**: The unique distributed table is missing.
     *   **2**: More than one distributed table exists for the local table.
     *
     * @example 1
     *
     * @var int
     */
    public $detail;

    /**
     * @description The name of the local table.
     *
     * @example test
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'cluster'   => 'Cluster',
        'database'  => 'Database',
        'detail'    => 'Detail',
        'tableName' => 'TableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cluster) {
            $res['Cluster'] = $this->cluster;
        }
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tableDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cluster'])) {
            $model->cluster = $map['Cluster'];
        }
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
