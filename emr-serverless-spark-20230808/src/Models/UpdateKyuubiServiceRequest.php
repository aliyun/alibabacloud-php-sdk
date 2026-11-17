<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;

class UpdateKyuubiServiceRequest extends Model
{
    /**
     * @var string
     */
    public $computeInstance;

    /**
     * @var int
     */
    public $expectedReplica;

    /**
     * @var string
     */
    public $kyuubiConfigs;

    /**
     * @var string
     */
    public $kyuubiReleaseVersion;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $publicEndpointEnabled;

    /**
     * @var string
     */
    public $queue;

    /**
     * @var bool
     */
    public $refresh;

    /**
     * @var string
     */
    public $releaseVersion;

    /**
     * @var int
     */
    public $replica;

    /**
     * @var bool
     */
    public $restart;

    /**
     * @var bool
     */
    public $scale;

    /**
     * @var string
     */
    public $sparkConfigs;
    protected $_name = [
        'computeInstance' => 'computeInstance',
        'expectedReplica' => 'expectedReplica',
        'kyuubiConfigs' => 'kyuubiConfigs',
        'kyuubiReleaseVersion' => 'kyuubiReleaseVersion',
        'name' => 'name',
        'publicEndpointEnabled' => 'publicEndpointEnabled',
        'queue' => 'queue',
        'refresh' => 'refresh',
        'releaseVersion' => 'releaseVersion',
        'replica' => 'replica',
        'restart' => 'restart',
        'scale' => 'scale',
        'sparkConfigs' => 'sparkConfigs',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->computeInstance) {
            $res['computeInstance'] = $this->computeInstance;
        }

        if (null !== $this->expectedReplica) {
            $res['expectedReplica'] = $this->expectedReplica;
        }

        if (null !== $this->kyuubiConfigs) {
            $res['kyuubiConfigs'] = $this->kyuubiConfigs;
        }

        if (null !== $this->kyuubiReleaseVersion) {
            $res['kyuubiReleaseVersion'] = $this->kyuubiReleaseVersion;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->publicEndpointEnabled) {
            $res['publicEndpointEnabled'] = $this->publicEndpointEnabled;
        }

        if (null !== $this->queue) {
            $res['queue'] = $this->queue;
        }

        if (null !== $this->refresh) {
            $res['refresh'] = $this->refresh;
        }

        if (null !== $this->releaseVersion) {
            $res['releaseVersion'] = $this->releaseVersion;
        }

        if (null !== $this->replica) {
            $res['replica'] = $this->replica;
        }

        if (null !== $this->restart) {
            $res['restart'] = $this->restart;
        }

        if (null !== $this->scale) {
            $res['scale'] = $this->scale;
        }

        if (null !== $this->sparkConfigs) {
            $res['sparkConfigs'] = $this->sparkConfigs;
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
        if (isset($map['computeInstance'])) {
            $model->computeInstance = $map['computeInstance'];
        }

        if (isset($map['expectedReplica'])) {
            $model->expectedReplica = $map['expectedReplica'];
        }

        if (isset($map['kyuubiConfigs'])) {
            $model->kyuubiConfigs = $map['kyuubiConfigs'];
        }

        if (isset($map['kyuubiReleaseVersion'])) {
            $model->kyuubiReleaseVersion = $map['kyuubiReleaseVersion'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['publicEndpointEnabled'])) {
            $model->publicEndpointEnabled = $map['publicEndpointEnabled'];
        }

        if (isset($map['queue'])) {
            $model->queue = $map['queue'];
        }

        if (isset($map['refresh'])) {
            $model->refresh = $map['refresh'];
        }

        if (isset($map['releaseVersion'])) {
            $model->releaseVersion = $map['releaseVersion'];
        }

        if (isset($map['replica'])) {
            $model->replica = $map['replica'];
        }

        if (isset($map['restart'])) {
            $model->restart = $map['restart'];
        }

        if (isset($map['scale'])) {
            $model->scale = $map['scale'];
        }

        if (isset($map['sparkConfigs'])) {
            $model->sparkConfigs = $map['sparkConfigs'];
        }

        return $model;
    }
}
