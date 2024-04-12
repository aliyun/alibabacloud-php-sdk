<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetNetworkDomainResponseBody\networkDomain;

use AlibabaCloud\Tea\Model;

class proxies extends Model
{
    /**
     * @example 47.102.**.**
     *
     * @var string
     */
    public $address;

    /**
     * @example true
     *
     * @var bool
     */
    public $hasPassword;

    /**
     * @example Master
     *
     * @var string
     */
    public $nodeType;

    /**
     * @example 22
     *
     * @var int
     */
    public $port;

    /**
     * @example Unavailable
     *
     * @var string
     */
    public $proxyState;

    /**
     * @example CHECK_PWD_TIMEOUT
     *
     * @var string
     */
    public $proxyStateErrorCode;

    /**
     * @example HTTPProxy
     *
     * @var string
     */
    public $proxyType;

    /**
     * @example root
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'address'             => 'Address',
        'hasPassword'         => 'HasPassword',
        'nodeType'            => 'NodeType',
        'port'                => 'Port',
        'proxyState'          => 'ProxyState',
        'proxyStateErrorCode' => 'ProxyStateErrorCode',
        'proxyType'           => 'ProxyType',
        'user'                => 'User',
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
