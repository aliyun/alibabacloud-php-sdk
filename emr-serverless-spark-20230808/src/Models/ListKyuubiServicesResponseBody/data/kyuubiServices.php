<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListKyuubiServicesResponseBody\data;

use AlibabaCloud\Dara\Model;

class kyuubiServices extends Model
{
    /**
     * @var string
     */
    public $computeInstance;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $innerEndpoint;

    /**
     * @var string
     */
    public $kyuubiConfigs;

    /**
     * @var string
     */
    public $kyuubiServiceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $publicEndpoint;

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

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'computeInstance' => 'computeInstance',
        'createTime' => 'createTime',
        'creator' => 'creator',
        'innerEndpoint' => 'innerEndpoint',
        'kyuubiConfigs' => 'kyuubiConfigs',
        'kyuubiServiceId' => 'kyuubiServiceId',
        'name' => 'name',
        'publicEndpoint' => 'publicEndpoint',
        'queue' => 'queue',
        'releaseVersion' => 'releaseVersion',
        'replica' => 'replica',
        'sparkConfigs' => 'sparkConfigs',
        'startTime' => 'startTime',
        'state' => 'state',
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

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }

        if (null !== $this->innerEndpoint) {
            $res['innerEndpoint'] = $this->innerEndpoint;
        }

        if (null !== $this->kyuubiConfigs) {
            $res['kyuubiConfigs'] = $this->kyuubiConfigs;
        }

        if (null !== $this->kyuubiServiceId) {
            $res['kyuubiServiceId'] = $this->kyuubiServiceId;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->publicEndpoint) {
            $res['publicEndpoint'] = $this->publicEndpoint;
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

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->state) {
            $res['state'] = $this->state;
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

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }

        if (isset($map['innerEndpoint'])) {
            $model->innerEndpoint = $map['innerEndpoint'];
        }

        if (isset($map['kyuubiConfigs'])) {
            $model->kyuubiConfigs = $map['kyuubiConfigs'];
        }

        if (isset($map['kyuubiServiceId'])) {
            $model->kyuubiServiceId = $map['kyuubiServiceId'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['publicEndpoint'])) {
            $model->publicEndpoint = $map['publicEndpoint'];
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

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        return $model;
    }
}
