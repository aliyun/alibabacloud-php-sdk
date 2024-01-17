<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class SubmitAsyncTaskRequest extends Model
{
    /**
     * @example 2daaa2e0c209xb26acb97009ea77bd4b_p_efm
     *
     * @var string
     */
    public $agentKey;

    /**
     * @example MaterialDocumentUpload
     *
     * @var string
     */
    public $taskCode;

    /**
     * @example 2023-10-14 14:30:00
     *
     * @var string
     */
    public $taskExecuteTime;

    /**
     * @example 任务名称
     *
     * @var string
     */
    public $taskName;

    /**
     * @example 任务提交参数
     *
     * @var string
     */
    public $taskParam;
    protected $_name = [
        'agentKey'        => 'AgentKey',
        'taskCode'        => 'TaskCode',
        'taskExecuteTime' => 'TaskExecuteTime',
        'taskName'        => 'TaskName',
        'taskParam'       => 'TaskParam',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }
        if (null !== $this->taskCode) {
            $res['TaskCode'] = $this->taskCode;
        }
        if (null !== $this->taskExecuteTime) {
            $res['TaskExecuteTime'] = $this->taskExecuteTime;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskParam) {
            $res['TaskParam'] = $this->taskParam;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitAsyncTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['TaskCode'])) {
            $model->taskCode = $map['TaskCode'];
        }
        if (isset($map['TaskExecuteTime'])) {
            $model->taskExecuteTime = $map['TaskExecuteTime'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskParam'])) {
            $model->taskParam = $map['TaskParam'];
        }

        return $model;
    }
}
