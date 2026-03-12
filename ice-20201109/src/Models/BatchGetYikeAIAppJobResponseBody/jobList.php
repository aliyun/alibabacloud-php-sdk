<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\BatchGetYikeAIAppJobResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\BatchGetYikeAIAppJobResponseBody\jobList\result;

class jobList extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appInputConfig;

    /**
     * @var string
     */
    public $executionFinishTime;

    /**
     * @var string
     */
    public $executionStartTime;

    /**
     * @var string
     */
    public $folderId;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $productionId;

    /**
     * @var result
     */
    public $result;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'appId' => 'AppId',
        'appInputConfig' => 'AppInputConfig',
        'executionFinishTime' => 'ExecutionFinishTime',
        'executionStartTime' => 'ExecutionStartTime',
        'folderId' => 'FolderId',
        'jobId' => 'JobId',
        'productionId' => 'ProductionId',
        'result' => 'Result',
        'status' => 'Status',
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
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appInputConfig) {
            $res['AppInputConfig'] = $this->appInputConfig;
        }

        if (null !== $this->executionFinishTime) {
            $res['ExecutionFinishTime'] = $this->executionFinishTime;
        }

        if (null !== $this->executionStartTime) {
            $res['ExecutionStartTime'] = $this->executionStartTime;
        }

        if (null !== $this->folderId) {
            $res['FolderId'] = $this->folderId;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->productionId) {
            $res['ProductionId'] = $this->productionId;
        }

        if (null !== $this->result) {
            $res['Result'] = null !== $this->result ? $this->result->toArray($noStream) : $this->result;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppInputConfig'])) {
            $model->appInputConfig = $map['AppInputConfig'];
        }

        if (isset($map['ExecutionFinishTime'])) {
            $model->executionFinishTime = $map['ExecutionFinishTime'];
        }

        if (isset($map['ExecutionStartTime'])) {
            $model->executionStartTime = $map['ExecutionStartTime'];
        }

        if (isset($map['FolderId'])) {
            $model->folderId = $map['FolderId'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['ProductionId'])) {
            $model->productionId = $map['ProductionId'];
        }

        if (isset($map['Result'])) {
            $model->result = result::fromMap($map['Result']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
