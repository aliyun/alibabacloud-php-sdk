<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models;

use AlibabaCloud\Dara\Model;

class DeleteQueueShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $collina;

    /**
     * @var string
     */
    public $consoleSessionId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $queueName;

    /**
     * @var string
     */
    public $queueNamesShrink;

    /**
     * @var string
     */
    public $umidToken;

    /**
     * @var string
     */
    public $vhostName;
    protected $_name = [
        'collina' => 'Collina',
        'consoleSessionId' => 'ConsoleSessionId',
        'instanceId' => 'InstanceId',
        'queueName' => 'QueueName',
        'queueNamesShrink' => 'QueueNames',
        'umidToken' => 'UmidToken',
        'vhostName' => 'VhostName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->collina) {
            $res['Collina'] = $this->collina;
        }

        if (null !== $this->consoleSessionId) {
            $res['ConsoleSessionId'] = $this->consoleSessionId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
        }

        if (null !== $this->queueNamesShrink) {
            $res['QueueNames'] = $this->queueNamesShrink;
        }

        if (null !== $this->umidToken) {
            $res['UmidToken'] = $this->umidToken;
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
        if (isset($map['Collina'])) {
            $model->collina = $map['Collina'];
        }

        if (isset($map['ConsoleSessionId'])) {
            $model->consoleSessionId = $map['ConsoleSessionId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }

        if (isset($map['QueueNames'])) {
            $model->queueNamesShrink = $map['QueueNames'];
        }

        if (isset($map['UmidToken'])) {
            $model->umidToken = $map['UmidToken'];
        }

        if (isset($map['VhostName'])) {
            $model->vhostName = $map['VhostName'];
        }

        return $model;
    }
}
