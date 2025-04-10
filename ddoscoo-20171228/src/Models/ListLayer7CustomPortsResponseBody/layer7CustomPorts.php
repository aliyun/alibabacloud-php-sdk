<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ListLayer7CustomPortsResponseBody;

use AlibabaCloud\Dara\Model;

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
     * @var string
     */
    public $proxyType;
    protected $_name = [
        'flag' => 'Flag',
        'proxyPorts' => 'ProxyPorts',
        'proxyType' => 'ProxyType',
    ];

    public function validate()
    {
        if (\is_array($this->proxyPorts)) {
            Model::validateArray($this->proxyPorts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flag) {
            $res['Flag'] = $this->flag;
        }

        if (null !== $this->proxyPorts) {
            if (\is_array($this->proxyPorts)) {
                $res['ProxyPorts'] = [];
                $n1 = 0;
                foreach ($this->proxyPorts as $item1) {
                    $res['ProxyPorts'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->proxyType) {
            $res['ProxyType'] = $this->proxyType;
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
        if (isset($map['Flag'])) {
            $model->flag = $map['Flag'];
        }

        if (isset($map['ProxyPorts'])) {
            if (!empty($map['ProxyPorts'])) {
                $model->proxyPorts = [];
                $n1 = 0;
                foreach ($map['ProxyPorts'] as $item1) {
                    $model->proxyPorts[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ProxyType'])) {
            $model->proxyType = $map['ProxyType'];
        }

        return $model;
    }
}
