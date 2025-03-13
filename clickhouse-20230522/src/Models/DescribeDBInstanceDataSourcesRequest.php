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

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBInstanceDataSourcesRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * This parameter is required.
     *
     * @example cc-bp100p4q1g9z3****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The database name.
     *
     * @example dbtest
     *
     * @var string
     */
    public $DBName;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The table name.
     *
     * @example tableTest
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'DBName' => 'DBName',
        'regionId' => 'RegionId',
        'tableName' => 'TableName',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
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
     * @return DescribeDBInstanceDataSourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
