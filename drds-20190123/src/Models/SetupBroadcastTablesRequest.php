<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class SetupBroadcastTablesRequest extends Model
{
    /**
     * @description Specifies whether to activate a broadcast table for the database.
     *
     * @example true
     *
     * @var bool
     */
    public $active;

    /**
     * @description The name of the database for which you want to configure a broadcast table.
     *
     * @example test
     *
     * @var string
     */
    public $dbName;

    /**
     * @description The ID of the PolarDB-X 1.0 instance.
     *
     * @example drds************
     *
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @description The ID of the region in which the PolarDB-X 1.0 instance resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the table.
     *
     * @example test
     *
     * @var string[]
     */
    public $tableName;
    protected $_name = [
        'active'         => 'Active',
        'dbName'         => 'DbName',
        'drdsInstanceId' => 'DrdsInstanceId',
        'regionId'       => 'RegionId',
        'tableName'      => 'TableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->active) {
            $res['Active'] = $this->active;
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
     * @return SetupBroadcastTablesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
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
