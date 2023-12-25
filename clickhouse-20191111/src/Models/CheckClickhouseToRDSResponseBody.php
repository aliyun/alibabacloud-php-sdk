<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Tea\Model;

class CheckClickhouseToRDSResponseBody extends Model
{
    /**
     * @description *   When the value **true** is returned for the **Status** parameter, the system does not return the ErrorCode parameter.
     *   When the value **false** is returned for the **Status** parameter, the system returns for the ErrorCode parameter the reason why the ApsaraDB for ClickHouse cluster cannot be connected to the ApsaraDB RDS for MySQL instance.
     *
     * @example NotSameVpc
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The request ID.
     *
     * @example A82758F8-E793-5610-BE11-0E46664305C2
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the ApsaraDB for ClickHouse cluster can be connected to the ApsaraDB RDS for MySQL instance.
     *
     *   **true**: The ApsaraDB for ClickHouse cluster can be connected to the ApsaraDB RDS for MySQL instance.
     *   **false**: The ApsaraDB for ClickHouse cluster cannot be connected to the ApsaraDB RDS for MySQL instance.
     *
     * @example false
     *
     * @var bool
     */
    public $status;
    protected $_name = [
        'errorCode' => 'ErrorCode',
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
     * @return CheckClickhouseToRDSResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
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
