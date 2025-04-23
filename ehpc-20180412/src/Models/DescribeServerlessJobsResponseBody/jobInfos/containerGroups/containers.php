<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos\containerGroups;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos\containerGroups\containers\currentState;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos\containerGroups\containers\environmentVars;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos\containerGroups\containers\livenessProbe;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos\containerGroups\containers\ports;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos\containerGroups\containers\previousState;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos\containerGroups\containers\readinessProbe;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos\containerGroups\containers\securityContext;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos\containerGroups\containers\volumeMounts;

class containers extends Model
{
    /**
     * @var string[]
     */
    public $args;

    /**
     * @var string[]
     */
    public $commands;

    /**
     * @var float
     */
    public $cpu;

    /**
     * @var currentState
     */
    public $currentState;

    /**
     * @var environmentVars[]
     */
    public $environmentVars;

    /**
     * @var int
     */
    public $gpu;

    /**
     * @var string
     */
    public $image;

    /**
     * @var string
     */
    public $imagePullPolicy;

    /**
     * @var livenessProbe
     */
    public $livenessProbe;

    /**
     * @var float
     */
    public $memory;

    /**
     * @var string
     */
    public $name;

    /**
     * @var ports[]
     */
    public $ports;

    /**
     * @var previousState
     */
    public $previousState;

    /**
     * @var readinessProbe
     */
    public $readinessProbe;

    /**
     * @var bool
     */
    public $ready;

    /**
     * @var int
     */
    public $restartCount;

    /**
     * @var securityContext
     */
    public $securityContext;

    /**
     * @var bool
     */
    public $stdin;

    /**
     * @var bool
     */
    public $stdinOnce;

    /**
     * @var bool
     */
    public $tty;

    /**
     * @var volumeMounts[]
     */
    public $volumeMounts;

    /**
     * @var string
     */
    public $workingDir;
    protected $_name = [
        'args' => 'Args',
        'commands' => 'Commands',
        'cpu' => 'Cpu',
        'currentState' => 'CurrentState',
        'environmentVars' => 'EnvironmentVars',
        'gpu' => 'Gpu',
        'image' => 'Image',
        'imagePullPolicy' => 'ImagePullPolicy',
        'livenessProbe' => 'LivenessProbe',
        'memory' => 'Memory',
        'name' => 'Name',
        'ports' => 'Ports',
        'previousState' => 'PreviousState',
        'readinessProbe' => 'ReadinessProbe',
        'ready' => 'Ready',
        'restartCount' => 'RestartCount',
        'securityContext' => 'SecurityContext',
        'stdin' => 'Stdin',
        'stdinOnce' => 'StdinOnce',
        'tty' => 'Tty',
        'volumeMounts' => 'VolumeMounts',
        'workingDir' => 'WorkingDir',
    ];

    public function validate()
    {
        if (\is_array($this->args)) {
            Model::validateArray($this->args);
        }
        if (\is_array($this->commands)) {
            Model::validateArray($this->commands);
        }
        if (null !== $this->currentState) {
            $this->currentState->validate();
        }
        if (\is_array($this->environmentVars)) {
            Model::validateArray($this->environmentVars);
        }
        if (null !== $this->livenessProbe) {
            $this->livenessProbe->validate();
        }
        if (\is_array($this->ports)) {
            Model::validateArray($this->ports);
        }
        if (null !== $this->previousState) {
            $this->previousState->validate();
        }
        if (null !== $this->readinessProbe) {
            $this->readinessProbe->validate();
        }
        if (null !== $this->securityContext) {
            $this->securityContext->validate();
        }
        if (\is_array($this->volumeMounts)) {
            Model::validateArray($this->volumeMounts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->args) {
            if (\is_array($this->args)) {
                $res['Args'] = [];
                $n1 = 0;
                foreach ($this->args as $item1) {
                    $res['Args'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->commands) {
            if (\is_array($this->commands)) {
                $res['Commands'] = [];
                $n1 = 0;
                foreach ($this->commands as $item1) {
                    $res['Commands'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->currentState) {
            $res['CurrentState'] = null !== $this->currentState ? $this->currentState->toArray($noStream) : $this->currentState;
        }

        if (null !== $this->environmentVars) {
            if (\is_array($this->environmentVars)) {
                $res['EnvironmentVars'] = [];
                $n1 = 0;
                foreach ($this->environmentVars as $item1) {
                    $res['EnvironmentVars'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->gpu) {
            $res['Gpu'] = $this->gpu;
        }

        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }

        if (null !== $this->imagePullPolicy) {
            $res['ImagePullPolicy'] = $this->imagePullPolicy;
        }

        if (null !== $this->livenessProbe) {
            $res['LivenessProbe'] = null !== $this->livenessProbe ? $this->livenessProbe->toArray($noStream) : $this->livenessProbe;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->ports) {
            if (\is_array($this->ports)) {
                $res['Ports'] = [];
                $n1 = 0;
                foreach ($this->ports as $item1) {
                    $res['Ports'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->previousState) {
            $res['PreviousState'] = null !== $this->previousState ? $this->previousState->toArray($noStream) : $this->previousState;
        }

        if (null !== $this->readinessProbe) {
            $res['ReadinessProbe'] = null !== $this->readinessProbe ? $this->readinessProbe->toArray($noStream) : $this->readinessProbe;
        }

        if (null !== $this->ready) {
            $res['Ready'] = $this->ready;
        }

        if (null !== $this->restartCount) {
            $res['RestartCount'] = $this->restartCount;
        }

        if (null !== $this->securityContext) {
            $res['SecurityContext'] = null !== $this->securityContext ? $this->securityContext->toArray($noStream) : $this->securityContext;
        }

        if (null !== $this->stdin) {
            $res['Stdin'] = $this->stdin;
        }

        if (null !== $this->stdinOnce) {
            $res['StdinOnce'] = $this->stdinOnce;
        }

        if (null !== $this->tty) {
            $res['Tty'] = $this->tty;
        }

        if (null !== $this->volumeMounts) {
            if (\is_array($this->volumeMounts)) {
                $res['VolumeMounts'] = [];
                $n1 = 0;
                foreach ($this->volumeMounts as $item1) {
                    $res['VolumeMounts'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->workingDir) {
            $res['WorkingDir'] = $this->workingDir;
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
        if (isset($map['Args'])) {
            if (!empty($map['Args'])) {
                $model->args = [];
                $n1 = 0;
                foreach ($map['Args'] as $item1) {
                    $model->args[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Commands'])) {
            if (!empty($map['Commands'])) {
                $model->commands = [];
                $n1 = 0;
                foreach ($map['Commands'] as $item1) {
                    $model->commands[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['CurrentState'])) {
            $model->currentState = currentState::fromMap($map['CurrentState']);
        }

        if (isset($map['EnvironmentVars'])) {
            if (!empty($map['EnvironmentVars'])) {
                $model->environmentVars = [];
                $n1 = 0;
                foreach ($map['EnvironmentVars'] as $item1) {
                    $model->environmentVars[$n1++] = environmentVars::fromMap($item1);
                }
            }
        }

        if (isset($map['Gpu'])) {
            $model->gpu = $map['Gpu'];
        }

        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }

        if (isset($map['ImagePullPolicy'])) {
            $model->imagePullPolicy = $map['ImagePullPolicy'];
        }

        if (isset($map['LivenessProbe'])) {
            $model->livenessProbe = livenessProbe::fromMap($map['LivenessProbe']);
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Ports'])) {
            if (!empty($map['Ports'])) {
                $model->ports = [];
                $n1 = 0;
                foreach ($map['Ports'] as $item1) {
                    $model->ports[$n1++] = ports::fromMap($item1);
                }
            }
        }

        if (isset($map['PreviousState'])) {
            $model->previousState = previousState::fromMap($map['PreviousState']);
        }

        if (isset($map['ReadinessProbe'])) {
            $model->readinessProbe = readinessProbe::fromMap($map['ReadinessProbe']);
        }

        if (isset($map['Ready'])) {
            $model->ready = $map['Ready'];
        }

        if (isset($map['RestartCount'])) {
            $model->restartCount = $map['RestartCount'];
        }

        if (isset($map['SecurityContext'])) {
            $model->securityContext = securityContext::fromMap($map['SecurityContext']);
        }

        if (isset($map['Stdin'])) {
            $model->stdin = $map['Stdin'];
        }

        if (isset($map['StdinOnce'])) {
            $model->stdinOnce = $map['StdinOnce'];
        }

        if (isset($map['Tty'])) {
            $model->tty = $map['Tty'];
        }

        if (isset($map['VolumeMounts'])) {
            if (!empty($map['VolumeMounts'])) {
                $model->volumeMounts = [];
                $n1 = 0;
                foreach ($map['VolumeMounts'] as $item1) {
                    $model->volumeMounts[$n1++] = volumeMounts::fromMap($item1);
                }
            }
        }

        if (isset($map['WorkingDir'])) {
            $model->workingDir = $map['WorkingDir'];
        }

        return $model;
    }
}
