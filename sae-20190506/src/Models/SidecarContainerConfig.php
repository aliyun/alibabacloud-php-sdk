<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class SidecarContainerConfig extends Model
{
    /**
     * @var string
     */
    public $acrInstanceId;

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
    public $configMapMountDesc;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var string
     */
    public $emptyDirDesc;

    /**
     * @var string
     */
    public $envs;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $liveness;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $readiness;

    /**
     * @var string
     */
    public $secretMountDesc;
    protected $_name = [
        'acrInstanceId' => 'AcrInstanceId',
        'command' => 'Command',
        'commandArgs' => 'CommandArgs',
        'configMapMountDesc' => 'ConfigMapMountDesc',
        'cpu' => 'Cpu',
        'emptyDirDesc' => 'EmptyDirDesc',
        'envs' => 'Envs',
        'imageUrl' => 'ImageUrl',
        'liveness' => 'Liveness',
        'memory' => 'Memory',
        'name' => 'Name',
        'readiness' => 'Readiness',
        'secretMountDesc' => 'SecretMountDesc',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acrInstanceId) {
            $res['AcrInstanceId'] = $this->acrInstanceId;
        }

        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }

        if (null !== $this->commandArgs) {
            $res['CommandArgs'] = $this->commandArgs;
        }

        if (null !== $this->configMapMountDesc) {
            $res['ConfigMapMountDesc'] = $this->configMapMountDesc;
        }

        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->emptyDirDesc) {
            $res['EmptyDirDesc'] = $this->emptyDirDesc;
        }

        if (null !== $this->envs) {
            $res['Envs'] = $this->envs;
        }

        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }

        if (null !== $this->liveness) {
            $res['Liveness'] = $this->liveness;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->readiness) {
            $res['Readiness'] = $this->readiness;
        }

        if (null !== $this->secretMountDesc) {
            $res['SecretMountDesc'] = $this->secretMountDesc;
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
        if (isset($map['AcrInstanceId'])) {
            $model->acrInstanceId = $map['AcrInstanceId'];
        }

        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }

        if (isset($map['CommandArgs'])) {
            $model->commandArgs = $map['CommandArgs'];
        }

        if (isset($map['ConfigMapMountDesc'])) {
            $model->configMapMountDesc = $map['ConfigMapMountDesc'];
        }

        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['EmptyDirDesc'])) {
            $model->emptyDirDesc = $map['EmptyDirDesc'];
        }

        if (isset($map['Envs'])) {
            $model->envs = $map['Envs'];
        }

        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }

        if (isset($map['Liveness'])) {
            $model->liveness = $map['Liveness'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Readiness'])) {
            $model->readiness = $map['Readiness'];
        }

        if (isset($map['SecretMountDesc'])) {
            $model->secretMountDesc = $map['SecretMountDesc'];
        }

        return $model;
    }
}
