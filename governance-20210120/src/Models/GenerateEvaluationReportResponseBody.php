<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models;

use AlibabaCloud\Dara\Model;

class GenerateEvaluationReportResponseBody extends Model
{
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var float
     */
    public $evaluationScore;

    /**
     * @var string
     */
    public $evaluationTime;

    /**
     * @var string
     */
    public $finished;

    /**
     * @var string
     */
    public $reportType;

    /**
     * @var string
     */
    public $reportUrl;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accountId' => 'AccountId',
        'evaluationScore' => 'EvaluationScore',
        'evaluationTime' => 'EvaluationTime',
        'finished' => 'Finished',
        'reportType' => 'ReportType',
        'reportUrl' => 'ReportUrl',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        if (null !== $this->evaluationScore) {
            $res['EvaluationScore'] = $this->evaluationScore;
        }

        if (null !== $this->evaluationTime) {
            $res['EvaluationTime'] = $this->evaluationTime;
        }

        if (null !== $this->finished) {
            $res['Finished'] = $this->finished;
        }

        if (null !== $this->reportType) {
            $res['ReportType'] = $this->reportType;
        }

        if (null !== $this->reportUrl) {
            $res['ReportUrl'] = $this->reportUrl;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        if (isset($map['EvaluationScore'])) {
            $model->evaluationScore = $map['EvaluationScore'];
        }

        if (isset($map['EvaluationTime'])) {
            $model->evaluationTime = $map['EvaluationTime'];
        }

        if (isset($map['Finished'])) {
            $model->finished = $map['Finished'];
        }

        if (isset($map['ReportType'])) {
            $model->reportType = $map['ReportType'];
        }

        if (isset($map['ReportUrl'])) {
            $model->reportUrl = $map['ReportUrl'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
