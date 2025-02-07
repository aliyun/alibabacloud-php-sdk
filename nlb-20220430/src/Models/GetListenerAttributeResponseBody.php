<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Nlb\V20220430\Models\GetListenerAttributeResponseBody\proxyProtocolV2Config;
use AlibabaCloud\SDK\Nlb\V20220430\Models\GetListenerAttributeResponseBody\tags;

class GetListenerAttributeResponseBody extends Model
{
    /**
     * @var bool
     */
    public $alpnEnabled;
    /**
     * @var string
     */
    public $alpnPolicy;
    /**
     * @var string[]
     */
    public $caCertificateIds;
    /**
     * @var bool
     */
    public $caEnabled;
    /**
     * @var string[]
     */
    public $certificateIds;
    /**
     * @var int
     */
    public $cps;
    /**
     * @var string
     */
    public $endPort;
    /**
     * @var int
     */
    public $idleTimeout;
    /**
     * @var string
     */
    public $listenerDescription;
    /**
     * @var string
     */
    public $listenerId;
    /**
     * @var int
     */
    public $listenerPort;
    /**
     * @var string
     */
    public $listenerProtocol;
    /**
     * @var string
     */
    public $listenerStatus;
    /**
     * @var string
     */
    public $loadBalancerId;
    /**
     * @var int
     */
    public $mss;
    /**
     * @var bool
     */
    public $proxyProtocolEnabled;
    /**
     * @var proxyProtocolV2Config
     */
    public $proxyProtocolV2Config;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var bool
     */
    public $secSensorEnabled;
    /**
     * @var string
     */
    public $securityPolicyId;
    /**
     * @var string
     */
    public $serverGroupId;
    /**
     * @var string
     */
    public $startPort;
    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'alpnEnabled'           => 'AlpnEnabled',
        'alpnPolicy'            => 'AlpnPolicy',
        'caCertificateIds'      => 'CaCertificateIds',
        'caEnabled'             => 'CaEnabled',
        'certificateIds'        => 'CertificateIds',
        'cps'                   => 'Cps',
        'endPort'               => 'EndPort',
        'idleTimeout'           => 'IdleTimeout',
        'listenerDescription'   => 'ListenerDescription',
        'listenerId'            => 'ListenerId',
        'listenerPort'          => 'ListenerPort',
        'listenerProtocol'      => 'ListenerProtocol',
        'listenerStatus'        => 'ListenerStatus',
        'loadBalancerId'        => 'LoadBalancerId',
        'mss'                   => 'Mss',
        'proxyProtocolEnabled'  => 'ProxyProtocolEnabled',
        'proxyProtocolV2Config' => 'ProxyProtocolV2Config',
        'regionId'              => 'RegionId',
        'requestId'             => 'RequestId',
        'secSensorEnabled'      => 'SecSensorEnabled',
        'securityPolicyId'      => 'SecurityPolicyId',
        'serverGroupId'         => 'ServerGroupId',
        'startPort'             => 'StartPort',
        'tags'                  => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->caCertificateIds)) {
            Model::validateArray($this->caCertificateIds);
        }
        if (\is_array($this->certificateIds)) {
            Model::validateArray($this->certificateIds);
        }
        if (null !== $this->proxyProtocolV2Config) {
            $this->proxyProtocolV2Config->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alpnEnabled) {
            $res['AlpnEnabled'] = $this->alpnEnabled;
        }

        if (null !== $this->alpnPolicy) {
            $res['AlpnPolicy'] = $this->alpnPolicy;
        }

        if (null !== $this->caCertificateIds) {
            if (\is_array($this->caCertificateIds)) {
                $res['CaCertificateIds'] = [];
                $n1                      = 0;
                foreach ($this->caCertificateIds as $item1) {
                    $res['CaCertificateIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->caEnabled) {
            $res['CaEnabled'] = $this->caEnabled;
        }

        if (null !== $this->certificateIds) {
            if (\is_array($this->certificateIds)) {
                $res['CertificateIds'] = [];
                $n1                    = 0;
                foreach ($this->certificateIds as $item1) {
                    $res['CertificateIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->cps) {
            $res['Cps'] = $this->cps;
        }

        if (null !== $this->endPort) {
            $res['EndPort'] = $this->endPort;
        }

        if (null !== $this->idleTimeout) {
            $res['IdleTimeout'] = $this->idleTimeout;
        }

        if (null !== $this->listenerDescription) {
            $res['ListenerDescription'] = $this->listenerDescription;
        }

        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }

        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }

        if (null !== $this->listenerProtocol) {
            $res['ListenerProtocol'] = $this->listenerProtocol;
        }

        if (null !== $this->listenerStatus) {
            $res['ListenerStatus'] = $this->listenerStatus;
        }

        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }

        if (null !== $this->mss) {
            $res['Mss'] = $this->mss;
        }

        if (null !== $this->proxyProtocolEnabled) {
            $res['ProxyProtocolEnabled'] = $this->proxyProtocolEnabled;
        }

        if (null !== $this->proxyProtocolV2Config) {
            $res['ProxyProtocolV2Config'] = null !== $this->proxyProtocolV2Config ? $this->proxyProtocolV2Config->toArray($noStream) : $this->proxyProtocolV2Config;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->secSensorEnabled) {
            $res['SecSensorEnabled'] = $this->secSensorEnabled;
        }

        if (null !== $this->securityPolicyId) {
            $res['SecurityPolicyId'] = $this->securityPolicyId;
        }

        if (null !== $this->serverGroupId) {
            $res['ServerGroupId'] = $this->serverGroupId;
        }

        if (null !== $this->startPort) {
            $res['StartPort'] = $this->startPort;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AlpnEnabled'])) {
            $model->alpnEnabled = $map['AlpnEnabled'];
        }

        if (isset($map['AlpnPolicy'])) {
            $model->alpnPolicy = $map['AlpnPolicy'];
        }

        if (isset($map['CaCertificateIds'])) {
            if (!empty($map['CaCertificateIds'])) {
                $model->caCertificateIds = [];
                $n1                      = 0;
                foreach ($map['CaCertificateIds'] as $item1) {
                    $model->caCertificateIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['CaEnabled'])) {
            $model->caEnabled = $map['CaEnabled'];
        }

        if (isset($map['CertificateIds'])) {
            if (!empty($map['CertificateIds'])) {
                $model->certificateIds = [];
                $n1                    = 0;
                foreach ($map['CertificateIds'] as $item1) {
                    $model->certificateIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Cps'])) {
            $model->cps = $map['Cps'];
        }

        if (isset($map['EndPort'])) {
            $model->endPort = $map['EndPort'];
        }

        if (isset($map['IdleTimeout'])) {
            $model->idleTimeout = $map['IdleTimeout'];
        }

        if (isset($map['ListenerDescription'])) {
            $model->listenerDescription = $map['ListenerDescription'];
        }

        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }

        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }

        if (isset($map['ListenerProtocol'])) {
            $model->listenerProtocol = $map['ListenerProtocol'];
        }

        if (isset($map['ListenerStatus'])) {
            $model->listenerStatus = $map['ListenerStatus'];
        }

        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }

        if (isset($map['Mss'])) {
            $model->mss = $map['Mss'];
        }

        if (isset($map['ProxyProtocolEnabled'])) {
            $model->proxyProtocolEnabled = $map['ProxyProtocolEnabled'];
        }

        if (isset($map['ProxyProtocolV2Config'])) {
            $model->proxyProtocolV2Config = proxyProtocolV2Config::fromMap($map['ProxyProtocolV2Config']);
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SecSensorEnabled'])) {
            $model->secSensorEnabled = $map['SecSensorEnabled'];
        }

        if (isset($map['SecurityPolicyId'])) {
            $model->securityPolicyId = $map['SecurityPolicyId'];
        }

        if (isset($map['ServerGroupId'])) {
            $model->serverGroupId = $map['ServerGroupId'];
        }

        if (isset($map['StartPort'])) {
            $model->startPort = $map['StartPort'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
