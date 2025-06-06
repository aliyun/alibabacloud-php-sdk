<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class MCPServerInstallationConfig extends Model
{
    /**
     * @var string
     */
    public $args;

    /**
     * @var string
     */
    public $command;

    /**
     * @var string[]
     */
    public $env;

    /**
     * @var string
     */
    public $transportType;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'args' => 'args',
        'command' => 'command',
        'env' => 'env',
        'transportType' => 'transportType',
        'url' => 'url',
    ];

    public function validate()
    {
        if (\is_array($this->env)) {
            Model::validateArray($this->env);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->args) {
            $res['args'] = $this->args;
        }

        if (null !== $this->command) {
            $res['command'] = $this->command;
        }

        if (null !== $this->env) {
            if (\is_array($this->env)) {
                $res['env'] = [];
                foreach ($this->env as $key1 => $value1) {
                    $res['env'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->transportType) {
            $res['transportType'] = $this->transportType;
        }

        if (null !== $this->url) {
            $res['url'] = $this->url;
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
        if (isset($map['args'])) {
            $model->args = $map['args'];
        }

        if (isset($map['command'])) {
            $model->command = $map['command'];
        }

        if (isset($map['env'])) {
            if (!empty($map['env'])) {
                $model->env = [];
                foreach ($map['env'] as $key1 => $value1) {
                    $model->env[$key1] = $value1;
                }
            }
        }

        if (isset($map['transportType'])) {
            $model->transportType = $map['transportType'];
        }

        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
