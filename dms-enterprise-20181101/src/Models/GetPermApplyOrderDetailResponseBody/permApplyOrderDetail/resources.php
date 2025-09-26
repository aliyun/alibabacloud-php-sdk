<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetPermApplyOrderDetailResponseBody\permApplyOrderDetail;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetPermApplyOrderDetailResponseBody\permApplyOrderDetail\resources\columnInfo;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetPermApplyOrderDetailResponseBody\permApplyOrderDetail\resources\databaseInfo;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetPermApplyOrderDetailResponseBody\permApplyOrderDetail\resources\instanceInfo;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetPermApplyOrderDetailResponseBody\permApplyOrderDetail\resources\rowInfo;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetPermApplyOrderDetailResponseBody\permApplyOrderDetail\resources\rowValueInfo;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetPermApplyOrderDetailResponseBody\permApplyOrderDetail\resources\tableInfo;

class resources extends Model
{
    /**
     * @var columnInfo
     */
    public $columnInfo;

    /**
     * @var databaseInfo
     */
    public $databaseInfo;

    /**
     * @var instanceInfo
     */
    public $instanceInfo;

    /**
     * @var rowInfo
     */
    public $rowInfo;

    /**
     * @var rowValueInfo
     */
    public $rowValueInfo;

    /**
     * @var tableInfo
     */
    public $tableInfo;
    protected $_name = [
        'columnInfo' => 'ColumnInfo',
        'databaseInfo' => 'DatabaseInfo',
        'instanceInfo' => 'InstanceInfo',
        'rowInfo' => 'RowInfo',
        'rowValueInfo' => 'RowValueInfo',
        'tableInfo' => 'TableInfo',
    ];

    public function validate()
    {
        if (null !== $this->columnInfo) {
            $this->columnInfo->validate();
        }
        if (null !== $this->databaseInfo) {
            $this->databaseInfo->validate();
        }
        if (null !== $this->instanceInfo) {
            $this->instanceInfo->validate();
        }
        if (null !== $this->rowInfo) {
            $this->rowInfo->validate();
        }
        if (null !== $this->rowValueInfo) {
            $this->rowValueInfo->validate();
        }
        if (null !== $this->tableInfo) {
            $this->tableInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columnInfo) {
            $res['ColumnInfo'] = null !== $this->columnInfo ? $this->columnInfo->toArray($noStream) : $this->columnInfo;
        }

        if (null !== $this->databaseInfo) {
            $res['DatabaseInfo'] = null !== $this->databaseInfo ? $this->databaseInfo->toArray($noStream) : $this->databaseInfo;
        }

        if (null !== $this->instanceInfo) {
            $res['InstanceInfo'] = null !== $this->instanceInfo ? $this->instanceInfo->toArray($noStream) : $this->instanceInfo;
        }

        if (null !== $this->rowInfo) {
            $res['RowInfo'] = null !== $this->rowInfo ? $this->rowInfo->toArray($noStream) : $this->rowInfo;
        }

        if (null !== $this->rowValueInfo) {
            $res['RowValueInfo'] = null !== $this->rowValueInfo ? $this->rowValueInfo->toArray($noStream) : $this->rowValueInfo;
        }

        if (null !== $this->tableInfo) {
            $res['TableInfo'] = null !== $this->tableInfo ? $this->tableInfo->toArray($noStream) : $this->tableInfo;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnInfo'])) {
            $model->columnInfo = columnInfo::fromMap($map['ColumnInfo']);
        }

        if (isset($map['DatabaseInfo'])) {
            $model->databaseInfo = databaseInfo::fromMap($map['DatabaseInfo']);
        }

        if (isset($map['InstanceInfo'])) {
            $model->instanceInfo = instanceInfo::fromMap($map['InstanceInfo']);
        }

        if (isset($map['RowInfo'])) {
            $model->rowInfo = rowInfo::fromMap($map['RowInfo']);
        }

        if (isset($map['RowValueInfo'])) {
            $model->rowValueInfo = rowValueInfo::fromMap($map['RowValueInfo']);
        }

        if (isset($map['TableInfo'])) {
            $model->tableInfo = tableInfo::fromMap($map['TableInfo']);
        }

        return $model;
    }
}
