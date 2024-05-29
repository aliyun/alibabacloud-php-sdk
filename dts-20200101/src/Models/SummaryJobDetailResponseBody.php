<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\SDK\Dts\V20200101\Models\SummaryJobDetailResponseBody\progressSummaryDetails;
use AlibabaCloud\Tea\Model;

class SummaryJobDetailResponseBody extends Model
{
    /**
     * @description The error code.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The HTTP status code.
     *
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description The ID of the data migration or data synchronization task.
     *
     * @example l3m1213ye7l****
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The returned information about the migrated or synchronized objects in arrays.
     *
     * >  The arrays are in the following format: [{"key":"Function","state":5,"totalCount":22},{"key":"Procedure","state":5,"totalCount":26},{"key":"Table","state":0,"totalCount":68},{"key":"View","state":5,"totalCount":100}].
     * @var progressSummaryDetails[]
     */
    public $progressSummaryDetails;

    /**
     * @description The ID of the request.
     *
     * @example 9033138C-5AB3-5EB7-BA78-43131F19297C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   **true**: The request was successful.
     *   **false**: The request failed.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'                   => 'Code',
        'httpStatusCode'         => 'HttpStatusCode',
        'jobId'                  => 'JobId',
        'progressSummaryDetails' => 'ProgressSummaryDetails',
        'requestId'              => 'RequestId',
        'success'                => 'Success',
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
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->progressSummaryDetails) {
            $res['ProgressSummaryDetails'] = [];
            if (null !== $this->progressSummaryDetails && \is_array($this->progressSummaryDetails)) {
                $n = 0;
                foreach ($this->progressSummaryDetails as $item) {
                    $res['ProgressSummaryDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return SummaryJobDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['ProgressSummaryDetails'])) {
            if (!empty($map['ProgressSummaryDetails'])) {
                $model->progressSummaryDetails = [];
                $n                             = 0;
                foreach ($map['ProgressSummaryDetails'] as $item) {
                    $model->progressSummaryDetails[$n++] = null !== $item ? progressSummaryDetails::fromMap($item) : $item;
                }
            }
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
