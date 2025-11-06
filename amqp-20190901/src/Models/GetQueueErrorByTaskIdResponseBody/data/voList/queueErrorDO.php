<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models\GetQueueErrorByTaskIdResponseBody\data\voList;

use AlibabaCloud\Dara\Model;

class queueErrorDO extends Model
{
    /**
     * @var bool
     */
    public $autoDelete;

    /**
     * @var bool
     */
    public $durable;

    /**
     * @var int
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $queueName;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var string
     */
    public $vhostName;
    protected $_name = [
        'autoDelete' => 'AutoDelete',
        'durable' => 'Durable',
        'errorMessage' => 'ErrorMessage',
        'queueName' => 'QueueName',
        'taskId' => 'TaskId',
        'vhostName' => 'VhostName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoDelete) {
            $res['AutoDelete'] = $this->autoDelete;
        }

        if (null !== $this->durable) {
            $res['Durable'] = $this->durable;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->vhostName) {
            $res['VhostName'] = $this->vhostName;
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
        if (isset($map['AutoDelete'])) {
            $model->autoDelete = $map['AutoDelete'];
        }

        if (isset($map['Durable'])) {
            $model->durable = $map['Durable'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['VhostName'])) {
            $model->vhostName = $map['VhostName'];
        }

        return $model;
    }
}
