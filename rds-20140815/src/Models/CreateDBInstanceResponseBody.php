<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateDBInstanceResponseBody extends Model
{
    /**
     * @description The endpoint of the instance.
     *
     * > The **DBInstanceNetType** parameter indicates whether the endpoint is internal or public.
     * @example rm-uf6wjk5*****.mysql.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectionString;

    /**
     * @description The ID of the instance If the value of the **Amount** parameter is greater than **1**, more than one instance ID is returned. The number of instance IDs that are returned is the same as the value of the Amount parameter. The returned instance IDs are separated by commas (,).
     *
     * For example, if the value of the **Amount** parameter is **3**, three instance IDs are returned. Example: `rm-uf6wjk5*****1,rm-uf6wjk5*****2,rm-uf6wjk5*****3`
     * @example rm-uf6wjk5*****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description Indicates that the system performed a dry run.
     *
     *   The value is fixed as **true**.
     *   If the system does not perform a dry run, this parameter is not returned.
     *
     * @example true
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description Indicates whether the request passed the dry run. Valid values:
     *
     *   **true**
     *   **false**
     *
     *   If the system does not perform a dry run, this parameter is not returned.
     *   If the request failed the dry run, an error message is returned.
     *
     * @example true
     *
     * @var bool
     */
    public $dryRunResult;

    /**
     * @description The message that indicates whether multiple instances are created.
     *
     * > The parameter is returned only when the value of the **Amount** parameter is greater than 1.
     * @example Batch Create DBInstance Task Is In Process.
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the order.
     *
     * @example 1007893702*****
     *
     * @var string
     */
    public $orderId;

    /**
     * @description The port that is used to connect to the instance.
     *
     * > The **DBInstanceNetType** parameter indicates whether the port number is internal or public.
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

    /**
     * @description Indicates whether the specified tag is added to the instance. Valid values:
     *
     *   **true**: The specified tag is added to the instance.
     *   **false**: The specified tag fails to be added to the instance.
     *
     * > If you do not add a tag to the instance, this parameter is not returned.
     * @example true
     *
     * @var bool
     */
    public $tagResult;

    /**
     * @description The ID of the task that is run to create multiple instances.
     *
     *   This parameter is returned only when the value of **Amount** is greater than 1.
     *   **TaskID** cannot be used to query a task.
     *
     * @example s2365879-a9d0-55af-fgae-f2*****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'connectionString' => 'ConnectionString',
        'DBInstanceId'     => 'DBInstanceId',
        'dryRun'           => 'DryRun',
        'dryRunResult'     => 'DryRunResult',
        'message'          => 'Message',
        'orderId'          => 'OrderId',
        'port'             => 'Port',
        'requestId'        => 'RequestId',
        'tagResult'        => 'TagResult',
        'taskId'           => 'TaskId',
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
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->dryRunResult) {
            $res['DryRunResult'] = $this->dryRunResult;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
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
        if (null !== $this->tagResult) {
            $res['TagResult'] = $this->tagResult;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['DryRunResult'])) {
            $model->dryRunResult = $map['DryRunResult'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
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
        if (isset($map['TagResult'])) {
            $model->tagResult = $map['TagResult'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
