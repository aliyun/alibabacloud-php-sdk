<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class WorkflowInstance extends Model
{
    /**
     * @var int
     */
    public $batchProgress;

    /**
     * @var string
     */
    public $dlfWorkflowId;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $externalInstanceId;

    /**
     * @var LogInfo[]
     */
    public $runtimeLogs;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'batchProgress'      => 'BatchProgress',
        'dlfWorkflowId'      => 'DlfWorkflowId',
        'endTime'            => 'EndTime',
        'externalInstanceId' => 'ExternalInstanceId',
        'runtimeLogs'        => 'RuntimeLogs',
        'startTime'          => 'StartTime',
        'status'             => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchProgress) {
            $res['BatchProgress'] = $this->batchProgress;
        }
        if (null !== $this->dlfWorkflowId) {
            $res['DlfWorkflowId'] = $this->dlfWorkflowId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->externalInstanceId) {
            $res['ExternalInstanceId'] = $this->externalInstanceId;
        }
        if (null !== $this->runtimeLogs) {
            $res['RuntimeLogs'] = [];
            if (null !== $this->runtimeLogs && \is_array($this->runtimeLogs)) {
                $n = 0;
                foreach ($this->runtimeLogs as $item) {
                    $res['RuntimeLogs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return WorkflowInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchProgress'])) {
            $model->batchProgress = $map['BatchProgress'];
        }
        if (isset($map['DlfWorkflowId'])) {
            $model->dlfWorkflowId = $map['DlfWorkflowId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ExternalInstanceId'])) {
            $model->externalInstanceId = $map['ExternalInstanceId'];
        }
        if (isset($map['RuntimeLogs'])) {
            if (!empty($map['RuntimeLogs'])) {
                $model->runtimeLogs = [];
                $n                  = 0;
                foreach ($map['RuntimeLogs'] as $item) {
                    $model->runtimeLogs[$n++] = null !== $item ? LogInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
