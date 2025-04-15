<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class InstanceExecAuthorizationInputOptions extends Model
{
    /**
     * @var string[]
     */
    public $command;

    /**
     * @var bool
     */
    public $stderr;

    /**
     * @var bool
     */
    public $stdin;

    /**
     * @var bool
     */
    public $stdout;

    /**
     * @var bool
     */
    public $tty;
    protected $_name = [
        'command' => 'command',
        'stderr' => 'stderr',
        'stdin' => 'stdin',
        'stdout' => 'stdout',
        'tty' => 'tty',
    ];

    public function validate()
    {
        if (\is_array($this->command)) {
            Model::validateArray($this->command);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->command) {
            if (\is_array($this->command)) {
                $res['command'] = [];
                $n1 = 0;
                foreach ($this->command as $item1) {
                    $res['command'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->stderr) {
            $res['stderr'] = $this->stderr;
        }

        if (null !== $this->stdin) {
            $res['stdin'] = $this->stdin;
        }

        if (null !== $this->stdout) {
            $res['stdout'] = $this->stdout;
        }

        if (null !== $this->tty) {
            $res['tty'] = $this->tty;
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
        if (isset($map['command'])) {
            if (!empty($map['command'])) {
                $model->command = [];
                $n1 = 0;
                foreach ($map['command'] as $item1) {
                    $model->command[$n1++] = $item1;
                }
            }
        }

        if (isset($map['stderr'])) {
            $model->stderr = $map['stderr'];
        }

        if (isset($map['stdin'])) {
            $model->stdin = $map['stdin'];
        }

        if (isset($map['stdout'])) {
            $model->stdout = $map['stdout'];
        }

        if (isset($map['tty'])) {
            $model->tty = $map['tty'];
        }

        return $model;
    }
}
