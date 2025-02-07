<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Nlb\V20220430\Models\CreateListenerShrinkRequest\tag;

class CreateListenerShrinkRequest extends Model
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
     * @var string
     */
    public $clientToken;
    /**
     * @var int
     */
    public $cps;
    /**
     * @var bool
     */
    public $dryRun;
    /**
     * @var int
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
     * @var string
     */
    public $proxyProtocolV2ConfigShrink;
    /**
     * @var string
     */
    public $regionId;
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
     * @var int
     */
    public $startPort;
    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'alpnEnabled'                 => 'AlpnEnabled',
        'alpnPolicy'                  => 'AlpnPolicy',
        'caCertificateIds'            => 'CaCertificateIds',
        'caEnabled'                   => 'CaEnabled',
        'certificateIds'              => 'CertificateIds',
        'clientToken'                 => 'ClientToken',
        'cps'                         => 'Cps',
        'dryRun'                      => 'DryRun',
        'endPort'                     => 'EndPort',
        'idleTimeout'                 => 'IdleTimeout',
        'listenerDescription'         => 'ListenerDescription',
        'listenerPort'                => 'ListenerPort',
        'listenerProtocol'            => 'ListenerProtocol',
        'loadBalancerId'              => 'LoadBalancerId',
        'mss'                         => 'Mss',
        'proxyProtocolEnabled'        => 'ProxyProtocolEnabled',
        'proxyProtocolV2ConfigShrink' => 'ProxyProtocolV2Config',
        'regionId'                    => 'RegionId',
        'secSensorEnabled'            => 'SecSensorEnabled',
        'securityPolicyId'            => 'SecurityPolicyId',
        'serverGroupId'               => 'ServerGroupId',
        'startPort'                   => 'StartPort',
        'tag'                         => 'Tag',
    ];

    public function validate()
    {
        if (\is_array($this->caCertificateIds)) {
            Model::validateArray($this->caCertificateIds);
        }
        if (\is_array($this->certificateIds)) {
            Model::validateArray($this->certificateIds);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
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

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->cps) {
            $res['Cps'] = $this->cps;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
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

        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }

        if (null !== $this->listenerProtocol) {
            $res['ListenerProtocol'] = $this->listenerProtocol;
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

        if (null !== $this->proxyProtocolV2ConfigShrink) {
            $res['ProxyProtocolV2Config'] = $this->proxyProtocolV2ConfigShrink;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1         = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Cps'])) {
            $model->cps = $map['Cps'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
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

        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }

        if (isset($map['ListenerProtocol'])) {
            $model->listenerProtocol = $map['ListenerProtocol'];
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
            $model->proxyProtocolV2ConfigShrink = $map['ProxyProtocolV2Config'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1         = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
