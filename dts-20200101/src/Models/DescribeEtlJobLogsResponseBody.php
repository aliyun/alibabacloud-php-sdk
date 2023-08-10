<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeEtlJobLogsResponseBody\etlRunningLogs;
use AlibabaCloud\Tea\Model;

class DescribeEtlJobLogsResponseBody extends Model
{
    /**
     * @description The dynamic error code.
     *
     * @example 403
     *
     * @var string
     */
    public $dynamicCode;

    /**
     * @description The dynamic part in the error message.
     *
     * @example present environment is not support,so skip.
     *
     * @var string
     */
    public $dynamicMessage;

    /**
     * @description The error code. This example indicates that the specified ETL task ID is invalid.
     *
     * @example InvalidJobId
     *
     * @var string
     */
    public $errCode;

    /**
     * @description The error message. This example indicates that the specified ETL task ID does not exist. In this case, the ETL task may be deleted.
     *
     * @example The specified dts job id %s is not exists.
     *
     * @var string
     */
    public $errMessage;

    /**
     * @description The logs of ETL tasks.
     *
     * @var etlRunningLogs[]
     */
    public $etlRunningLogs;

    /**
     * @description The HTTP status code.
     *
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description The ID of the request.
     *
     * @example 224DB9F7-3100-4899-AB9C-C938BCCB43E7
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the call was successful. If the call failed, false is returned.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'dynamicCode'    => 'DynamicCode',
        'dynamicMessage' => 'DynamicMessage',
        'errCode'        => 'ErrCode',
        'errMessage'     => 'ErrMessage',
        'etlRunningLogs' => 'EtlRunningLogs',
        'httpStatusCode' => 'HttpStatusCode',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dynamicCode) {
            $res['DynamicCode'] = $this->dynamicCode;
        }
        if (null !== $this->dynamicMessage) {
            $res['DynamicMessage'] = $this->dynamicMessage;
        }
        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }
        if (null !== $this->etlRunningLogs) {
            $res['EtlRunningLogs'] = [];
            if (null !== $this->etlRunningLogs && \is_array($this->etlRunningLogs)) {
                $n = 0;
                foreach ($this->etlRunningLogs as $item) {
                    $res['EtlRunningLogs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEtlJobLogsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DynamicCode'])) {
            $model->dynamicCode = $map['DynamicCode'];
        }
        if (isset($map['DynamicMessage'])) {
            $model->dynamicMessage = $map['DynamicMessage'];
        }
        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }
        if (isset($map['EtlRunningLogs'])) {
            if (!empty($map['EtlRunningLogs'])) {
                $model->etlRunningLogs = [];
                $n                     = 0;
                foreach ($map['EtlRunningLogs'] as $item) {
                    $model->etlRunningLogs[$n++] = null !== $item ? etlRunningLogs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
