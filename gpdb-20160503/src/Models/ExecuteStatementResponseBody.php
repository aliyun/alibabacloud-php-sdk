<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\ExecuteStatementResponseBody\data;
use AlibabaCloud\Tea\Model;

class ExecuteStatementResponseBody extends Model
{
    /**
     * @description The time when the SQL statements were created.
     *
     * @example 2023-12-04T10:08:47+0800
     *
     * @var string
     */
    public $createdAt;

    /**
     * @description The instance ID.
     *
     * @example gp-xxxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The returned results of the synchronous call.
     *
     * @var data
     */
    public $data;

    /**
     * @description The name of the database.
     *
     * @example adbtest
     *
     * @var string
     */
    public $database;

    /**
     * @description The ID of the job for asynchronously executing the SQL statements.
     *
     * @example ABB39CC3
     *
     * @var string
     */
    public $id;

    /**
     * @description The returned message.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example ABB39CC3-4488-4857-905D-2E4A051D0521
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ARN of the access credential for the created Data API account.
     *
     * @example acs:gpdb:cn-beijing:1033**:secret/testsecret-eG2AQGRIwQ0zFp4VA7mYL3uiCXTfDQbQ
     *
     * @var string
     */
    public $secretArn;

    /**
     * @description The status of the operation. Valid values:
     *
     *   **success**
     *   **fail**
     *
     * @example success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'createdAt' => 'CreatedAt',
        'DBInstanceId' => 'DBInstanceId',
        'data' => 'Data',
        'database' => 'Database',
        'id' => 'Id',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'secretArn' => 'SecretArn',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->secretArn) {
            $res['SecretArn'] = $this->secretArn;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExecuteStatementResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecretArn'])) {
            $model->secretArn = $map['SecretArn'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
