<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribePreCheckStatusResponseBody\analysisJobProgress;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribePreCheckStatusResponseBody\fullNetCheckJobStatus;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribePreCheckStatusResponseBody\jobProgress;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribePreCheckStatusResponseBody\networkDiagnosisResult;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribePreCheckStatusResponseBody\subDistributedJobStatus;

class DescribePreCheckStatusResponseBody extends Model
{
    /**
     * @var analysisJobProgress[]
     */
    public $analysisJobProgress;
    /**
     * @var string
     */
    public $code;
    /**
     * @var int
     */
    public $errorAnalysisItem;
    /**
     * @var int
     */
    public $errorItem;
    /**
     * @var fullNetCheckJobStatus[]
     */
    public $fullNetCheckJobStatus;
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
     * @var networkDiagnosisResult
     */
    public $networkDiagnosisResult;
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
        if (\is_array($this->analysisJobProgress)) {
            Model::validateArray($this->analysisJobProgress);
        }
        if (\is_array($this->fullNetCheckJobStatus)) {
            Model::validateArray($this->fullNetCheckJobStatus);
        }
        if (\is_array($this->jobProgress)) {
            Model::validateArray($this->jobProgress);
        }
        if (null !== $this->networkDiagnosisResult) {
            $this->networkDiagnosisResult->validate();
        }
        if (\is_array($this->subDistributedJobStatus)) {
            Model::validateArray($this->subDistributedJobStatus);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->analysisJobProgress) {
            if (\is_array($this->analysisJobProgress)) {
                $res['AnalysisJobProgress'] = [];
                $n1                         = 0;
                foreach ($this->analysisJobProgress as $item1) {
                    $res['AnalysisJobProgress'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->fullNetCheckJobStatus)) {
                $res['FullNetCheckJobStatus'] = [];
                $n1                           = 0;
                foreach ($this->fullNetCheckJobStatus as $item1) {
                    $res['FullNetCheckJobStatus'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->jobProgress)) {
                $res['JobProgress'] = [];
                $n1                 = 0;
                foreach ($this->jobProgress as $item1) {
                    $res['JobProgress'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->networkDiagnosisResult) {
            $res['NetworkDiagnosisResult'] = null !== $this->networkDiagnosisResult ? $this->networkDiagnosisResult->toArray($noStream) : $this->networkDiagnosisResult;
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
            if (\is_array($this->subDistributedJobStatus)) {
                $res['SubDistributedJobStatus'] = [];
                $n1                             = 0;
                foreach ($this->subDistributedJobStatus as $item1) {
                    $res['SubDistributedJobStatus'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnalysisJobProgress'])) {
            if (!empty($map['AnalysisJobProgress'])) {
                $model->analysisJobProgress = [];
                $n1                         = 0;
                foreach ($map['AnalysisJobProgress'] as $item1) {
                    $model->analysisJobProgress[$n1++] = analysisJobProgress::fromMap($item1);
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
                $n1                           = 0;
                foreach ($map['FullNetCheckJobStatus'] as $item1) {
                    $model->fullNetCheckJobStatus[$n1++] = fullNetCheckJobStatus::fromMap($item1);
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
                $n1                 = 0;
                foreach ($map['JobProgress'] as $item1) {
                    $model->jobProgress[$n1++] = jobProgress::fromMap($item1);
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
                $n1                             = 0;
                foreach ($map['SubDistributedJobStatus'] as $item1) {
                    $model->subDistributedJobStatus[$n1++] = subDistributedJobStatus::fromMap($item1);
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
