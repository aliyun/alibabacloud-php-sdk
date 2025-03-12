<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ListLayer7CustomPortsResponseBody;

use AlibabaCloud\Tea\Model;

class layer7CustomPorts extends Model
{
    /**
     * @var string
     */
    public $flag;

    /**
     * @var string[]
     */
    public $proxyPorts;

    /**
     * @example https
     *
     * @var string
     */
    public $proxyType;
    protected $_name = [
        'flag'       => 'Flag',
        'proxyPorts' => 'ProxyPorts',
        'proxyType'  => 'ProxyType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flag) {
            $res['Flag'] = $this->flag;
        }
        if (null !== $this->proxyPorts) {
            $res['ProxyPorts'] = $this->proxyPorts;
        }
        if (null !== $this->proxyType) {
            $res['ProxyType'] = $this->proxyType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return layer7CustomPorts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Flag'])) {
            $model->flag = $map['Flag'];
        }
        if (isset($map['ProxyPorts'])) {
            if (!empty($map['ProxyPorts'])) {
                $model->proxyPorts = $map['ProxyPorts'];
            }
        }
        if (isset($map['ProxyType'])) {
            $model->proxyType = $map['ProxyType'];
        }

        return $model;
    }
}
