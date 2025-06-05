<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\initContainer\environmentVar;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\initContainer\port;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\initContainer\securityContext;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\initContainer\volumeMount;

class initContainer extends Model
{
    /**
     * @var securityContext
     */
    public $securityContext;

    /**
     * @var string[]
     */
    public $arg;

    /**
     * @var string[]
     */
    public $command;

    /**
     * @var float
     */
    public $cpu;

    /**
     * @var environmentVar[]
     */
    public $environmentVar;

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
     * @var float
     */
    public $memory;

    /**
     * @var string
     */
    public $name;

    /**
     * @var port[]
     */
    public $port;

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
     * @var volumeMount[]
     */
    public $volumeMount;

    /**
     * @var string
     */
    public $workingDir;
    protected $_name = [
        'securityContext' => 'SecurityContext',
        'arg' => 'Arg',
        'command' => 'Command',
        'cpu' => 'Cpu',
        'environmentVar' => 'EnvironmentVar',
        'gpu' => 'Gpu',
        'image' => 'Image',
        'imagePullPolicy' => 'ImagePullPolicy',
        'memory' => 'Memory',
        'name' => 'Name',
        'port' => 'Port',
        'stdin' => 'Stdin',
        'stdinOnce' => 'StdinOnce',
        'tty' => 'Tty',
        'volumeMount' => 'VolumeMount',
        'workingDir' => 'WorkingDir',
    ];

    public function validate()
    {
        if (null !== $this->securityContext) {
            $this->securityContext->validate();
        }
        if (\is_array($this->arg)) {
            Model::validateArray($this->arg);
        }
        if (\is_array($this->command)) {
            Model::validateArray($this->command);
        }
        if (\is_array($this->environmentVar)) {
            Model::validateArray($this->environmentVar);
        }
        if (\is_array($this->port)) {
            Model::validateArray($this->port);
        }
        if (\is_array($this->volumeMount)) {
            Model::validateArray($this->volumeMount);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->securityContext) {
            $res['SecurityContext'] = null !== $this->securityContext ? $this->securityContext->toArray($noStream) : $this->securityContext;
        }

        if (null !== $this->arg) {
            if (\is_array($this->arg)) {
                $res['Arg'] = [];
                $n1 = 0;
                foreach ($this->arg as $item1) {
                    $res['Arg'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->command) {
            if (\is_array($this->command)) {
                $res['Command'] = [];
                $n1 = 0;
                foreach ($this->command as $item1) {
                    $res['Command'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->environmentVar) {
            if (\is_array($this->environmentVar)) {
                $res['EnvironmentVar'] = [];
                $n1 = 0;
                foreach ($this->environmentVar as $item1) {
                    $res['EnvironmentVar'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->port) {
            if (\is_array($this->port)) {
                $res['Port'] = [];
                $n1 = 0;
                foreach ($this->port as $item1) {
                    $res['Port'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        if (null !== $this->volumeMount) {
            if (\is_array($this->volumeMount)) {
                $res['VolumeMount'] = [];
                $n1 = 0;
                foreach ($this->volumeMount as $item1) {
                    $res['VolumeMount'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SecurityContext'])) {
            $model->securityContext = securityContext::fromMap($map['SecurityContext']);
        }

        if (isset($map['Arg'])) {
            if (!empty($map['Arg'])) {
                $model->arg = [];
                $n1 = 0;
                foreach ($map['Arg'] as $item1) {
                    $model->arg[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Command'])) {
            if (!empty($map['Command'])) {
                $model->command = [];
                $n1 = 0;
                foreach ($map['Command'] as $item1) {
                    $model->command[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['EnvironmentVar'])) {
            if (!empty($map['EnvironmentVar'])) {
                $model->environmentVar = [];
                $n1 = 0;
                foreach ($map['EnvironmentVar'] as $item1) {
                    $model->environmentVar[$n1++] = environmentVar::fromMap($item1);
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

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Port'])) {
            if (!empty($map['Port'])) {
                $model->port = [];
                $n1 = 0;
                foreach ($map['Port'] as $item1) {
                    $model->port[$n1++] = port::fromMap($item1);
                }
            }
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

        if (isset($map['VolumeMount'])) {
            if (!empty($map['VolumeMount'])) {
                $model->volumeMount = [];
                $n1 = 0;
                foreach ($map['VolumeMount'] as $item1) {
                    $model->volumeMount[$n1++] = volumeMount::fromMap($item1);
                }
            }
        }

        if (isset($map['WorkingDir'])) {
            $model->workingDir = $map['WorkingDir'];
        }

        return $model;
    }
}
