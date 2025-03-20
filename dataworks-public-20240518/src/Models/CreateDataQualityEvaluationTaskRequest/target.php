<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityEvaluationTaskRequest;

use AlibabaCloud\Tea\Model;

class target extends Model
{
    /**
     * @description The type of the database to which the table belongs. Valid values:
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
     * @description The configuration of the partitioned table.
     *
     * @example pt=$[yyyymmdd-1]
     *
     * @var string
     */
    public $partitionSpec;

    /**
     * @description The ID of the table in Data Map.
     *
     * @example odps.api_test.ods_openapi_log_d
     *
     * @var string
     */
    public $tableGuid;
    protected $_name = [
        'databaseType' => 'DatabaseType',
        'partitionSpec' => 'PartitionSpec',
        'tableGuid' => 'TableGuid',
    ];

    public function validate() {}

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

        return $model;
    }
}
