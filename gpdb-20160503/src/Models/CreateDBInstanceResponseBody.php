<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class CreateDBInstanceResponseBody extends Model
{
    /**
     * @description This parameter is deprecated and will not return a value.
     *
     * You can use the [DescribeDBInstanceAttribute](https://help.aliyun.com/document_detail/86910.html) interface to view the connection address of the instance.
     *
     * @example gp-bp12ga6v69h86****.gpdb.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectionString;

    /**
     * @description Instance ID.
     *
     * @example gp-bp12ga6v69h86****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description Order ID.
     *
     * @example 111111111111
     *
     * @var string
     */
    public $orderId;

    /**
     * @description This parameter is deprecated and will not return a value.
     *
     * You can use the [DescribeDBInstanceAttribute](https://help.aliyun.com/document_detail/86910.html) interface to view the port number of the instance.
     *
     * @example 3432
     *
     * @var string
     */
    public $port;

    /**
     * @description Request ID.
     *
     * @example 5414A4E5-4C36-4461-95FC-************
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'connectionString' => 'ConnectionString',
        'DBInstanceId' => 'DBInstanceId',
        'orderId' => 'OrderId',
        'port' => 'Port',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

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
     * @return CreateDBInstanceResponseBody
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
