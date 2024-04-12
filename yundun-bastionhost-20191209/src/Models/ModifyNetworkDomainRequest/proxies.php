<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyNetworkDomainRequest;

use AlibabaCloud\Tea\Model;

class proxies extends Model
{
    /**
     * @example 114.21**.**
     *
     * @var string
     */
    public $address;

    /**
     * @example Slave
     *
     * @var string
     */
    public $nodeType;

    /**
     * @example ***
     *
     * @var string
     */
    public $password;

    /**
     * @example 22
     *
     * @var int
     */
    public $port;

    /**
     * @example HTTPProxy
     *
     * @var string
     */
    public $proxyType;

    /**
     * @example test
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'address'   => 'Address',
        'nodeType'  => 'NodeType',
        'password'  => 'Password',
        'port'      => 'Port',
        'proxyType' => 'ProxyType',
        'user'      => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->proxyType) {
            $res['ProxyType'] = $this->proxyType;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return proxies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['ProxyType'])) {
            $model->proxyType = $map['ProxyType'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
