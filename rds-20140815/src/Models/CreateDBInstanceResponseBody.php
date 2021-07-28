<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateDBInstanceResponseBody extends Model
{
    /**
     * @var bool
     */
    public $dryRunResult;

    /**
     * @var bool
     */
    public $tagResult;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $connectionString;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $port;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $orderId;
    protected $_name = [
        'dryRunResult'     => 'DryRunResult',
        'tagResult'        => 'TagResult',
        'requestId'        => 'RequestId',
        'connectionString' => 'ConnectionString',
        'DBInstanceId'     => 'DBInstanceId',
        'port'             => 'Port',
        'dryRun'           => 'DryRun',
        'orderId'          => 'OrderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dryRunResult) {
            $res['DryRunResult'] = $this->dryRunResult;
        }
        if (null !== $this->tagResult) {
            $res['TagResult'] = $this->tagResult;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
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
        if (isset($map['DryRunResult'])) {
            $model->dryRunResult = $map['DryRunResult'];
        }
        if (isset($map['TagResult'])) {
            $model->tagResult = $map['TagResult'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        return $model;
    }
}
