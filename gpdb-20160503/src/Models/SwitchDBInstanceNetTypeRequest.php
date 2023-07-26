<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class SwitchDBInstanceNetTypeRequest extends Model
{
    /**
     * @description The prefix of the custom endpoint. The prefix must be 8 to 64 characters in length and can contain letters and digits. It must start with a lowercase letter. A valid endpoint is in the following format: Prefix.Database engine.rds.aliyuncs.com. Example: test1234.mysql.rds.aliyuncs.com.
     *
     * @example test1234
     *
     * @var string
     */
    public $connectionStringPrefix;

    /**
     * @description The ID of the instance.
     *
     * @example rm-uf6wjk5xxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The port number. Valid values: 3000 to 5999.
     *
     * >
     *   Only ApsaraDB PolarDB MySQL-compatible edition clusters support this parameter. If you leave this parameter empty, the default port 3306 is used.
     *
     * @example 3306
     *
     * @var string
     */
    public $port;
    protected $_name = [
        'connectionStringPrefix' => 'ConnectionStringPrefix',
        'DBInstanceId'           => 'DBInstanceId',
        'port'                   => 'Port',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionStringPrefix) {
            $res['ConnectionStringPrefix'] = $this->connectionStringPrefix;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SwitchDBInstanceNetTypeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionStringPrefix'])) {
            $model->connectionStringPrefix = $map['ConnectionStringPrefix'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        return $model;
    }
}
