<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\ListPolicyGroupsResponseBody\policyGroupModel;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ListPolicyGroupsResponseBody\policyGroupModel\netRedirectPolicy\rules;

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
        if (\is_array($this->rules)) {
            Model::validateArray($this->rules);
        }
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

        if (null !== $this->rules) {
            if (\is_array($this->rules)) {
                $res['Rules'] = [];
                $n1           = 0;
                foreach ($this->rules as $item1) {
                    $res['Rules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        if (isset($map['Rules'])) {
            if (!empty($map['Rules'])) {
                $model->rules = [];
                $n1           = 0;
                foreach ($map['Rules'] as $item1) {
                    $model->rules[$n1++] = rules::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
