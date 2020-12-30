<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainsResponseBody\domains;

use AlibabaCloud\Tea\Model;

class proxyTypeList extends Model
{
    /**
     * @var string[]
     */
    public $proxyPorts;

    /**
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
     * @return proxyTypeList
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
