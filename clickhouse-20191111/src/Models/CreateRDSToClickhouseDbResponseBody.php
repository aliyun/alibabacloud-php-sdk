<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Tea\Model;

class CreateRDSToClickhouseDbResponseBody extends Model
{
    /**
     * @description If -1 is returned for the **Status** parameter, the cause of the creation failure is returned.
     *
     * @example ClickHouse exception, code: 49, host: 100.100.79.102, port: 14540; Code: 49, e.displayText() = DB::Exception: Logical error: there is no global context (version 20.8.17.25)n
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description Duplicate tables in the synchronization task.
     *
     * @var string[]
     */
    public $repeatedDbs;

    /**
     * @description The request ID.
     *
     * @example 66676F54-1994-5DCF-993F-74536649628A
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the synchronization task was created. Valid values:
     *
     *   **1**: Created.
     *   **0**: Creation failed. The tables in the synchronization task are duplicate. The duplicate tables are returned for the **RepeatedDbs** parameter.
     *   **-1**: Creation failed. The cause why the creation failed is returned for the **ErrorMsg** parameter.
     *
     * @example 0
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'errorMsg'    => 'ErrorMsg',
        'repeatedDbs' => 'RepeatedDbs',
        'requestId'   => 'RequestId',
        'status'      => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->repeatedDbs) {
            $res['RepeatedDbs'] = $this->repeatedDbs;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRDSToClickhouseDbResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['RepeatedDbs'])) {
            if (!empty($map['RepeatedDbs'])) {
                $model->repeatedDbs = $map['RepeatedDbs'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
