<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBInstanceConnectionStringRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example pxc-unrf5ssig0ecg8.polarx.huhehaote.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectionString;

    /**
     * @description This parameter is required.
     *
     * @example pxc-unrf5ssig0ecg8
     *
     * @var string
     */
    public $DBInstanceName;

    /**
     * @description This parameter is required.
     *
     * @example 3300
     *
     * @var string
     */
    public $newPort;

    /**
     * @description This parameter is required.
     *
     * @example test2
     *
     * @var string
     */
    public $newPrefix;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
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
