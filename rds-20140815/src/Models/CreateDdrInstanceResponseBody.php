<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateDdrInstanceResponseBody extends Model
{
    /**
     * @description The endpoint that is used to connect to the destination instance.
     *
     * >  The **DBInstanceNetType** parameter indicates whether the endpoint is internal or public.
     * @example rm-xxxxx.mysql.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectionString;

    /**
     * @description The destination instance ID.
     *
     * @example rm-xxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The order ID.
     *
     * @example 2038691xxxxx
     *
     * @var string
     */
    public $orderId;

    /**
     * @description The port number that is used to connect to the destination instance.
     *
     * > **DBInstanceNetType** indicates whether the port is internal or public.
     * @example 3306
     *
     * @var string
     */
    public $port;

    /**
     * @description The ID of the request.
     *
     * @example E52666CC-330E-418A-8E5B-A19E3FB42D13
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'connectionString' => 'ConnectionString',
        'DBInstanceId'     => 'DBInstanceId',
        'orderId'          => 'OrderId',
        'port'             => 'Port',
        'requestId'        => 'RequestId',
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
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDdrInstanceResponseBody
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
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
