<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models\GetVideoTaskInfoResponseBody;

use AlibabaCloud\SDK\Avatar\V20220130\Models\GetVideoTaskInfoResponseBody\data\taskResult;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $process;

    /**
     * @var string
     */
    public $status;

    /**
     * @var taskResult
     */
    public $taskResult;

    /**
     * @var string
     */
    public $taskUuid;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'process'    => 'Process',
        'status'     => 'Status',
        'taskResult' => 'TaskResult',
        'taskUuid'   => 'TaskUuid',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->process) {
            $res['Process'] = $this->process;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskResult) {
            $res['TaskResult'] = null !== $this->taskResult ? $this->taskResult->toMap() : null;
        }
        if (null !== $this->taskUuid) {
            $res['TaskUuid'] = $this->taskUuid;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Process'])) {
            $model->process = $map['Process'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskResult'])) {
            $model->taskResult = taskResult::fromMap($map['TaskResult']);
        }
        if (isset($map['TaskUuid'])) {
            $model->taskUuid = $map['TaskUuid'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
