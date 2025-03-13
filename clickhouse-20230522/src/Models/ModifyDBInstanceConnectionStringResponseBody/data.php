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

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\ModifyDBInstanceConnectionStringResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The endpoint of the cluster.
     *
     * @example cc-2ze34****-clickhouse..clickhouseserver.pre.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectionString;

    /**
     * @description The cluster ID.
     *
     * @example cc-xxxxx
     *
     * @var int
     */
    public $DBInstanceID;

    /**
     * @description The cluster name.
     *
     * @example cc-xxxxx
     *
     * @var string
     */
    public $DBInstanceName;

    /**
     * @description The disabled database ports.
     *
     * @example 9001,8123
     *
     * @var string
     */
    public $disabledPorts;
    protected $_name = [
        'connectionString' => 'ConnectionString',
        'DBInstanceID' => 'DBInstanceID',
        'DBInstanceName' => 'DBInstanceName',
        'disabledPorts' => 'DisabledPorts',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->DBInstanceID) {
            $res['DBInstanceID'] = $this->DBInstanceID;
        }
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->disabledPorts) {
            $res['DisabledPorts'] = $this->disabledPorts;
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
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['DBInstanceID'])) {
            $model->DBInstanceID = $map['DBInstanceID'];
        }
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['DisabledPorts'])) {
            $model->disabledPorts = $map['DisabledPorts'];
        }

        return $model;
    }
}
