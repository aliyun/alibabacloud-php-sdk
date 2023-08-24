<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyInstanceNetExpireTimeResponseBody\netInfoItems;

use AlibabaCloud\Tea\Model;

class netInfoItem extends Model
{
    /**
     * @description The endpoint of the classic network.
     *
     * @example r-bp1zxszhcgatnx****.redis.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectionString;

    /**
     * @description The network type of the instance. The returned value is **Classic**.
     *
     * @example Classic
     *
     * @var string
     */
    public $DBInstanceNetType;

    /**
     * @description The expiration time of the classic network endpoint.
     *
     * @example 2019-08-01T09:29:18Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The IP address of the instance in the classic network.
     *
     * @example 100.118.142.***
     *
     * @var string
     */
    public $IPAddress;

    /**
     * @description The port number that is used to connect to the instance.
     *
     * @example 6379
     *
     * @var string
     */
    public $port;
    protected $_name = [
        'connectionString'  => 'ConnectionString',
        'DBInstanceNetType' => 'DBInstanceNetType',
        'expiredTime'       => 'ExpiredTime',
        'IPAddress'         => 'IPAddress',
        'port'              => 'Port',
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
        if (null !== $this->DBInstanceNetType) {
            $res['DBInstanceNetType'] = $this->DBInstanceNetType;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->IPAddress) {
            $res['IPAddress'] = $this->IPAddress;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return netInfoItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['DBInstanceNetType'])) {
            $model->DBInstanceNetType = $map['DBInstanceNetType'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['IPAddress'])) {
            $model->IPAddress = $map['IPAddress'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        return $model;
    }
}
