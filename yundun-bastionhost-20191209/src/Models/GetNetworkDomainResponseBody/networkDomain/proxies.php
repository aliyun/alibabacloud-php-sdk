<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetNetworkDomainResponseBody\networkDomain;

use AlibabaCloud\Tea\Model;

class proxies extends Model
{
    /**
     * @description The IP address of the proxy server.
     *
     * @example ``47.102.**.**``
     *
     * @var string
     */
    public $address;

    /**
     * @description Indicates whether the proxy server has a password. Valid values:
     *
     * - **true**
     * - **false**
     *
     * @example true
     *
     * @var bool
     */
    public $hasPassword;

    /**
     * @description The node type of the proxy server. Valid values:
     * - **Master**: primary proxy server.
     * - **Slave**: secondary proxy server.
     *
     * @example Master
     *
     * @var string
     */
    public $nodeType;

    /**
     * @description The port of the proxy server.
     *
     * @example 22
     *
     * @var int
     */
    public $port;

    /**
     * @description The status of the proxy server.
     *
     * - **Available**
     * - **Unavailable**
     *
     * @example Unavailable
     *
     * @var string
     */
    public $proxyState;

    /**
     * @description The error code that indicates the status of the proxy server.
     *
     * - **CHECK_PWD_FAILED**: The password is invalid.
     * - **CHECK_PWD_TIMEOUT**: The password verification session timed out.
     * - **CHECK_PWD_NETWORK_ERR**: A network error occurred.
     * - **UNEXPECTED**: An unknown error occurred.
     *
     * @example CHECK_PWD_TIMEOUT
     *
     * @var string
     */
    public $proxyStateErrorCode;

    /**
     * @description The proxy type. Valid values:
     *
     * - **SSHProxy**
     * - **HTTPProxy**
     * - **Socks5Proxy**
     *
     * @example HTTPProxy
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
        'hasPassword' => 'HasPassword',
        'nodeType' => 'NodeType',
        'port' => 'Port',
        'proxyState' => 'ProxyState',
        'proxyStateErrorCode' => 'ProxyStateErrorCode',
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
        if (null !== $this->hasPassword) {
            $res['HasPassword'] = $this->hasPassword;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->proxyState) {
            $res['ProxyState'] = $this->proxyState;
        }
        if (null !== $this->proxyStateErrorCode) {
            $res['ProxyStateErrorCode'] = $this->proxyStateErrorCode;
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
        if (isset($map['HasPassword'])) {
            $model->hasPassword = $map['HasPassword'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['ProxyState'])) {
            $model->proxyState = $map['ProxyState'];
        }
        if (isset($map['ProxyStateErrorCode'])) {
            $model->proxyStateErrorCode = $map['ProxyStateErrorCode'];
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
