<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Tea\Model;

class ConfigLayer4RuleRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example [{"InstanceId":"xxxxxx-xxxxxx-xxxxxx-xxxxxxx","Protocol":"tcp","FrontendPort":80,"BackendPort":5,"RealServers":"1.1.1.1","2.2.2.2"}]
     *
     * @var string
     */
    public $listeners;

    /**
     * @var int
     */
    public $proxyEnable;
    protected $_name = [
        'listeners'   => 'Listeners',
        'proxyEnable' => 'ProxyEnable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->listeners) {
            $res['Listeners'] = $this->listeners;
        }
        if (null !== $this->proxyEnable) {
            $res['ProxyEnable'] = $this->proxyEnable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigLayer4RuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Listeners'])) {
            $model->listeners = $map['Listeners'];
        }
        if (isset($map['ProxyEnable'])) {
            $model->proxyEnable = $map['ProxyEnable'];
        }

        return $model;
    }
}
