<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AlikafkaKopilot\V20260414\Models\KopilotListConversationChatMessagesResponseBody\data\scheduledTaskInfo\tasks;

use AlibabaCloud\Dara\Model;

class activeRun extends Model
{
    /**
     * @var string
     */
    public $finishedAt;

    /**
     * @var string
     */
    public $runId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'finishedAt' => 'FinishedAt',
        'runId' => 'RunId',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->finishedAt) {
            $res['FinishedAt'] = $this->finishedAt;
        }

        if (null !== $this->runId) {
            $res['RunId'] = $this->runId;
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
        if (isset($map['FinishedAt'])) {
            $model->finishedAt = $map['FinishedAt'];
        }

        if (isset($map['RunId'])) {
            $model->runId = $map['RunId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
