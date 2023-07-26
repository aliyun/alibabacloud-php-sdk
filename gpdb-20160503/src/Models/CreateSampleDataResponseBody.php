<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class CreateSampleDataResponseBody extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example gp-bp12ga6v69h86****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The error message returned if an error occurs. This message does not affect the execution of the operation.
     *
     * @example *********
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The ID of the request.
     *
     * @example 15A6881F-AAAB-5E4D-9B3F-6DCC1BDF4F2E_99
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The execution state of the operation. Valid values:
     *
     *   **false**: The operation fails.
     *   **true**: The operation is successful.
     *
     * @example true
     *
     * @var bool
     */
    public $status;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'errorMessage' => 'ErrorMessage',
        'requestId'    => 'RequestId',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
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
     * @return CreateSampleDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
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
