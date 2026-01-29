<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\UpdateRayClusterRequest;

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
    protected $_name = [
        'cpu' => 'cpu',
        'enableAutoScaling' => 'enableAutoScaling',
        'idleTimeoutSeconds' => 'idleTimeoutSeconds',
        'memory' => 'memory',
        'queueName' => 'queueName',
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

        return $model;
    }
}
