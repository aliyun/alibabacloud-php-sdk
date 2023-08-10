<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribePreCheckStatusResponseBody\analysisJobProgress;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribePreCheckStatusResponseBody\fullNetCheckJobStatus;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribePreCheckStatusResponseBody\jobProgress;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribePreCheckStatusResponseBody\networkDiagnosisResult;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribePreCheckStatusResponseBody\subDistributedJobStatus;
use AlibabaCloud\Tea\Model;

class DescribePreCheckStatusResponseBody extends Model
{
    /**
     * @var analysisJobProgress[]
     */
    public $analysisJobProgress;

    /**
     * @description The task code that indicates the subtask type. Valid values:
     *
     *   **01**: precheck
     *   **02**: schema migration or initial schema synchronization
     *   **03**: full data migration or initial full data synchronization
     *   **04**: incremental data migration or synchronization
     *
     * @example 01
     *
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $errorAnalysisItem;

    /**
     * @description The total number of subtask failures.
     *
     * @example 0
     *
     * @var int
     */
    public $errorItem;

    /**
     * @var fullNetCheckJobStatus[]
     */
    public $fullNetCheckJobStatus;

    /**
     * @description The HTTP status code.
     *
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description The ID of the data migration or synchronization task.
     *
     * @example b4my3zg929a****
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The name of the subtask.
     *
     * @var string
     */
    public $jobName;

    /**
     * @description The list of subtasks and the progress of each subtask.
     *
     * @var jobProgress[]
     */
    public $jobProgress;

    /**
     * @var networkDiagnosisResult
     */
    public $networkDiagnosisResult;

    /**
     * @description The number of the page returned. The value is an integer that is greater than **0** and does not exceed the maximum value of the Integer data type. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageRecordCount;

    /**
     * @description The ID of the request.
     *
     * @example C096FA97-B6BA-4575-899D-61E12B59****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status of the subtask. Valid values:
     *
     *   **NotStarted**: The subtask is not started.
     *   **Suspending**: The subtask is paused.
     *   **Checking**: The subtask is being checked.
     *   **Migrating**: The subtask is in progress. Data is being migrated.
     *   **Failed**: The subtask failed.
     *   **Catched**: The subtask is in progress. Incremental data is being migrated or synchronized.
     *   **Finished**: The subtask is complete.
     *
     * @example Finished
     *
     * @var string
     */
    public $state;

    /**
     * @description The state of the distributed subtask.
     *
     * @var subDistributedJobStatus[]
     */
    public $subDistributedJobStatus;

    /**
     * @description Indicates whether the request was successful.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The total number of subtasks.
     *
     * @example 0
     *
     * @var int
     */
    public $total;

    /**
     * @description The total number of returned records.
     *
     * @example 100
     *
     * @var int
     */
    public $totalRecordCount;
    protected $_name = [
        'analysisJobProgress'     => 'AnalysisJobProgress',
        'code'                    => 'Code',
        'errorAnalysisItem'       => 'ErrorAnalysisItem',
        'errorItem'               => 'ErrorItem',
        'fullNetCheckJobStatus'   => 'FullNetCheckJobStatus',
        'httpStatusCode'          => 'HttpStatusCode',
        'jobId'                   => 'JobId',
        'jobName'                 => 'JobName',
        'jobProgress'             => 'JobProgress',
        'networkDiagnosisResult'  => 'NetworkDiagnosisResult',
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
        if (null !== $this->analysisJobProgress) {
            $res['AnalysisJobProgress'] = [];
            if (null !== $this->analysisJobProgress && \is_array($this->analysisJobProgress)) {
                $n = 0;
                foreach ($this->analysisJobProgress as $item) {
                    $res['AnalysisJobProgress'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->errorAnalysisItem) {
            $res['ErrorAnalysisItem'] = $this->errorAnalysisItem;
        }
        if (null !== $this->errorItem) {
            $res['ErrorItem'] = $this->errorItem;
        }
        if (null !== $this->fullNetCheckJobStatus) {
            $res['FullNetCheckJobStatus'] = [];
            if (null !== $this->fullNetCheckJobStatus && \is_array($this->fullNetCheckJobStatus)) {
                $n = 0;
                foreach ($this->fullNetCheckJobStatus as $item) {
                    $res['FullNetCheckJobStatus'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->networkDiagnosisResult) {
            $res['NetworkDiagnosisResult'] = null !== $this->networkDiagnosisResult ? $this->networkDiagnosisResult->toMap() : null;
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
        if (isset($map['AnalysisJobProgress'])) {
            if (!empty($map['AnalysisJobProgress'])) {
                $model->analysisJobProgress = [];
                $n                          = 0;
                foreach ($map['AnalysisJobProgress'] as $item) {
                    $model->analysisJobProgress[$n++] = null !== $item ? analysisJobProgress::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ErrorAnalysisItem'])) {
            $model->errorAnalysisItem = $map['ErrorAnalysisItem'];
        }
        if (isset($map['ErrorItem'])) {
            $model->errorItem = $map['ErrorItem'];
        }
        if (isset($map['FullNetCheckJobStatus'])) {
            if (!empty($map['FullNetCheckJobStatus'])) {
                $model->fullNetCheckJobStatus = [];
                $n                            = 0;
                foreach ($map['FullNetCheckJobStatus'] as $item) {
                    $model->fullNetCheckJobStatus[$n++] = null !== $item ? fullNetCheckJobStatus::fromMap($item) : $item;
                }
            }
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
        if (isset($map['NetworkDiagnosisResult'])) {
            $model->networkDiagnosisResult = networkDiagnosisResult::fromMap($map['NetworkDiagnosisResult']);
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
