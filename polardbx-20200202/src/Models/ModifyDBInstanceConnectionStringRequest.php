<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBInstanceConnectionStringRequest extends Model
{
    /**
     * @var string
     */
    public $connectionString;

    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var string
     */
    public $newPort;

    /**
     * @var string
     */
    public $newPrefix;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'connectionString' => 'ConnectionString',
        'DBInstanceName'   => 'DBInstanceName',
        'newPort'          => 'NewPort',
        'newPrefix'        => 'NewPrefix',
        'regionId'         => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->newPort) {
            $res['NewPort'] = $this->newPort;
        }
        if (null !== $this->newPrefix) {
            $res['NewPrefix'] = $this->newPrefix;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBInstanceConnectionStringRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['NewPort'])) {
            $model->newPort = $map['NewPort'];
        }
        if (isset($map['NewPrefix'])) {
            $model->newPrefix = $map['NewPrefix'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
