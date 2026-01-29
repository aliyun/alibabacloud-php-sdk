<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\UpdateRayClusterRequest;

use AlibabaCloud\Dara\Model;

class workerSpec extends Model
{
    /**
     * @var string
     */
    public $cpu;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var int
     */
    public $maxReplica;

    /**
     * @var string
     */
    public $memory;

    /**
     * @var int
     */
    public $minReplica;

    /**
     * @var string
     */
    public $queueName;

    /**
     * @var int
     */
    public $replica;

    /**
     * @var string
     */
    public $workerType;
    protected $_name = [
        'cpu' => 'cpu',
        'groupName' => 'groupName',
        'maxReplica' => 'maxReplica',
        'memory' => 'memory',
        'minReplica' => 'minReplica',
        'queueName' => 'queueName',
        'replica' => 'replica',
        'workerType' => 'workerType',
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

        if (null !== $this->groupName) {
            $res['groupName'] = $this->groupName;
        }

        if (null !== $this->maxReplica) {
            $res['maxReplica'] = $this->maxReplica;
        }

        if (null !== $this->memory) {
            $res['memory'] = $this->memory;
        }

        if (null !== $this->minReplica) {
            $res['minReplica'] = $this->minReplica;
        }

        if (null !== $this->queueName) {
            $res['queueName'] = $this->queueName;
        }

        if (null !== $this->replica) {
            $res['replica'] = $this->replica;
        }

        if (null !== $this->workerType) {
            $res['workerType'] = $this->workerType;
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

        if (isset($map['groupName'])) {
            $model->groupName = $map['groupName'];
        }

        if (isset($map['maxReplica'])) {
            $model->maxReplica = $map['maxReplica'];
        }

        if (isset($map['memory'])) {
            $model->memory = $map['memory'];
        }

        if (isset($map['minReplica'])) {
            $model->minReplica = $map['minReplica'];
        }

        if (isset($map['queueName'])) {
            $model->queueName = $map['queueName'];
        }

        if (isset($map['replica'])) {
            $model->replica = $map['replica'];
        }

        if (isset($map['workerType'])) {
            $model->workerType = $map['workerType'];
        }

        return $model;
    }
}
