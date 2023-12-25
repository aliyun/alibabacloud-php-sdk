<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Tea\Model;

class DeleteSyndbResponseBody extends Model
{
    /**
     * @description The error code.
     *
     * @example 0
     *
     * @var int
     */
    public $errorCode;

    /**
     * @description *   If the value **true** is returned for the **Status** parameter, the system does not return the ErrorMsg parameter.
     *   If the value **false** is returned for the **Status** parameter, the system returns the deletion failure cause for the ErrorMsg parameter.
     *
     * @example ClickHouse exception, code: 49, host: 100.100.xx.xx, port: 49670; Code: 49, e.displayText() = DB::Exception: Logical error: there is no global context (version 20.8.17.25)n
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description The request ID.
     *
     * @example 2C7393F1-5FD1-5CEE-A2EA-270A2CF99693
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the database used for data synchronization was deleted. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $status;
    protected $_name = [
        'errorCode' => 'ErrorCode',
        'errorMsg'  => 'ErrorMsg',
        'requestId' => 'RequestId',
        'status'    => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
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
     * @return DeleteSyndbResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
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
