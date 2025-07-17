<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityEvaluationTaskInstanceResponseBody\dataQualityEvaluationTaskInstance\task;

use AlibabaCloud\Tea\Model;

class target extends Model
{
    /**
     * @description The type of the database to which the table belongs.
     *
     * @example maxcompute
     *
     * @var string
     */
    public $databaseType;

    /**
     * @description The partition range monitored.
     *
     * @example pt=$[yyyymmdd-1]
     *
     * @var string
     */
    public $partitionSpec;

    /**
     * @description The unique ID of the table in the data map.
     *
     * @example odps.api_trace.ods_d_api_log
     *
     * @var string
     */
    public $tableGuid;

    /**
     * @description The type of the monitoring object.
     * - Table: Table
     *
     * @example Table
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'databaseType' => 'DatabaseType',
        'partitionSpec' => 'PartitionSpec',
        'tableGuid' => 'TableGuid',
        'type' => 'Type',
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
