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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableDBTopologyResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableDBTopologyResponseBody\DBTopology\dataSourceList;
use AlibabaCloud\Tea\Model;

class DBTopology extends Model
{
    /**
     * @description The data sources.
     *
     * @var dataSourceList[]
     */
    public $dataSourceList;

    /**
     * @description The GUID of the table in DMS.
     *
     * @example IDB_L_9032.db-test.yuyang_test
     *
     * @var string
     */
    public $tableGuid;

    /**
     * @description The name of the table.
     *
     * >
     *
     *   If a logical table is queried, the name of the logical table is returned.
     *
     *   If a physical table is queried, the name of the physical table is returned.
     *
     * @example yuyang_test
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'dataSourceList' => 'DataSourceList',
        'tableGuid' => 'TableGuid',
        'tableName' => 'TableName',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceList) {
            $res['DataSourceList'] = [];
            if (null !== $this->dataSourceList && \is_array($this->dataSourceList)) {
                $n = 0;
                foreach ($this->dataSourceList as $item) {
                    $res['DataSourceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBTopology
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceList'])) {
            if (!empty($map['DataSourceList'])) {
                $model->dataSourceList = [];
                $n = 0;
                foreach ($map['DataSourceList'] as $item) {
                    $model->dataSourceList[$n++] = null !== $item ? dataSourceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
