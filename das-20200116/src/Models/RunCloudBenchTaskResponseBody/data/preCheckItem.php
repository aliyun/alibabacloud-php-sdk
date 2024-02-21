<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\RunCloudBenchTaskResponseBody\data;

use AlibabaCloud\Tea\Model;

class preCheckItem extends Model
{
    /**
     * @description The HTTP status code returned.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The detailed information of the check item.
     *
     * @example "Data": { "total": 1, "list":[...] }, "Code": 200, "Success": true }
     *
     * @var string
     */
    public $details;

    /**
     * @description The returned message.
     *
     * >  If the request was successful, **Successful** is returned. If the request failed, an error message such as an error code is returned.
     * @example Successful
     *
     * @var string
     */
    public $message;

    /**
     * @description The name of the check item. Valid values:
     *
     * **SqlArchiveStatusChecker**: checks whether SQL Explorer is available.
     * **BenchClientEnvChecker**: checks whether the runtime environment for programs on the stress testing client is available.
     * **SpecChecker**: checks whether the destination instance type and the instance type of the stress testing client support this API operation.
     * **SourceInstanceChecker**: checks whether the account of the source instance is available and whether the source instance is connected to the destination instance.
     * **BenchTargetChecker**: checks whether the account of the destination instance is available and whether the source instance is connected to the destination instance.
     *
     * @example BenchTargetChecker
     *
     * @var string
     */
    public $name;

    /**
     * @description The sequence number of the check item. Valid values: **0** to **10**.
     *
     * @example 0
     *
     * @var int
     */
    public $order;

    /**
     * @description The status of the task. Valid values:
     *
     *   **SUCCESS**: The task is successful.
     *   **IGNORED**: The task is ignored.
     *   **RUNNING**: The task is running.
     *   **EXCEPTION**: An error occurred.
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'code'    => 'Code',
        'details' => 'Details',
        'message' => 'Message',
        'name'    => 'Name',
        'order'   => 'Order',
        'status'  => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->details) {
            $res['Details'] = $this->details;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return preCheckItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Details'])) {
            $model->details = $map['Details'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
