<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDataQualityEvaluationTaskRequest;

use AlibabaCloud\Tea\Model;

class target extends Model
{
    /**
     * @description 表所属的数据库类型
     *
     * @example maxcompute
     *
     * @var string
     */
    public $databaseType;

    /**
     * @description 分区表的分区设置
     *
     * @example dt=$[yyyymmdd-1]
     *
     * @var string
     */
    public $partitionSpec;

    /**
     * @description 表在数据地图中的唯一ID
     *
     * @example odsp.openapi.ods_d_openapi_log
     *
     * @var string
     */
    public $tableGuid;
    protected $_name = [
        'databaseType'  => 'DatabaseType',
        'partitionSpec' => 'PartitionSpec',
        'tableGuid'     => 'TableGuid',
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
