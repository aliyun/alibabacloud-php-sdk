<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSoarPlaybookTaskDetailResponseBody;

use AlibabaCloud\Tea\Model;

class taskDetail extends Model
{
    /**
     * @description Log information of the task.
     *
     * @example {"status":1, "errMsg":"paramError"}
     *
     * @var string
     */
    public $logInfo;

    /**
     * @description Parameters for invoking the playbook.
     *
     * @example params1
     *
     * @var string
     */
    public $params;

    /**
     * @description Process information corresponding to the strategy.
     *
     * @example {"edges":[{"level":0,"removeFlag":0,"source":1,"target":8}]}
     *
     * @var string
     */
    public $processInfo;

    /**
     * @description Task name.
     *
     * @example task1
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'logInfo' => 'LogInfo',
        'params' => 'Params',
        'processInfo' => 'ProcessInfo',
        'taskName' => 'TaskName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->logInfo) {
            $res['LogInfo'] = $this->logInfo;
        }
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }
        if (null !== $this->processInfo) {
            $res['ProcessInfo'] = $this->processInfo;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogInfo'])) {
            $model->logInfo = $map['LogInfo'];
        }
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }
        if (isset($map['ProcessInfo'])) {
            $model->processInfo = $map['ProcessInfo'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
