<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\CheckScaleOutBalancedResponseBody\tableDetails;

use AlibabaCloud\Tea\Model;

class tableDetail extends Model
{
    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $cluster;

    /**
     * @var string
     */
    public $database;

    /**
     * @var int
     */
    public $detail;
    protected $_name = [
        'tableName' => 'TableName',
        'cluster'   => 'Cluster',
        'database'  => 'Database',
        'detail'    => 'Detail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->cluster) {
            $res['Cluster'] = $this->cluster;
        }
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
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
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['Cluster'])) {
            $model->cluster = $map['Cluster'];
        }
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }

        return $model;
    }
}
