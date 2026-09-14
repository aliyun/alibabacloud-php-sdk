<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetRayClusterResponseBody;

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
    public $displayReleaseVersion;

    /**
     * @var string
     */
    public $env;

    /**
     * @var string
     */
    public $gpuSpec;

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
     * @var string
     */
    public $rayStartParams;

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
        'displayReleaseVersion' => 'displayReleaseVersion',
        'env' => 'env',
        'gpuSpec' => 'gpuSpec',
        'groupName' => 'groupName',
        'maxReplica' => 'maxReplica',
        'memory' => 'memory',
        'minReplica' => 'minReplica',
        'queueName' => 'queueName',
        'rayStartParams' => 'rayStartParams',
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

        if (null !== $this->displayReleaseVersion) {
            $res['displayReleaseVersion'] = $this->displayReleaseVersion;
        }

        if (null !== $this->env) {
            $res['env'] = $this->env;
        }

        if (null !== $this->gpuSpec) {
            $res['gpuSpec'] = $this->gpuSpec;
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

        if (null !== $this->rayStartParams) {
            $res['rayStartParams'] = $this->rayStartParams;
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

        if (isset($map['displayReleaseVersion'])) {
            $model->displayReleaseVersion = $map['displayReleaseVersion'];
        }

        if (isset($map['env'])) {
            $model->env = $map['env'];
        }

        if (isset($map['gpuSpec'])) {
            $model->gpuSpec = $map['gpuSpec'];
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

        if (isset($map['rayStartParams'])) {
            $model->rayStartParams = $map['rayStartParams'];
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
