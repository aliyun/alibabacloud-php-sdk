<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class Addon extends Model
{
    /**
     * @var string
     */
    public $config;

    /**
     * @var bool
     */
    public $disabled;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'config' => 'config',
        'disabled' => 'disabled',
        'name' => 'name',
        'version' => 'version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            $res['config'] = $this->config;
        }

        if (null !== $this->disabled) {
            $res['disabled'] = $this->disabled;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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
            $model->config = $map['config'];
        }

        if (isset($map['disabled'])) {
            $model->disabled = $map['disabled'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
