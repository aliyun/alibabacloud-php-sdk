<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class ExecJobRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $command;

    /**
     * @var string
     */
    public $commandArgs;

    /**
     * @var string
     */
    public $envs;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $jarStartArgs;

    /**
     * @var string
     */
    public $jarStartOptions;

    /**
     * @var string
     */
    public $replicas;

    /**
     * @var string
     */
    public $time;

    /**
     * @var string
     */
    public $warStartOptions;
    protected $_name = [
        'appId' => 'AppId',
        'command' => 'Command',
        'commandArgs' => 'CommandArgs',
        'envs' => 'Envs',
        'eventId' => 'EventId',
        'jarStartArgs' => 'JarStartArgs',
        'jarStartOptions' => 'JarStartOptions',
        'replicas' => 'Replicas',
        'time' => 'Time',
        'warStartOptions' => 'WarStartOptions',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }

        if (null !== $this->commandArgs) {
            $res['CommandArgs'] = $this->commandArgs;
        }

        if (null !== $this->envs) {
            $res['Envs'] = $this->envs;
        }

        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }

        if (null !== $this->jarStartArgs) {
            $res['JarStartArgs'] = $this->jarStartArgs;
        }

        if (null !== $this->jarStartOptions) {
            $res['JarStartOptions'] = $this->jarStartOptions;
        }

        if (null !== $this->replicas) {
            $res['Replicas'] = $this->replicas;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        if (null !== $this->warStartOptions) {
            $res['WarStartOptions'] = $this->warStartOptions;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }

        if (isset($map['CommandArgs'])) {
            $model->commandArgs = $map['CommandArgs'];
        }

        if (isset($map['Envs'])) {
            $model->envs = $map['Envs'];
        }

        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }

        if (isset($map['JarStartArgs'])) {
            $model->jarStartArgs = $map['JarStartArgs'];
        }

        if (isset($map['JarStartOptions'])) {
            $model->jarStartOptions = $map['JarStartOptions'];
        }

        if (isset($map['Replicas'])) {
            $model->replicas = $map['Replicas'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        if (isset($map['WarStartOptions'])) {
            $model->warStartOptions = $map['WarStartOptions'];
        }

        return $model;
    }
}
