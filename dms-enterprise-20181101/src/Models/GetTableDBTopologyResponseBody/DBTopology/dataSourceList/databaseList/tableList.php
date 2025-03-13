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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableDBTopologyResponseBody\DBTopology\dataSourceList\databaseList;

use AlibabaCloud\Tea\Model;

class tableList extends Model
{
    /**
     * @description The ID of the table.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $tableId;

    /**
     * @description The name of the physical table.
     *
     * @example 151977812
     *
     * @var string
     */
    public $tableName;

    /**
     * @description The type of the table. This is a reserved parameter.
     *
     * @example yuyang_test_0000
     *
     * @var string
     */
    public $tableType;
    protected $_name = [
        'tableId' => 'TableId',
        'tableName' => 'TableName',
        'tableType' => 'TableType',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->tableId) {
            $res['TableId'] = $this->tableId;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->tableType) {
            $res['TableType'] = $this->tableType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tableList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TableId'])) {
            $model->tableId = $map['TableId'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['TableType'])) {
            $model->tableType = $map['TableType'];
        }

        return $model;
    }
}
