<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachDebugResultResponseBody\dialogueList;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachDebugResultResponseBody\taskReport;

class GetAICoachDebugResultResponseBody extends Model
{
    /**
     * @var string
     */
    public $aliyunSubId;

    /**
     * @var string
     */
    public $dataId;

    /**
     * @var int
     */
    public $dataType;

    /**
     * @var dialogueList[]
     */
    public $dialogueList;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $finishTime;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $scriptDebugId;

    /**
     * @var int
     */
    public $status;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var taskReport
     */
    public $taskReport;
    protected $_name = [
        'aliyunSubId' => 'aliyunSubId',
        'dataId' => 'dataId',
        'dataType' => 'dataType',
        'dialogueList' => 'dialogueList',
        'errorCode' => 'errorCode',
        'errorMessage' => 'errorMessage',
        'finishTime' => 'finishTime',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'requestId' => 'requestId',
        'scriptDebugId' => 'scriptDebugId',
        'status' => 'status',
        'success' => 'success',
        'taskId' => 'taskId',
        'taskReport' => 'taskReport',
    ];

    public function validate()
    {
        if (\is_array($this->dialogueList)) {
            Model::validateArray($this->dialogueList);
        }
        if (null !== $this->taskReport) {
            $this->taskReport->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunSubId) {
            $res['aliyunSubId'] = $this->aliyunSubId;
        }

        if (null !== $this->dataId) {
            $res['dataId'] = $this->dataId;
        }

        if (null !== $this->dataType) {
            $res['dataType'] = $this->dataType;
        }

        if (null !== $this->dialogueList) {
            if (\is_array($this->dialogueList)) {
                $res['dialogueList'] = [];
                $n1 = 0;
                foreach ($this->dialogueList as $item1) {
                    $res['dialogueList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }

        if (null !== $this->finishTime) {
            $res['finishTime'] = $this->finishTime;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->scriptDebugId) {
            $res['scriptDebugId'] = $this->scriptDebugId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->taskReport) {
            $res['taskReport'] = null !== $this->taskReport ? $this->taskReport->toArray($noStream) : $this->taskReport;
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
        if (isset($map['aliyunSubId'])) {
            $model->aliyunSubId = $map['aliyunSubId'];
        }

        if (isset($map['dataId'])) {
            $model->dataId = $map['dataId'];
        }

        if (isset($map['dataType'])) {
            $model->dataType = $map['dataType'];
        }

        if (isset($map['dialogueList'])) {
            if (!empty($map['dialogueList'])) {
                $model->dialogueList = [];
                $n1 = 0;
                foreach ($map['dialogueList'] as $item1) {
                    $model->dialogueList[$n1] = dialogueList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }

        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }

        if (isset($map['finishTime'])) {
            $model->finishTime = $map['finishTime'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['scriptDebugId'])) {
            $model->scriptDebugId = $map['scriptDebugId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['taskReport'])) {
            $model->taskReport = taskReport::fromMap($map['taskReport']);
        }

        return $model;
    }
}
