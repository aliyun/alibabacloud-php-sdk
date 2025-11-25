<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;

class CreateKyuubiServiceRequest extends Model
{
    /**
     * @var string
     */
    public $computeInstance;

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
     * @var string
     */
    public $releaseVersion;

    /**
     * @var int
     */
    public $replica;

    /**
     * @var string
     */
    public $sparkConfigs;
    protected $_name = [
        'computeInstance' => 'computeInstance',
        'kyuubiConfigs' => 'kyuubiConfigs',
        'kyuubiReleaseVersion' => 'kyuubiReleaseVersion',
        'name' => 'name',
        'publicEndpointEnabled' => 'publicEndpointEnabled',
        'queue' => 'queue',
        'releaseVersion' => 'releaseVersion',
        'replica' => 'replica',
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

        if (null !== $this->releaseVersion) {
            $res['releaseVersion'] = $this->releaseVersion;
        }

        if (null !== $this->replica) {
            $res['replica'] = $this->replica;
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

        if (isset($map['releaseVersion'])) {
            $model->releaseVersion = $map['releaseVersion'];
        }

        if (isset($map['replica'])) {
            $model->replica = $map['replica'];
        }

        if (isset($map['sparkConfigs'])) {
            $model->sparkConfigs = $map['sparkConfigs'];
        }

        return $model;
    }
}
