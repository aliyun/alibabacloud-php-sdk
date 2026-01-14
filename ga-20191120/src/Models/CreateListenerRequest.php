<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateListenerRequest\certificates;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateListenerRequest\customRoutingEndpointGroupConfigurations;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateListenerRequest\endpointGroupConfigurations;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateListenerRequest\portRanges;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateListenerRequest\XForwardedForConfig;

class CreateListenerRequest extends Model
{
    /**
     * @var string
     */
    public $acceleratorId;

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
     * @var customRoutingEndpointGroupConfigurations[]
     */
    public $customRoutingEndpointGroupConfigurations;

    /**
     * @var string
     */
    public $description;

    /**
     * @var endpointGroupConfigurations[]
     */
    public $endpointGroupConfigurations;

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
     * @var string
     */
    public $type;

    /**
     * @var XForwardedForConfig
     */
    public $XForwardedForConfig;
    protected $_name = [
        'acceleratorId' => 'AcceleratorId',
        'certificates' => 'Certificates',
        'clientAffinity' => 'ClientAffinity',
        'clientToken' => 'ClientToken',
        'customRoutingEndpointGroupConfigurations' => 'CustomRoutingEndpointGroupConfigurations',
        'description' => 'Description',
        'endpointGroupConfigurations' => 'EndpointGroupConfigurations',
        'httpVersion' => 'HttpVersion',
        'idleTimeout' => 'IdleTimeout',
        'name' => 'Name',
        'portRanges' => 'PortRanges',
        'protocol' => 'Protocol',
        'regionId' => 'RegionId',
        'requestTimeout' => 'RequestTimeout',
        'securityPolicyId' => 'SecurityPolicyId',
        'type' => 'Type',
        'XForwardedForConfig' => 'XForwardedForConfig',
    ];

    public function validate()
    {
        if (\is_array($this->certificates)) {
            Model::validateArray($this->certificates);
        }
        if (\is_array($this->customRoutingEndpointGroupConfigurations)) {
            Model::validateArray($this->customRoutingEndpointGroupConfigurations);
        }
        if (\is_array($this->endpointGroupConfigurations)) {
            Model::validateArray($this->endpointGroupConfigurations);
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
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
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

        if (null !== $this->customRoutingEndpointGroupConfigurations) {
            if (\is_array($this->customRoutingEndpointGroupConfigurations)) {
                $res['CustomRoutingEndpointGroupConfigurations'] = [];
                $n1 = 0;
                foreach ($this->customRoutingEndpointGroupConfigurations as $item1) {
                    $res['CustomRoutingEndpointGroupConfigurations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->endpointGroupConfigurations) {
            if (\is_array($this->endpointGroupConfigurations)) {
                $res['EndpointGroupConfigurations'] = [];
                $n1 = 0;
                foreach ($this->endpointGroupConfigurations as $item1) {
                    $res['EndpointGroupConfigurations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->httpVersion) {
            $res['HttpVersion'] = $this->httpVersion;
        }

        if (null !== $this->idleTimeout) {
            $res['IdleTimeout'] = $this->idleTimeout;
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

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->requestTimeout) {
            $res['RequestTimeout'] = $this->requestTimeout;
        }

        if (null !== $this->securityPolicyId) {
            $res['SecurityPolicyId'] = $this->securityPolicyId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
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

        if (isset($map['CustomRoutingEndpointGroupConfigurations'])) {
            if (!empty($map['CustomRoutingEndpointGroupConfigurations'])) {
                $model->customRoutingEndpointGroupConfigurations = [];
                $n1 = 0;
                foreach ($map['CustomRoutingEndpointGroupConfigurations'] as $item1) {
                    $model->customRoutingEndpointGroupConfigurations[$n1] = customRoutingEndpointGroupConfigurations::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EndpointGroupConfigurations'])) {
            if (!empty($map['EndpointGroupConfigurations'])) {
                $model->endpointGroupConfigurations = [];
                $n1 = 0;
                foreach ($map['EndpointGroupConfigurations'] as $item1) {
                    $model->endpointGroupConfigurations[$n1] = endpointGroupConfigurations::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['HttpVersion'])) {
            $model->httpVersion = $map['HttpVersion'];
        }

        if (isset($map['IdleTimeout'])) {
            $model->idleTimeout = $map['IdleTimeout'];
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

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RequestTimeout'])) {
            $model->requestTimeout = $map['RequestTimeout'];
        }

        if (isset($map['SecurityPolicyId'])) {
            $model->securityPolicyId = $map['SecurityPolicyId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['XForwardedForConfig'])) {
            $model->XForwardedForConfig = XForwardedForConfig::fromMap($map['XForwardedForConfig']);
        }

        return $model;
    }
}
