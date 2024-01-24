<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class SetupTableRequest extends Model
{
    /**
     * @description Specifies whether to enable full table scan.
     *
     * @example true
     *
     * @var bool
     */
    public $allowFullTableScan;

    /**
     * @description The name of the database in which the table resides.
     *
     * @example test
     *
     * @var string
     */
    public $dbName;

    /**
     * @description The ID of the DRDS instance.
     *
     * @example drds************
     *
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @description The ID of the region where the streaming domain resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example test
     *
     * @var string[]
     */
    public $tableName;
    protected $_name = [
        'allowFullTableScan' => 'AllowFullTableScan',
        'dbName'             => 'DbName',
        'drdsInstanceId'     => 'DrdsInstanceId',
        'regionId'           => 'RegionId',
        'tableName'          => 'TableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowFullTableScan) {
            $res['AllowFullTableScan'] = $this->allowFullTableScan;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetupTableRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowFullTableScan'])) {
            $model->allowFullTableScan = $map['AllowFullTableScan'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TableName'])) {
            if (!empty($map['TableName'])) {
                $model->tableName = $map['TableName'];
            }
        }

        return $model;
    }
}
