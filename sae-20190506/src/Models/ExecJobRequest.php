<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class ExecJobRequest extends Model
{
    /**
     * @example ee1a7a07-abcb-4652-a1d3-2d57f415****
     *
     * @var string
     */
    public $appId;

    /**
     * @example echo
     *
     * @var string
     */
    public $command;

    /**
     * @example ["a","b"]
     *
     * @var string
     */
    public $commandArgs;

    /**
     * @example [{"name":"envtmp","value":"0"}]
     *
     * @var string
     */
    public $envs;

    /**
     * @example custom
     *
     * @var string
     */
    public $eventId;

    /**
     * @example custom-args
     *
     * @var string
     */
    public $jarStartArgs;

    /**
     * @example -Xms4G -Xmx4G
     *
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
     * @example CATALINA_OPTS=\"$CATALINA_OPTS $Options\" catalina.sh run
     *
     * @var string
     */
    public $warStartOptions;
    protected $_name = [
        'appId'           => 'AppId',
        'command'         => 'Command',
        'commandArgs'     => 'CommandArgs',
        'envs'            => 'Envs',
        'eventId'         => 'EventId',
        'jarStartArgs'    => 'JarStartArgs',
        'jarStartOptions' => 'JarStartOptions',
        'replicas'        => 'Replicas',
        'time'            => 'Time',
        'warStartOptions' => 'WarStartOptions',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ExecJobRequest
     */
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
