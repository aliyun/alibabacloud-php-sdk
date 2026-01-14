<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateListenerRequest\backendPorts;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateListenerRequest\certificates;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateListenerRequest\portRanges;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateListenerRequest\XForwardedForConfig;

class UpdateListenerRequest extends Model
{
    /**
     * @var backendPorts[]
     */
    public $backendPorts;

    /**
     * @var certificates[]
     */
    public $certificates;

    /**
     * @var string
     */
    public $clientAffinity;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $httpVersion;

    /**
     * @var int
     */
    public $idleTimeout;

    /**
     * @var string
     */
    public $listenerId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var portRanges[]
     */
    public $portRanges;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $proxyProtocol;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $requestTimeout;

    /**
     * @var string
     */
    public $securityPolicyId;

    /**
     * @var XForwardedForConfig
     */
    public $XForwardedForConfig;
    protected $_name = [
        'backendPorts' => 'BackendPorts',
        'certificates' => 'Certificates',
        'clientAffinity' => 'ClientAffinity',
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'httpVersion' => 'HttpVersion',
        'idleTimeout' => 'IdleTimeout',
        'listenerId' => 'ListenerId',
        'name' => 'Name',
        'portRanges' => 'PortRanges',
        'protocol' => 'Protocol',
        'proxyProtocol' => 'ProxyProtocol',
        'regionId' => 'RegionId',
        'requestTimeout' => 'RequestTimeout',
        'securityPolicyId' => 'SecurityPolicyId',
        'XForwardedForConfig' => 'XForwardedForConfig',
    ];

    public function validate()
    {
        if (\is_array($this->backendPorts)) {
            Model::validateArray($this->backendPorts);
        }
        if (\is_array($this->certificates)) {
            Model::validateArray($this->certificates);
        }
        if (\is_array($this->portRanges)) {
            Model::validateArray($this->portRanges);
        }
        if (null !== $this->XForwardedForConfig) {
            $this->XForwardedForConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backendPorts) {
            if (\is_array($this->backendPorts)) {
                $res['BackendPorts'] = [];
                $n1 = 0;
                foreach ($this->backendPorts as $item1) {
                    $res['BackendPorts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->certificates) {
            if (\is_array($this->certificates)) {
                $res['Certificates'] = [];
                $n1 = 0;
                foreach ($this->certificates as $item1) {
                    $res['Certificates'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clientAffinity) {
            $res['ClientAffinity'] = $this->clientAffinity;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->httpVersion) {
            $res['HttpVersion'] = $this->httpVersion;
        }

        if (null !== $this->idleTimeout) {
            $res['IdleTimeout'] = $this->idleTimeout;
        }

        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->portRanges) {
            if (\is_array($this->portRanges)) {
                $res['PortRanges'] = [];
                $n1 = 0;
                foreach ($this->portRanges as $item1) {
                    $res['PortRanges'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->proxyProtocol) {
            $res['ProxyProtocol'] = $this->proxyProtocol;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->requestTimeout) {
            $res['RequestTimeout'] = $this->requestTimeout;
        }

        if (null !== $this->securityPolicyId) {
            $res['SecurityPolicyId'] = $this->securityPolicyId;
        }

        if (null !== $this->XForwardedForConfig) {
            $res['XForwardedForConfig'] = null !== $this->XForwardedForConfig ? $this->XForwardedForConfig->toArray($noStream) : $this->XForwardedForConfig;
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
        if (isset($map['BackendPorts'])) {
            if (!empty($map['BackendPorts'])) {
                $model->backendPorts = [];
                $n1 = 0;
                foreach ($map['BackendPorts'] as $item1) {
                    $model->backendPorts[$n1] = backendPorts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Certificates'])) {
            if (!empty($map['Certificates'])) {
                $model->certificates = [];
                $n1 = 0;
                foreach ($map['Certificates'] as $item1) {
                    $model->certificates[$n1] = certificates::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ClientAffinity'])) {
            $model->clientAffinity = $map['ClientAffinity'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['HttpVersion'])) {
            $model->httpVersion = $map['HttpVersion'];
        }

        if (isset($map['IdleTimeout'])) {
            $model->idleTimeout = $map['IdleTimeout'];
        }

        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PortRanges'])) {
            if (!empty($map['PortRanges'])) {
                $model->portRanges = [];
                $n1 = 0;
                foreach ($map['PortRanges'] as $item1) {
                    $model->portRanges[$n1] = portRanges::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['ProxyProtocol'])) {
            $model->proxyProtocol = $map['ProxyProtocol'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RequestTimeout'])) {
            $model->requestTimeout = $map['RequestTimeout'];
        }

        if (isset($map['SecurityPolicyId'])) {
            $model->securityPolicyId = $map['SecurityPolicyId'];
        }

        if (isset($map['XForwardedForConfig'])) {
            $model->XForwardedForConfig = XForwardedForConfig::fromMap($map['XForwardedForConfig']);
        }

        return $model;
    }
}
