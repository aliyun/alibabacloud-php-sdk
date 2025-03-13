<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetPermApplyOrderDetailResponseBody\permApplyOrderDetail;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetPermApplyOrderDetailResponseBody\permApplyOrderDetail\resources\columnInfo;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetPermApplyOrderDetailResponseBody\permApplyOrderDetail\resources\databaseInfo;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetPermApplyOrderDetailResponseBody\permApplyOrderDetail\resources\instanceInfo;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetPermApplyOrderDetailResponseBody\permApplyOrderDetail\resources\tableInfo;
use AlibabaCloud\Tea\Model;

class resources extends Model
{
    /**
     * @description The information about the column.
     *
     * @var columnInfo
     */
    public $columnInfo;

    /**
     * @description The information about the database.
     *
     * @var databaseInfo
     */
    public $databaseInfo;

    /**
     * @description The information about the instance.
     *
     * @var instanceInfo
     */
    public $instanceInfo;

    /**
     * @description The information about the table.
     *
     * @var tableInfo
     */
    public $tableInfo;
    protected $_name = [
        'columnInfo' => 'ColumnInfo',
        'databaseInfo' => 'DatabaseInfo',
        'instanceInfo' => 'InstanceInfo',
        'tableInfo' => 'TableInfo',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnInfo) {
            $res['ColumnInfo'] = null !== $this->columnInfo ? $this->columnInfo->toMap() : null;
        }
        if (null !== $this->databaseInfo) {
            $res['DatabaseInfo'] = null !== $this->databaseInfo ? $this->databaseInfo->toMap() : null;
        }
        if (null !== $this->instanceInfo) {
            $res['InstanceInfo'] = null !== $this->instanceInfo ? $this->instanceInfo->toMap() : null;
        }
        if (null !== $this->tableInfo) {
            $res['TableInfo'] = null !== $this->tableInfo ? $this->tableInfo->toMap() : null;
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
        if (isset($map['ColumnInfo'])) {
            $model->columnInfo = columnInfo::fromMap($map['ColumnInfo']);
        }
        if (isset($map['DatabaseInfo'])) {
            $model->databaseInfo = databaseInfo::fromMap($map['DatabaseInfo']);
        }
        if (isset($map['InstanceInfo'])) {
            $model->instanceInfo = instanceInfo::fromMap($map['InstanceInfo']);
        }
        if (isset($map['TableInfo'])) {
            $model->tableInfo = tableInfo::fromMap($map['TableInfo']);
        }

        return $model;
    }
}
