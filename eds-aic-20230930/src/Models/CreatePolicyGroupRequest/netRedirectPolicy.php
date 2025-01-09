<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\CreatePolicyGroupRequest;

use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreatePolicyGroupRequest\netRedirectPolicy\rules;
use AlibabaCloud\Tea\Model;

class netRedirectPolicy extends Model
{
    /**
     * @var string
     */
    public $customProxy;

    /**
     * @var string
     */
    public $hostAddr;

    /**
     * @var string
     */
    public $netRedirect;

    /**
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $proxyPassword;

    /**
     * @var string
     */
    public $proxyType;

    /**
     * @var string
     */
    public $proxyUserName;

    /**
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
