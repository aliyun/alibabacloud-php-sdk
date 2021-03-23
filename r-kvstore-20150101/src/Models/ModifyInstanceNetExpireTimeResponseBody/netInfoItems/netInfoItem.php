<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyInstanceNetExpireTimeResponseBody\netInfoItems;

use AlibabaCloud\Tea\Model;

class netInfoItem extends Model
{
    /**
     * @var string
     */
    public $DBInstanceNetType;

    /**
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $connectionString;

    /**
     * @var string
     */
    public $IPAddress;
    protected $_name = [
        'DBInstanceNetType' => 'DBInstanceNetType',
        'port'              => 'Port',
        'expiredTime'       => 'ExpiredTime',
        'connectionString'  => 'ConnectionString',
        'IPAddress'         => 'IPAddress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceNetType) {
            $res['DBInstanceNetType'] = $this->DBInstanceNetType;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->IPAddress) {
            $res['IPAddress'] = $this->IPAddress;
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
        if (isset($map['DBInstanceNetType'])) {
            $model->DBInstanceNetType = $map['DBInstanceNetType'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['IPAddress'])) {
            $model->IPAddress = $map['IPAddress'];
        }

        return $model;
    }
}
