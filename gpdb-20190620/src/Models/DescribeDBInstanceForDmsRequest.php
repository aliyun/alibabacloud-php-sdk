<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20190620\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBInstanceForDmsRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @example gp-bp12ga6v69h86****-master.gpdb.rds.aliyuncs.com
     *
     * @var string
     */
    public $host;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @example 5432
     *
     * @var int
     */
    public $port;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'host'         => 'Host',
        'ownerId'      => 'OwnerId',
        'port'         => 'Port',
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
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBInstanceForDmsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        return $model;
    }
}
