<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\ModifyDomainResourceRequest;

use AlibabaCloud\Tea\Model;

class proxyTypes extends Model
{
    /**
     * @description An array that consists of port numbers.
     *
     * This parameter is required.
     * @var int[]
     */
    public $proxyPorts;

    /**
     * @description The type of the protocol. Valid values:
     *
     *   **http**
     *   **https**
     *   **websocket**
     *   **websockets**
     *
     * @example https
     *
     * @var string
     */
    public $proxyType;
    protected $_name = [
        'proxyPorts' => 'ProxyPorts',
        'proxyType'  => 'ProxyType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return proxyTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
