<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\GetVmcoreDiagnosisTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetVmcoreDiagnosisTaskResponseBody\data\urls;

class data extends Model
{
    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $diagnoseResult;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var urls
     */
    public $urls;
    protected $_name = [
        'createdAt' => 'createdAt',
        'diagnoseResult' => 'diagnoseResult',
        'errorMsg' => 'errorMsg',
        'taskId' => 'taskId',
        'taskStatus' => 'taskStatus',
        'taskType' => 'taskType',
        'urls' => 'urls',
    ];

    public function validate()
    {
        if (null !== $this->urls) {
            $this->urls->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->diagnoseResult) {
            $res['diagnoseResult'] = $this->diagnoseResult;
        }

        if (null !== $this->errorMsg) {
            $res['errorMsg'] = $this->errorMsg;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->taskStatus) {
            $res['taskStatus'] = $this->taskStatus;
        }

        if (null !== $this->taskType) {
            $res['taskType'] = $this->taskType;
        }

        if (null !== $this->urls) {
            $res['urls'] = null !== $this->urls ? $this->urls->toArray($noStream) : $this->urls;
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
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['diagnoseResult'])) {
            $model->diagnoseResult = $map['diagnoseResult'];
        }

        if (isset($map['errorMsg'])) {
            $model->errorMsg = $map['errorMsg'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['taskStatus'])) {
            $model->taskStatus = $map['taskStatus'];
        }

        if (isset($map['taskType'])) {
            $model->taskType = $map['taskType'];
        }

        if (isset($map['urls'])) {
            $model->urls = urls::fromMap($map['urls']);
        }

        return $model;
    }
}
