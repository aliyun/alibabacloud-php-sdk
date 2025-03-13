<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\CreatePolicyGroupRequest;

use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreatePolicyGroupRequest\netRedirectPolicy\rules;
use AlibabaCloud\Tea\Model;

class netRedirectPolicy extends Model
{
    /**
     * @description Specifies whether to manually configure a custom proxy.
     *
     * Valid values:
     *
     *   off
     *   on
     *
     * @example off
     *
     * @var string
     */
    public $customProxy;

    /**
     * @description The IPv4 address of the custom proxy.
     *
     * @example 47.100.XX.XX
     *
     * @var string
     */
    public $hostAddr;

    /**
     * @description Specifies whether to enable the network redirection feature.
     *
     * Valid values:
     *
     *   off
     *   on
     *
     * @example off
     *
     * @var string
     */
    public $netRedirect;

    /**
     * @description The port of the custom proxy. Valid values: 1 to 65535.
     *
     * @example 1145
     *
     * @var string
     */
    public $port;

    /**
     * @description The password of the proxy. The password must be 1 to 256 in length and cannot contain Chinese character or space characters.
     *
     * @example password
     *
     * @var string
     */
    public $proxyPassword;

    /**
     * @description The type of the proxy protocol.
     *
     * Valid values:
     *
     *   socks5.
     *
     * @example socks5
     *
     * @var string
     */
    public $proxyType;

    /**
     * @description The username of the proxy. The name must be 1 to 256 in length and cannot contain Chinese character or space characters.
     *
     * @example username
     *
     * @var string
     */
    public $proxyUserName;

    /**
     * @description The proxy rules. You can create up to 100 proxy rules.
     *
     * @var rules[]
     */
    public $rules;
    protected $_name = [
        'customProxy'   => 'CustomProxy',
        'hostAddr'      => 'HostAddr',
        'netRedirect'   => 'NetRedirect',
        'port'          => 'Port',
        'proxyPassword' => 'ProxyPassword',
        'proxyType'     => 'ProxyType',
        'proxyUserName' => 'ProxyUserName',
        'rules'         => 'Rules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customProxy) {
            $res['CustomProxy'] = $this->customProxy;
        }
        if (null !== $this->hostAddr) {
            $res['HostAddr'] = $this->hostAddr;
        }
        if (null !== $this->netRedirect) {
            $res['NetRedirect'] = $this->netRedirect;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->proxyPassword) {
            $res['ProxyPassword'] = $this->proxyPassword;
        }
        if (null !== $this->proxyType) {
            $res['ProxyType'] = $this->proxyType;
        }
        if (null !== $this->proxyUserName) {
            $res['ProxyUserName'] = $this->proxyUserName;
        }
        if (null !== $this->rules) {
            $res['Rules'] = [];
            if (null !== $this->rules && \is_array($this->rules)) {
                $n = 0;
                foreach ($this->rules as $item) {
                    $res['Rules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return netRedirectPolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomProxy'])) {
            $model->customProxy = $map['CustomProxy'];
        }
        if (isset($map['HostAddr'])) {
            $model->hostAddr = $map['HostAddr'];
        }
        if (isset($map['NetRedirect'])) {
            $model->netRedirect = $map['NetRedirect'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['ProxyPassword'])) {
            $model->proxyPassword = $map['ProxyPassword'];
        }
        if (isset($map['ProxyType'])) {
            $model->proxyType = $map['ProxyType'];
        }
        if (isset($map['ProxyUserName'])) {
            $model->proxyUserName = $map['ProxyUserName'];
        }
        if (isset($map['Rules'])) {
            if (!empty($map['Rules'])) {
                $model->rules = [];
                $n            = 0;
                foreach ($map['Rules'] as $item) {
                    $model->rules[$n++] = null !== $item ? rules::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
