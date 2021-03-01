<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetPermApplyOrderDetailResponseBody\permApplyOrderDetail;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetPermApplyOrderDetailResponseBody\permApplyOrderDetail\resources\columnInfo;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetPermApplyOrderDetailResponseBody\permApplyOrderDetail\resources\databaseInfo;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetPermApplyOrderDetailResponseBody\permApplyOrderDetail\resources\instanceInfo;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetPermApplyOrderDetailResponseBody\permApplyOrderDetail\resources\tableInfo;
use AlibabaCloud\Tea\Model;

class resources extends Model
{
    /**
     * @var databaseInfo
     */
    public $databaseInfo;

    /**
     * @var tableInfo
     */
    public $tableInfo;

    /**
     * @var columnInfo
     */
    public $columnInfo;

    /**
     * @var instanceInfo
     */
    public $instanceInfo;
    protected $_name = [
        'databaseInfo' => 'DatabaseInfo',
        'tableInfo'    => 'TableInfo',
        'columnInfo'   => 'ColumnInfo',
        'instanceInfo' => 'InstanceInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->databaseInfo) {
            $res['DatabaseInfo'] = null !== $this->databaseInfo ? $this->databaseInfo->toMap() : null;
        }
        if (null !== $this->tableInfo) {
            $res['TableInfo'] = null !== $this->tableInfo ? $this->tableInfo->toMap() : null;
        }
        if (null !== $this->columnInfo) {
            $res['ColumnInfo'] = null !== $this->columnInfo ? $this->columnInfo->toMap() : null;
        }
        if (null !== $this->instanceInfo) {
            $res['InstanceInfo'] = null !== $this->instanceInfo ? $this->instanceInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatabaseInfo'])) {
            $model->databaseInfo = databaseInfo::fromMap($map['DatabaseInfo']);
        }
        if (isset($map['TableInfo'])) {
            $model->tableInfo = tableInfo::fromMap($map['TableInfo']);
        }
        if (isset($map['ColumnInfo'])) {
            $model->columnInfo = columnInfo::fromMap($map['ColumnInfo']);
        }
        if (isset($map['InstanceInfo'])) {
            $model->instanceInfo = instanceInfo::fromMap($map['InstanceInfo']);
        }

        return $model;
    }
}
