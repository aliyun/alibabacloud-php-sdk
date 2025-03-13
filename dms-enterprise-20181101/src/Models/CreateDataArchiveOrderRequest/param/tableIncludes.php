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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataArchiveOrderRequest\param;

use AlibabaCloud\Tea\Model;

class tableIncludes extends Model
{
    /**
     * @description The table name.
     *
     * This parameter is required.
     *
     * @example table1
     *
     * @var string
     */
    public $tableName;

    /**
     * @description The filter condition that is specified by the WHERE clause of the archiving configuration. If a time variable is used in the filter condition, the filter condition is specified in the following format: field name <=\\"${variable name}\\". The variable name in the filter condition must be the same as the time variable name that is specified in the Variables parameter.
     *
     * @example gmt_modified<\\"${time}\\"
     *
     * @var string
     */
    public $tableWhere;
    protected $_name = [
        'tableName' => 'TableName',
        'tableWhere' => 'TableWhere',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->tableWhere) {
            $res['TableWhere'] = $this->tableWhere;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tableIncludes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['TableWhere'])) {
            $model->tableWhere = $map['TableWhere'];
        }

        return $model;
    }
}
