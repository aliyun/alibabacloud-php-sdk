<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class Addon extends Model
{
    /**
     * @example {\"IngressSlbNetworkType\":\"internet\"}
     *
     * @var string
     */
    public $config;

    /**
     * @example false
     *
     * @var bool
     */
    public $disabled;

    /**
     * @example nginx-ingress-controller
     *
     * @var string
     */
    public $name;

    /**
     * @example v1.9.3-aliyun.1
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'config'   => 'config',
        'disabled' => 'disabled',
        'name'     => 'name',
        'version'  => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return Addon
     */
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
