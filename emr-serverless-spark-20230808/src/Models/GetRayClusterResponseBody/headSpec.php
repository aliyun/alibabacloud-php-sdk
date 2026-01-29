<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetRayClusterResponseBody;

use AlibabaCloud\Dara\Model;

class headSpec extends Model
{
    /**
     * @var string
     */
    public $cpu;

    /**
     * @var bool
     */
    public $enableAutoScaling;

    /**
     * @var int
     */
    public $idleTimeoutSeconds;

    /**
     * @var string
     */
    public $memory;

    /**
     * @var string
     */
    public $queueName;

    /**
     * @var int
     */
    public $replica;
    protected $_name = [
        'cpu' => 'cpu',
        'enableAutoScaling' => 'enableAutoScaling',
        'idleTimeoutSeconds' => 'idleTimeoutSeconds',
        'memory' => 'memory',
        'queueName' => 'queueName',
        'replica' => 'replica',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['cpu'] = $this->cpu;
        }

        if (null !== $this->enableAutoScaling) {
            $res['enableAutoScaling'] = $this->enableAutoScaling;
        }

        if (null !== $this->idleTimeoutSeconds) {
            $res['idleTimeoutSeconds'] = $this->idleTimeoutSeconds;
        }

        if (null !== $this->memory) {
            $res['memory'] = $this->memory;
        }

        if (null !== $this->queueName) {
            $res['queueName'] = $this->queueName;
        }

        if (null !== $this->replica) {
            $res['replica'] = $this->replica;
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
        if (isset($map['cpu'])) {
            $model->cpu = $map['cpu'];
        }

        if (isset($map['enableAutoScaling'])) {
            $model->enableAutoScaling = $map['enableAutoScaling'];
        }

        if (isset($map['idleTimeoutSeconds'])) {
            $model->idleTimeoutSeconds = $map['idleTimeoutSeconds'];
        }

        if (isset($map['memory'])) {
            $model->memory = $map['memory'];
        }

        if (isset($map['queueName'])) {
            $model->queueName = $map['queueName'];
        }

        if (isset($map['replica'])) {
            $model->replica = $map['replica'];
        }

        return $model;
    }
}
