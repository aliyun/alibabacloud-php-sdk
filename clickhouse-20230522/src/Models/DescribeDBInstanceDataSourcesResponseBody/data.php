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

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeDBInstanceDataSourcesResponseBody;

use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeDBInstanceDataSourcesResponseBody\data\columns;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The columns.
     *
     * @var columns[]
     */
    public $columns;

    /**
     * @description The cluster ID.
     *
     * @example cc-bp100p4q1g9z3****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The account.
     *
     * @example default
     *
     * @var string
     */
    public $schemas;

    /**
     * @description The tables.
     *
     * @var string[]
     */
    public $tables;
    protected $_name = [
        'columns' => 'Columns',
        'DBInstanceId' => 'DBInstanceId',
        'schemas' => 'Schemas',
        'tables' => 'Tables',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->columns) {
            $res['Columns'] = [];
            if (null !== $this->columns && \is_array($this->columns)) {
                $n = 0;
                foreach ($this->columns as $item) {
                    $res['Columns'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->schemas) {
            $res['Schemas'] = $this->schemas;
        }
        if (null !== $this->tables) {
            $res['Tables'] = $this->tables;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Columns'])) {
            if (!empty($map['Columns'])) {
                $model->columns = [];
                $n = 0;
                foreach ($map['Columns'] as $item) {
                    $model->columns[$n++] = null !== $item ? columns::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['Schemas'])) {
            $model->schemas = $map['Schemas'];
        }
        if (isset($map['Tables'])) {
            if (!empty($map['Tables'])) {
                $model->tables = $map['Tables'];
            }
        }

        return $model;
    }
}
