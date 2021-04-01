<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainsResponse\domains;

use AlibabaCloud\Tea\Model;

class proxyTypeList extends Model
{
    /**
     * @var string
     */
    public $proxyType;

    /**
     * @var string[]
     */
    public $proxyPorts;
    protected $_name = [
        'proxyType'  => 'ProxyType',
        'proxyPorts' => 'ProxyPorts',
    ];

    public function validate()
    {
        Model::validateRequired('proxyType', $this->proxyType, true);
        Model::validateRequired('proxyPorts', $this->proxyPorts, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->proxyType) {
            $res['ProxyType'] = $this->proxyType;
        }
        if (null !== $this->proxyPorts) {
            $res['ProxyPorts'] = $this->proxyPorts;
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
        if (isset($map['ProxyType'])) {
            $model->proxyType = $map['ProxyType'];
        }
        if (isset($map['ProxyPorts'])) {
            if (!empty($map['ProxyPorts'])) {
                $model->proxyPorts = $map['ProxyPorts'];
            }
        }

        return $model;
    }
}
