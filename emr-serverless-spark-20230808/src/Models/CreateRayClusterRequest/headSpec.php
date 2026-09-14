<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateRayClusterRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateRayClusterRequest\headSpec\gftConfig;

class headSpec extends Model
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
     * @var bool
     */
    public $enableAutoScaling;

    /**
     * @var string
     */
    public $env;

    /**
     * @var gftConfig
     */
    public $gftConfig;

    /**
     * @var bool
     */
    public $gftEnabled;

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
    protected $_name = [
        'cpu' => 'cpu',
        'displayReleaseVersion' => 'displayReleaseVersion',
        'enableAutoScaling' => 'enableAutoScaling',
        'env' => 'env',
        'gftConfig' => 'gftConfig',
        'gftEnabled' => 'gftEnabled',
        'gpuSpec' => 'gpuSpec',
        'idleTimeoutSeconds' => 'idleTimeoutSeconds',
        'memory' => 'memory',
        'queueName' => 'queueName',
        'rayStartParams' => 'rayStartParams',
    ];

    public function validate()
    {
        if (null !== $this->gftConfig) {
            $this->gftConfig->validate();
        }
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

        if (null !== $this->enableAutoScaling) {
            $res['enableAutoScaling'] = $this->enableAutoScaling;
        }

        if (null !== $this->env) {
            $res['env'] = $this->env;
        }

        if (null !== $this->gftConfig) {
            $res['gftConfig'] = null !== $this->gftConfig ? $this->gftConfig->toArray($noStream) : $this->gftConfig;
        }

        if (null !== $this->gftEnabled) {
            $res['gftEnabled'] = $this->gftEnabled;
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

        if (isset($map['enableAutoScaling'])) {
            $model->enableAutoScaling = $map['enableAutoScaling'];
        }

        if (isset($map['env'])) {
            $model->env = $map['env'];
        }

        if (isset($map['gftConfig'])) {
            $model->gftConfig = gftConfig::fromMap($map['gftConfig']);
        }

        if (isset($map['gftEnabled'])) {
            $model->gftEnabled = $map['gftEnabled'];
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

        return $model;
    }
}
