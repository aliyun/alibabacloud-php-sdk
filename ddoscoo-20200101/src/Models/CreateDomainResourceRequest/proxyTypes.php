<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\CreateDomainResourceRequest;

use AlibabaCloud\Dara\Model;

class proxyTypes extends Model
{
    /**
     * @var int[]
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
        if (\is_array($this->proxyPorts)) {
            Model::validateArray($this->proxyPorts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->proxyPorts) {
            if (\is_array($this->proxyPorts)) {
                $res['ProxyPorts'] = [];
                $n1                = 0;
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
        if (isset($map['ProxyPorts'])) {
            if (!empty($map['ProxyPorts'])) {
                $model->proxyPorts = [];
                $n1                = 0;
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
