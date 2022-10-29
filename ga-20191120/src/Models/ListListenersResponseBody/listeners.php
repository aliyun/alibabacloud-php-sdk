<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListListenersResponseBody;

use AlibabaCloud\SDK\Ga\V20191120\Models\ListListenersResponseBody\listeners\backendPorts;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListListenersResponseBody\listeners\certificates;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListListenersResponseBody\listeners\portRanges;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListListenersResponseBody\listeners\XForwardedForConfig;
use AlibabaCloud\Tea\Model;

class listeners extends Model
{
    /**
     * @var string
     */
    public $acceleratorId;

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
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

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
     * @var string
     */
    public $securityPolicyId;

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
        'acceleratorId'       => 'AcceleratorId',
        'backendPorts'        => 'BackendPorts',
        'certificates'        => 'Certificates',
        'clientAffinity'      => 'ClientAffinity',
        'createTime'          => 'CreateTime',
        'description'         => 'Description',
        'listenerId'          => 'ListenerId',
        'name'                => 'Name',
        'portRanges'          => 'PortRanges',
        'protocol'            => 'Protocol',
        'proxyProtocol'       => 'ProxyProtocol',
        'securityPolicyId'    => 'SecurityPolicyId',
        'state'               => 'State',
        'type'                => 'Type',
        'XForwardedForConfig' => 'XForwardedForConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }
        if (null !== $this->backendPorts) {
            $res['BackendPorts'] = [];
            if (null !== $this->backendPorts && \is_array($this->backendPorts)) {
                $n = 0;
                foreach ($this->backendPorts as $item) {
                    $res['BackendPorts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->certificates) {
            $res['Certificates'] = [];
            if (null !== $this->certificates && \is_array($this->certificates)) {
                $n = 0;
                foreach ($this->certificates as $item) {
                    $res['Certificates'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->portRanges) {
            $res['PortRanges'] = [];
            if (null !== $this->portRanges && \is_array($this->portRanges)) {
                $n = 0;
                foreach ($this->portRanges as $item) {
                    $res['PortRanges'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->proxyProtocol) {
            $res['ProxyProtocol'] = $this->proxyProtocol;
        }
        if (null !== $this->securityPolicyId) {
            $res['SecurityPolicyId'] = $this->securityPolicyId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->XForwardedForConfig) {
            $res['XForwardedForConfig'] = null !== $this->XForwardedForConfig ? $this->XForwardedForConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listeners
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['BackendPorts'])) {
            if (!empty($map['BackendPorts'])) {
                $model->backendPorts = [];
                $n                   = 0;
                foreach ($map['BackendPorts'] as $item) {
                    $model->backendPorts[$n++] = null !== $item ? backendPorts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Certificates'])) {
            if (!empty($map['Certificates'])) {
                $model->certificates = [];
                $n                   = 0;
                foreach ($map['Certificates'] as $item) {
                    $model->certificates[$n++] = null !== $item ? certificates::fromMap($item) : $item;
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
        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PortRanges'])) {
            if (!empty($map['PortRanges'])) {
                $model->portRanges = [];
                $n                 = 0;
                foreach ($map['PortRanges'] as $item) {
                    $model->portRanges[$n++] = null !== $item ? portRanges::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['ProxyProtocol'])) {
            $model->proxyProtocol = $map['ProxyProtocol'];
        }
        if (isset($map['SecurityPolicyId'])) {
            $model->securityPolicyId = $map['SecurityPolicyId'];
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
