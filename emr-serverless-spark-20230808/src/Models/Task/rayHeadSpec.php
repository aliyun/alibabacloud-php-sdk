<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\Task;

use AlibabaCloud\Dara\Model;

class rayHeadSpec extends Model
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
     * @var string
     */
    public $env;

    /**
     * @var string
     */
    public $gpuSpec;

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
     * @var string
     */
    public $rayStartParams;

    /**
     * @var string
     */
    public $rayVersion;

    /**
     * @var int
     */
    public $replica;
    protected $_name = [
        'cpu' => 'cpu',
        'enableAutoScaling' => 'enableAutoScaling',
        'env' => 'env',
        'gpuSpec' => 'gpuSpec',
        'idleTimeoutSeconds' => 'idleTimeoutSeconds',
        'memory' => 'memory',
        'queueName' => 'queueName',
        'rayStartParams' => 'rayStartParams',
        'rayVersion' => 'rayVersion',
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

        if (null !== $this->env) {
            $res['env'] = $this->env;
        }

        if (null !== $this->gpuSpec) {
            $res['gpuSpec'] = $this->gpuSpec;
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

        if (null !== $this->rayStartParams) {
            $res['rayStartParams'] = $this->rayStartParams;
        }

        if (null !== $this->rayVersion) {
            $res['rayVersion'] = $this->rayVersion;
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

        if (isset($map['env'])) {
            $model->env = $map['env'];
        }

        if (isset($map['gpuSpec'])) {
            $model->gpuSpec = $map['gpuSpec'];
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

        if (isset($map['rayStartParams'])) {
            $model->rayStartParams = $map['rayStartParams'];
        }

        if (isset($map['rayVersion'])) {
            $model->rayVersion = $map['rayVersion'];
        }

        if (isset($map['replica'])) {
            $model->replica = $map['replica'];
        }

        return $model;
    }
}
