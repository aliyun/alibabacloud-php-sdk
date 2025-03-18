<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreateNetworkDomainRequest;

use AlibabaCloud\Tea\Model;

class proxies extends Model
{
    /**
     * @description The IP address of the proxy server.
     *
     * @example ``47.104.**.**``
     *
     * @var string
     */
    public $address;

    /**
     * @description The node type of the proxy server. Valid values:
     *
     * - **Master**: primary proxy server.
     * - **Slave**: secondary proxy server.
     *
     * @example Master
     *
     * @var string
     */
    public $nodeType;

    /**
     * @description The Base64-encoded password of the proxy server.
     *
     * @example ***
     *
     * @var string
     */
    public $password;

    /**
     * @description The port of the proxy server.
     *
     * @example 22
     *
     * @var int
     */
    public $port;

    /**
     * @description The proxy type. Valid values:
     *
     * - **SSHProxy**
     * - **HTTPProxy**
     * - **Socks5Proxy**
     *
     * @example SSHProxy
     *
     * @var string
     */
    public $proxyType;

    /**
     * @description The username of the proxy server.
     *
     * @example root
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'address' => 'Address',
        'nodeType' => 'NodeType',
        'password' => 'Password',
        'port' => 'Port',
        'proxyType' => 'ProxyType',
        'user' => 'User',
    ];

    public function validate() {}

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
