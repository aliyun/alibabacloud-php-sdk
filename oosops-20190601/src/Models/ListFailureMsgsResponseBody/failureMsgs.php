<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oosops\V20190601\Models\ListFailureMsgsResponseBody;

use AlibabaCloud\Tea\Model;

class failureMsgs extends Model
{
    /**
     * @var string
     */
    public $aliUid;

    /**
     * @var string
     */
    public $executionId;

    /**
     * @var string
     */
    public $messageBody;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $taskExecutionId;
    protected $_name = [
        'aliUid'          => 'AliUid',
        'executionId'     => 'ExecutionId',
        'messageBody'     => 'MessageBody',
        'reason'          => 'Reason',
        'taskExecutionId' => 'TaskExecutionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->executionId) {
            $res['ExecutionId'] = $this->executionId;
        }
        if (null !== $this->messageBody) {
            $res['MessageBody'] = $this->messageBody;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->taskExecutionId) {
            $res['TaskExecutionId'] = $this->taskExecutionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return failureMsgs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['ExecutionId'])) {
            $model->executionId = $map['ExecutionId'];
        }
        if (isset($map['MessageBody'])) {
            $model->messageBody = $map['MessageBody'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['TaskExecutionId'])) {
            $model->taskExecutionId = $map['TaskExecutionId'];
        }

        return $model;
    }
}
