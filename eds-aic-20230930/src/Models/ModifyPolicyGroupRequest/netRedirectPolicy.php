<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\ModifyPolicyGroupRequest;

use AlibabaCloud\Dara\Model;

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
    protected $_name = [
        'customProxy' => 'CustomProxy',
        'hostAddr' => 'HostAddr',
        'netRedirect' => 'NetRedirect',
        'port' => 'Port',
        'proxyPassword' => 'ProxyPassword',
        'proxyType' => 'ProxyType',
        'proxyUserName' => 'ProxyUserName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        return $model;
    }
}
