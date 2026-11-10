<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayQuotaRuleSubjectUsageExportTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayQuotaRuleSubjectUsageExportTaskResponseBody\data\result;

class data extends Model
{
    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var int
     */
    public $processedCount;

    /**
     * @var result
     */
    public $result;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $subjectId;

    /**
     * @var string
     */
    public $subjectName;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'errorMessage' => 'errorMessage',
        'gatewayId' => 'gatewayId',
        'processedCount' => 'processedCount',
        'result' => 'result',
        'ruleId' => 'ruleId',
        'status' => 'status',
        'subjectId' => 'subjectId',
        'subjectName' => 'subjectName',
        'taskId' => 'taskId',
        'taskType' => 'taskType',
        'totalCount' => 'totalCount',
    ];

    public function validate()
    {
        if (null !== $this->result) {
            $this->result->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }

        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }

        if (null !== $this->processedCount) {
            $res['processedCount'] = $this->processedCount;
        }

        if (null !== $this->result) {
            $res['result'] = null !== $this->result ? $this->result->toArray($noStream) : $this->result;
        }

        if (null !== $this->ruleId) {
            $res['ruleId'] = $this->ruleId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->subjectId) {
            $res['subjectId'] = $this->subjectId;
        }

        if (null !== $this->subjectName) {
            $res['subjectName'] = $this->subjectName;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->taskType) {
            $res['taskType'] = $this->taskType;
        }

        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
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
        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }

        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        if (isset($map['processedCount'])) {
            $model->processedCount = $map['processedCount'];
        }

        if (isset($map['result'])) {
            $model->result = result::fromMap($map['result']);
        }

        if (isset($map['ruleId'])) {
            $model->ruleId = $map['ruleId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['subjectId'])) {
            $model->subjectId = $map['subjectId'];
        }

        if (isset($map['subjectName'])) {
            $model->subjectName = $map['subjectName'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['taskType'])) {
            $model->taskType = $map['taskType'];
        }

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
