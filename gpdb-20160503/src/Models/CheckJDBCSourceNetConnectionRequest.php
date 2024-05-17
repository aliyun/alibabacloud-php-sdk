<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class CheckJDBCSourceNetConnectionRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example gp-xxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description This parameter is required.
     *
     * @example xxx
     *
     * @var string
     */
    public $jdbcConnectionString;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'DBInstanceId'         => 'DBInstanceId',
        'jdbcConnectionString' => 'JdbcConnectionString',
        'regionId'             => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->jdbcConnectionString) {
            $res['JdbcConnectionString'] = $this->jdbcConnectionString;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckJDBCSourceNetConnectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['JdbcConnectionString'])) {
            $model->jdbcConnectionString = $map['JdbcConnectionString'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
