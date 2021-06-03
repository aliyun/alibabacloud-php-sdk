<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListListenersResponseBody;

use AlibabaCloud\SDK\Ga\V20191120\Models\ListListenersResponseBody\listeners\backendPorts;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListListenersResponseBody\listeners\certificates;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListListenersResponseBody\listeners\portRanges;
use AlibabaCloud\Tea\Model;

class listeners extends Model
{
    /**
     * @var certificates[]
     */
    public $certificates;

    /**
     * @var backendPorts[]
     */
    public $backendPorts;

    /**
     * @var string
     */
    public $listenerId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $clientAffinity;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var portRanges[]
     */
    public $portRanges;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $proxyProtocol;

    /**
     * @var string
     */
    public $acceleratorId;
    protected $_name = [
        'certificates'   => 'Certificates',
        'backendPorts'   => 'BackendPorts',
        'listenerId'     => 'ListenerId',
        'description'    => 'Description',
        'state'          => 'State',
        'clientAffinity' => 'ClientAffinity',
        'protocol'       => 'Protocol',
        'createTime'     => 'CreateTime',
        'portRanges'     => 'PortRanges',
        'name'           => 'Name',
        'proxyProtocol'  => 'ProxyProtocol',
        'acceleratorId'  => 'AcceleratorId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certificates) {
            $res['Certificates'] = [];
            if (null !== $this->certificates && \is_array($this->certificates)) {
                $n = 0;
                foreach ($this->certificates as $item) {
                    $res['Certificates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->clientAffinity) {
            $res['ClientAffinity'] = $this->clientAffinity;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->proxyProtocol) {
            $res['ProxyProtocol'] = $this->proxyProtocol;
        }
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
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
        if (isset($map['Certificates'])) {
            if (!empty($map['Certificates'])) {
                $model->certificates = [];
                $n                   = 0;
                foreach ($map['Certificates'] as $item) {
                    $model->certificates[$n++] = null !== $item ? certificates::fromMap($item) : $item;
                }
            }
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
        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['ClientAffinity'])) {
            $model->clientAffinity = $map['ClientAffinity'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProxyProtocol'])) {
            $model->proxyProtocol = $map['ProxyProtocol'];
        }
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }

        return $model;
    }
}
