<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class ServicePluginStep extends Model
{
    /**
     * @var mixed[]
     */
    public $args;

    /**
     * @var string
     */
    public $plugin;
    protected $_name = [
        'args' => 'args',
        'plugin' => 'plugin',
    ];

    public function validate()
    {
        if (\is_array($this->args)) {
            Model::validateArray($this->args);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->args) {
            if (\is_array($this->args)) {
                $res['args'] = [];
                foreach ($this->args as $key1 => $value1) {
                    $res['args'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->plugin) {
            $res['plugin'] = $this->plugin;
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
            if (!empty($map['args'])) {
                $model->args = [];
                foreach ($map['args'] as $key1 => $value1) {
                    $model->args[$key1] = $value1;
                }
            }
        }

        if (isset($map['plugin'])) {
            $model->plugin = $map['plugin'];
        }

        return $model;
    }
}
