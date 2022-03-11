<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\SDK\Dts\V20200101\Models\SummaryJobDetailResponseBody\progressSummaryDetails;
use AlibabaCloud\Tea\Model;

class SummaryJobDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var progressSummaryDetails[]
     */
    public $progressSummaryDetails;

    /**
     * @var string
     */
    public $requestId;

    /**
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
