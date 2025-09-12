<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeInstanceRefreshesResponseBody\instanceRefreshTasks\desiredConfiguration;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeInstanceRefreshesResponseBody\instanceRefreshTasks\desiredConfiguration\containers\environmentVars;

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
     * @var environmentVars[]
     */
    public $environmentVars;

    /**
     * @var string
     */
    public $image;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'args' => 'Args',
        'commands' => 'Commands',
        'environmentVars' => 'EnvironmentVars',
        'image' => 'Image',
        'name' => 'Name',
    ];

    public function validate()
    {
        if (\is_array($this->args)) {
            Model::validateArray($this->args);
        }
        if (\is_array($this->commands)) {
            Model::validateArray($this->commands);
        }
        if (\is_array($this->environmentVars)) {
            Model::validateArray($this->environmentVars);
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
                    $res['Args'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->commands) {
            if (\is_array($this->commands)) {
                $res['Commands'] = [];
                $n1 = 0;
                foreach ($this->commands as $item1) {
                    $res['Commands'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->environmentVars) {
            if (\is_array($this->environmentVars)) {
                $res['EnvironmentVars'] = [];
                $n1 = 0;
                foreach ($this->environmentVars as $item1) {
                    $res['EnvironmentVars'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
                    $model->args[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Commands'])) {
            if (!empty($map['Commands'])) {
                $model->commands = [];
                $n1 = 0;
                foreach ($map['Commands'] as $item1) {
                    $model->commands[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EnvironmentVars'])) {
            if (!empty($map['EnvironmentVars'])) {
                $model->environmentVars = [];
                $n1 = 0;
                foreach ($map['EnvironmentVars'] as $item1) {
                    $model->environmentVars[$n1] = environmentVars::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
