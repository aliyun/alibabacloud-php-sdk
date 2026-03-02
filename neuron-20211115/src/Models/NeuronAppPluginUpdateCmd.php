<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class NeuronAppPluginUpdateCmd extends Model
{
    /**
     * @var MobiPluginConfig
     */
    public $config;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'config' => 'config',
        'id' => 'id',
    ];

    public function validate()
    {
        if (null !== $this->config) {
            $this->config->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            $res['config'] = null !== $this->config ? $this->config->toArray($noStream) : $this->config;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
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
        if (isset($map['config'])) {
            $model->config = MobiPluginConfig::fromMap($map['config']);
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        return $model;
    }
}
