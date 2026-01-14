<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeListenerResponseBody\backendPorts;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeListenerResponseBody\certificates;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeListenerResponseBody\portRanges;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeListenerResponseBody\relatedAcls;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeListenerResponseBody\serviceManagedInfos;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeListenerResponseBody\XForwardedForConfig;

class DescribeListenerResponseBody extends Model
{
    /**
     * @var string
     */
    public $acceleratorId;

    /**
     * @var string
     */
    public $aclType;

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
    public $createTime;

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
     * @var bool
     */
    public $proxyProtocol;

    /**
     * @var relatedAcls[]
     */
    public $relatedAcls;

    /**
     * @var string
     */
    public $requestId;

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
    public $serviceId;

    /**
     * @var bool
     */
    public $serviceManaged;

    /**
     * @var serviceManagedInfos[]
     */
    public $serviceManagedInfos;

    /**
     * @var string
     */
    public $state;

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
        'aclType' => 'AclType',
        'backendPorts' => 'BackendPorts',
        'certificates' => 'Certificates',
        'clientAffinity' => 'ClientAffinity',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'httpVersion' => 'HttpVersion',
        'idleTimeout' => 'IdleTimeout',
        'listenerId' => 'ListenerId',
        'name' => 'Name',
        'portRanges' => 'PortRanges',
        'protocol' => 'Protocol',
        'proxyProtocol' => 'ProxyProtocol',
        'relatedAcls' => 'RelatedAcls',
        'requestId' => 'RequestId',
        'requestTimeout' => 'RequestTimeout',
        'securityPolicyId' => 'SecurityPolicyId',
        'serviceId' => 'ServiceId',
        'serviceManaged' => 'ServiceManaged',
        'serviceManagedInfos' => 'ServiceManagedInfos',
        'state' => 'State',
        'type' => 'Type',
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
        if (\is_array($this->relatedAcls)) {
            Model::validateArray($this->relatedAcls);
        }
        if (\is_array($this->serviceManagedInfos)) {
            Model::validateArray($this->serviceManagedInfos);
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

        if (null !== $this->aclType) {
            $res['AclType'] = $this->aclType;
        }

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

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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

        if (null !== $this->relatedAcls) {
            if (\is_array($this->relatedAcls)) {
                $res['RelatedAcls'] = [];
                $n1 = 0;
                foreach ($this->relatedAcls as $item1) {
                    $res['RelatedAcls'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->requestTimeout) {
            $res['RequestTimeout'] = $this->requestTimeout;
        }

        if (null !== $this->securityPolicyId) {
            $res['SecurityPolicyId'] = $this->securityPolicyId;
        }

        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        if (null !== $this->serviceManaged) {
            $res['ServiceManaged'] = $this->serviceManaged;
        }

        if (null !== $this->serviceManagedInfos) {
            if (\is_array($this->serviceManagedInfos)) {
                $res['ServiceManagedInfos'] = [];
                $n1 = 0;
                foreach ($this->serviceManagedInfos as $item1) {
                    $res['ServiceManagedInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
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

        if (isset($map['AclType'])) {
            $model->aclType = $map['AclType'];
        }

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

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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

        if (isset($map['RelatedAcls'])) {
            if (!empty($map['RelatedAcls'])) {
                $model->relatedAcls = [];
                $n1 = 0;
                foreach ($map['RelatedAcls'] as $item1) {
                    $model->relatedAcls[$n1] = relatedAcls::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RequestTimeout'])) {
            $model->requestTimeout = $map['RequestTimeout'];
        }

        if (isset($map['SecurityPolicyId'])) {
            $model->securityPolicyId = $map['SecurityPolicyId'];
        }

        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        if (isset($map['ServiceManaged'])) {
            $model->serviceManaged = $map['ServiceManaged'];
        }

        if (isset($map['ServiceManagedInfos'])) {
            if (!empty($map['ServiceManagedInfos'])) {
                $model->serviceManagedInfos = [];
                $n1 = 0;
                foreach ($map['ServiceManagedInfos'] as $item1) {
                    $model->serviceManagedInfos[$n1] = serviceManagedInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
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
