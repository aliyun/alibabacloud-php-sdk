<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationResultsResponseBody\results;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationResultsResponseBody\results\metricResults\accountSummary;
use AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationResultsResponseBody\results\metricResults\availableRemediation;
use AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationResultsResponseBody\results\metricResults\errorInfo;
use AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationResultsResponseBody\results\metricResults\resourcesSummary;

class metricResults extends Model
{
    /**
     * @var accountSummary
     */
    public $accountSummary;

    /**
     * @var availableRemediation[]
     */
    public $availableRemediation;

    /**
     * @var errorInfo
     */
    public $errorInfo;

    /**
     * @var string
     */
    public $evaluationTime;

    /**
     * @var string
     */
    public $id;

    /**
     * @var float
     */
    public $potentialScoreIncrease;

    /**
     * @var resourcesSummary
     */
    public $resourcesSummary;

    /**
     * @var float
     */
    public $result;

    /**
     * @var string
     */
    public $risk;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'accountSummary' => 'AccountSummary',
        'availableRemediation' => 'AvailableRemediation',
        'errorInfo' => 'ErrorInfo',
        'evaluationTime' => 'EvaluationTime',
        'id' => 'Id',
        'potentialScoreIncrease' => 'PotentialScoreIncrease',
        'resourcesSummary' => 'ResourcesSummary',
        'result' => 'Result',
        'risk' => 'Risk',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->accountSummary) {
            $this->accountSummary->validate();
        }
        if (\is_array($this->availableRemediation)) {
            Model::validateArray($this->availableRemediation);
        }
        if (null !== $this->errorInfo) {
            $this->errorInfo->validate();
        }
        if (null !== $this->resourcesSummary) {
            $this->resourcesSummary->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountSummary) {
            $res['AccountSummary'] = null !== $this->accountSummary ? $this->accountSummary->toArray($noStream) : $this->accountSummary;
        }

        if (null !== $this->availableRemediation) {
            if (\is_array($this->availableRemediation)) {
                $res['AvailableRemediation'] = [];
                $n1 = 0;
                foreach ($this->availableRemediation as $item1) {
                    $res['AvailableRemediation'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->errorInfo) {
            $res['ErrorInfo'] = null !== $this->errorInfo ? $this->errorInfo->toArray($noStream) : $this->errorInfo;
        }

        if (null !== $this->evaluationTime) {
            $res['EvaluationTime'] = $this->evaluationTime;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->potentialScoreIncrease) {
            $res['PotentialScoreIncrease'] = $this->potentialScoreIncrease;
        }

        if (null !== $this->resourcesSummary) {
            $res['ResourcesSummary'] = null !== $this->resourcesSummary ? $this->resourcesSummary->toArray($noStream) : $this->resourcesSummary;
        }

        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        if (null !== $this->risk) {
            $res['Risk'] = $this->risk;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AccountSummary'])) {
            $model->accountSummary = accountSummary::fromMap($map['AccountSummary']);
        }

        if (isset($map['AvailableRemediation'])) {
            if (!empty($map['AvailableRemediation'])) {
                $model->availableRemediation = [];
                $n1 = 0;
                foreach ($map['AvailableRemediation'] as $item1) {
                    $model->availableRemediation[$n1] = availableRemediation::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ErrorInfo'])) {
            $model->errorInfo = errorInfo::fromMap($map['ErrorInfo']);
        }

        if (isset($map['EvaluationTime'])) {
            $model->evaluationTime = $map['EvaluationTime'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['PotentialScoreIncrease'])) {
            $model->potentialScoreIncrease = $map['PotentialScoreIncrease'];
        }

        if (isset($map['ResourcesSummary'])) {
            $model->resourcesSummary = resourcesSummary::fromMap($map['ResourcesSummary']);
        }

        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        if (isset($map['Risk'])) {
            $model->risk = $map['Risk'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
