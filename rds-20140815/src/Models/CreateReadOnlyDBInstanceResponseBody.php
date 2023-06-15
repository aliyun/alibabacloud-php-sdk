<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateReadOnlyDBInstanceResponseBody extends Model
{
    /**
     * @description The internal endpoint that is used to connect to the read-only instance.
     *
     * @example rr-****.mysql.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectionString;

    /**
     * @description The ID of the read-only instance.
     *
     * @example rr-uf6wjk5****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The ID of the order.
     *
     * @example 10078937****
     *
     * @var string
     */
    public $orderId;

    /**
     * @description The internal port number that is used to connect to the read-only instance.
     *
     * @example 3306
     *
     * @var string
     */
    public $port;

    /**
     * @description The ID of the request.
     *
     * @example 1E43AAE0-BEE8-43DA-860D-EAF2AA0724DC
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
     * @return CreateReadOnlyDBInstanceResponseBody
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
