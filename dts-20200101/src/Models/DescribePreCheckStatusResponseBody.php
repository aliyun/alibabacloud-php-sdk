<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribePreCheckStatusResponseBody\jobProgress;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribePreCheckStatusResponseBody\subDistributedJobStatus;
use AlibabaCloud\Tea\Model;

class DescribePreCheckStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $errorItem;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @var jobProgress[]
     */
    public $jobProgress;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageRecordCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $state;

    /**
     * @var subDistributedJobStatus[]
     */
    public $subDistributedJobStatus;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var int
     */
    public $total;

    /**
     * @var int
     */
    public $totalRecordCount;
    protected $_name = [
        'code'                    => 'Code',
        'errorItem'               => 'ErrorItem',
        'httpStatusCode'          => 'HttpStatusCode',
        'jobId'                   => 'JobId',
        'jobName'                 => 'JobName',
        'jobProgress'             => 'JobProgress',
        'pageNumber'              => 'PageNumber',
        'pageRecordCount'         => 'PageRecordCount',
        'requestId'               => 'RequestId',
        'state'                   => 'State',
        'subDistributedJobStatus' => 'SubDistributedJobStatus',
        'success'                 => 'Success',
        'total'                   => 'Total',
        'totalRecordCount'        => 'TotalRecordCount',
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
        if (null !== $this->errorItem) {
            $res['ErrorItem'] = $this->errorItem;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->jobProgress) {
            $res['JobProgress'] = [];
            if (null !== $this->jobProgress && \is_array($this->jobProgress)) {
                $n = 0;
                foreach ($this->jobProgress as $item) {
                    $res['JobProgress'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageRecordCount) {
            $res['PageRecordCount'] = $this->pageRecordCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->subDistributedJobStatus) {
            $res['SubDistributedJobStatus'] = [];
            if (null !== $this->subDistributedJobStatus && \is_array($this->subDistributedJobStatus)) {
                $n = 0;
                foreach ($this->subDistributedJobStatus as $item) {
                    $res['SubDistributedJobStatus'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->totalRecordCount) {
            $res['TotalRecordCount'] = $this->totalRecordCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePreCheckStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ErrorItem'])) {
            $model->errorItem = $map['ErrorItem'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['JobProgress'])) {
            if (!empty($map['JobProgress'])) {
                $model->jobProgress = [];
                $n                  = 0;
                foreach ($map['JobProgress'] as $item) {
                    $model->jobProgress[$n++] = null !== $item ? jobProgress::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageRecordCount'])) {
            $model->pageRecordCount = $map['PageRecordCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['SubDistributedJobStatus'])) {
            if (!empty($map['SubDistributedJobStatus'])) {
                $model->subDistributedJobStatus = [];
                $n                              = 0;
                foreach ($map['SubDistributedJobStatus'] as $item) {
                    $model->subDistributedJobStatus[$n++] = null !== $item ? subDistributedJobStatus::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['TotalRecordCount'])) {
            $model->totalRecordCount = $map['TotalRecordCount'];
        }

        return $model;
    }
}
