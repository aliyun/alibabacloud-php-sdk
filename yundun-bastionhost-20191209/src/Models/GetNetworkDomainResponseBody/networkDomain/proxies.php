<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetNetworkDomainResponseBody\networkDomain;

use AlibabaCloud\Dara\Model;

class proxies extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var bool
     */
    public $hasPassword;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $proxyState;

    /**
     * @var string
     */
    public $proxyStateErrorCode;

    /**
     * @var string
     */
    public $proxyType;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
