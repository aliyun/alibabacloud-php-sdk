<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeListenerResponseBody\backendPorts;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeListenerResponseBody\certificates;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeListenerResponseBody\portRanges;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeListenerResponseBody\relatedAcls;
use AlibabaCloud\Tea\Model;

class DescribeListenerResponseBody extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var portRanges[]
     */
    public $portRanges;

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
    public $protocol;

    /**
     * @var string
     */
    public $listenerId;

    /**
     * @var string
     */
    public $clientAffinity;

    /**
     * @var string
     */
    public $name;

    /**
     * @var relatedAcls[]
     */
    public $relatedAcls;

    /**
     * @var string
     */
    public $aclType;

    /**
     * @var string
     */
    public $acceleratorId;

    /**
     * @var bool
     */
    public $proxyProtocol;
    protected $_name = [
        'description'    => 'Description',
        'requestId'      => 'RequestId',
        'state'          => 'State',
        'createTime'     => 'CreateTime',
        'portRanges'     => 'PortRanges',
        'backendPorts'   => 'BackendPorts',
        'certificates'   => 'Certificates',
        'protocol'       => 'Protocol',
        'listenerId'     => 'ListenerId',
        'clientAffinity' => 'ClientAffinity',
        'name'           => 'Name',
        'relatedAcls'    => 'RelatedAcls',
        'aclType'        => 'AclType',
        'acceleratorId'  => 'AcceleratorId',
        'proxyProtocol'  => 'ProxyProtocol',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
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
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }
        if (null !== $this->clientAffinity) {
            $res['ClientAffinity'] = $this->clientAffinity;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->relatedAcls) {
            $res['RelatedAcls'] = [];
            if (null !== $this->relatedAcls && \is_array($this->relatedAcls)) {
                $n = 0;
                foreach ($this->relatedAcls as $item) {
                    $res['RelatedAcls'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->aclType) {
            $res['AclType'] = $this->aclType;
        }
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }
        if (null !== $this->proxyProtocol) {
            $res['ProxyProtocol'] = $this->proxyProtocol;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeListenerResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
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
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }
        if (isset($map['ClientAffinity'])) {
            $model->clientAffinity = $map['ClientAffinity'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RelatedAcls'])) {
            if (!empty($map['RelatedAcls'])) {
                $model->relatedAcls = [];
                $n                  = 0;
                foreach ($map['RelatedAcls'] as $item) {
                    $model->relatedAcls[$n++] = null !== $item ? relatedAcls::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AclType'])) {
            $model->aclType = $map['AclType'];
        }
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['ProxyProtocol'])) {
            $model->proxyProtocol = $map['ProxyProtocol'];
        }

        return $model;
    }
}
