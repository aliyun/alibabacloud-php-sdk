<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBInstanceSSLRequest extends Model
{
    /**
     * @description The encrypted endpoint. By default, the wildcards are used for instances that are hosted on ECS instances. This way, the endpoints that can be resolved to the same IP address are encrypted.
     *
     * @example gp-xxxxxxxxxxx-master.gpdbmaster.singapore.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectionString;

    /**
     * @description The ID of the instance.
     *
     * @example gp-xxxxxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The status of SSL encryption. Valid values:
     *
     *   0: disables SSL encryption.
     *   1: enables SSL encryption.
     *   2: updates SSL encryption.
     *
     * @example 1
     *
     * @var int
     */
    public $SSLEnabled;
    protected $_name = [
        'connectionString' => 'ConnectionString',
        'DBInstanceId'     => 'DBInstanceId',
        'SSLEnabled'       => 'SSLEnabled',
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
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->SSLEnabled) {
            $res['SSLEnabled'] = $this->SSLEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBInstanceSSLRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['SSLEnabled'])) {
            $model->SSLEnabled = $map['SSLEnabled'];
        }

        return $model;
    }
}
