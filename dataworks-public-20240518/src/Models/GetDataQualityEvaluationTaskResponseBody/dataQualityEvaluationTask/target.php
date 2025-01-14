<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityEvaluationTaskResponseBody\dataQualityEvaluationTask;

use AlibabaCloud\Tea\Model;

class target extends Model
{
    /**
     * @description The type of the database to which the table belongs.
     *
     * Valid values:
     *
     *   maxcompute
     *   hologres
     *   cdh
     *   analyticdb_for_mysql
     *   starrocks
     *   emr
     *   analyticdb_for_postgresql
     *
     * @example maxcompute
     *
     * @var string
     */
    public $databaseType;

    /**
     * @example pt=$[yyyymmdd-1]
     *
     * @var string
     */
    public $partitionSpec;

    /**
     * @description 表在数据地图中的唯一ID
     *
     * @example odps.meta_open_api_test_sz.test_partition_tbl
     *
     * @var string
     */
    public $tableGuid;

    /**
     * @description 监控对象类型
     *
     * @example Table
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'databaseType'  => 'DatabaseType',
        'partitionSpec' => 'PartitionSpec',
        'tableGuid'     => 'TableGuid',
        'type'          => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->databaseType) {
            $res['DatabaseType'] = $this->databaseType;
        }
        if (null !== $this->partitionSpec) {
            $res['PartitionSpec'] = $this->partitionSpec;
        }
        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return target
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatabaseType'])) {
            $model->databaseType = $map['DatabaseType'];
        }
        if (isset($map['PartitionSpec'])) {
            $model->partitionSpec = $map['PartitionSpec'];
        }
        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
