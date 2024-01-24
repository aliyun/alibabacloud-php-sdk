<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\CreateDrdsDBRequest;

use AlibabaCloud\Tea\Model;

class instDbName extends Model
{
    /**
     * @description The ID of the ApsaraDB RDS for MySQL instance on which the databases need to be vertically partitioned. This parameter is required only when the Type parameter is set to VERTICAL.
     *
     * @example drds_sample_rds_id
     *
     * @var string
     */
    public $dbInstanceId;

    /**
     * @example ["drds_sample_db1", "drds_sample_db2"]
     *
     * @var string[]
     */
    public $shardDbName;
    protected $_name = [
        'dbInstanceId' => 'DbInstanceId',
        'shardDbName'  => 'ShardDbName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbInstanceId) {
            $res['DbInstanceId'] = $this->dbInstanceId;
        }
        if (null !== $this->shardDbName) {
            $res['ShardDbName'] = $this->shardDbName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instDbName
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbInstanceId'])) {
            $model->dbInstanceId = $map['DbInstanceId'];
        }
        if (isset($map['ShardDbName'])) {
            if (!empty($map['ShardDbName'])) {
                $model->shardDbName = $map['ShardDbName'];
            }
        }

        return $model;
    }
}
