<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\PrintByTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The error code returned by the printer. Valid values:
     *
     *   2: The printer ran out of paper.
     *   3: A paper jam occurred in the printer.
     *
     * @example 2
     *
     * @var string
     */
    public $deviceErrorCode;

    /**
     * @description The error message returned by the printer.
     *
     * @example no paper
     *
     * @var string
     */
    public $deviceErrorMessage;

    /**
     * @description The ID of the printing operation.
     *
     * @example NyWh5lw3*****RfL9LJUivhOhQV*****
     *
     * @var string
     */
    public $id;

    /**
     * @description The maximum number of retries. The value is fixed at 2, which indicates that up to two printing retries are supported.
     *
     * If the printer responds to the printing command with a failure or timeout error, IoT Platform delivers the printing command to the printer.
     * @example 2
     *
     * @var int
     */
    public $maxRetryCount;

    /**
     * @description The actual number of retries.
     *
     * @example 0
     *
     * @var int
     */
    public $retryCount;

    /**
     * @description Indicates whether the printing operation was successful.
     *
     *   **true**: The printing operation was successful.
     *   **false**: The printing operation failed.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'deviceErrorCode'    => 'DeviceErrorCode',
        'deviceErrorMessage' => 'DeviceErrorMessage',
        'id'                 => 'Id',
        'maxRetryCount'      => 'MaxRetryCount',
        'retryCount'         => 'RetryCount',
        'success'            => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceErrorCode) {
            $res['DeviceErrorCode'] = $this->deviceErrorCode;
        }
        if (null !== $this->deviceErrorMessage) {
            $res['DeviceErrorMessage'] = $this->deviceErrorMessage;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->maxRetryCount) {
            $res['MaxRetryCount'] = $this->maxRetryCount;
        }
        if (null !== $this->retryCount) {
            $res['RetryCount'] = $this->retryCount;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceErrorCode'])) {
            $model->deviceErrorCode = $map['DeviceErrorCode'];
        }
        if (isset($map['DeviceErrorMessage'])) {
            $model->deviceErrorMessage = $map['DeviceErrorMessage'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MaxRetryCount'])) {
            $model->maxRetryCount = $map['MaxRetryCount'];
        }
        if (isset($map['RetryCount'])) {
            $model->retryCount = $map['RetryCount'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
