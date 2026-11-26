<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AISC\V20260101\Models\ListSubTasksResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AISC\V20260101\Models\ListSubTasksResponseBody\data\taskResultMessage;

class data extends Model
{
    /**
     * @var string
     */
    public $agentName;

    /**
     * @var string
     */
    public $fileHash;

    /**
     * @var int
     */
    public $gmtTaskFinished;

    /**
     * @var int
     */
    public $gmtTaskStart;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $target;

    /**
     * @var taskResultMessage
     */
    public $taskResultMessage;

    /**
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'agentName' => 'AgentName',
        'fileHash' => 'FileHash',
        'gmtTaskFinished' => 'GmtTaskFinished',
        'gmtTaskStart' => 'GmtTaskStart',
        'id' => 'Id',
        'target' => 'Target',
        'taskResultMessage' => 'TaskResultMessage',
        'taskStatus' => 'TaskStatus',
    ];

    public function validate()
    {
        if (null !== $this->taskResultMessage) {
            $this->taskResultMessage->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }

        if (null !== $this->fileHash) {
            $res['FileHash'] = $this->fileHash;
        }

        if (null !== $this->gmtTaskFinished) {
            $res['GmtTaskFinished'] = $this->gmtTaskFinished;
        }

        if (null !== $this->gmtTaskStart) {
            $res['GmtTaskStart'] = $this->gmtTaskStart;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }

        if (null !== $this->taskResultMessage) {
            $res['TaskResultMessage'] = null !== $this->taskResultMessage ? $this->taskResultMessage->toArray($noStream) : $this->taskResultMessage;
        }

        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
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
        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }

        if (isset($map['FileHash'])) {
            $model->fileHash = $map['FileHash'];
        }

        if (isset($map['GmtTaskFinished'])) {
            $model->gmtTaskFinished = $map['GmtTaskFinished'];
        }

        if (isset($map['GmtTaskStart'])) {
            $model->gmtTaskStart = $map['GmtTaskStart'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }

        if (isset($map['TaskResultMessage'])) {
            $model->taskResultMessage = taskResultMessage::fromMap($map['TaskResultMessage']);
        }

        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        return $model;
    }
}
