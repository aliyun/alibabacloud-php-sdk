<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeIpSetResponseBody\serviceManagedInfos;

class DescribeIpSetResponseBody extends Model
{
    /**
     * @var string
     */
    public $accelerateRegionId;

    /**
     * @var string
     */
    public $acceleratorId;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string[]
     */
    public $ipAddressList;

    /**
     * @var string
     */
    public $ipSetId;

    /**
     * @var string
     */
    public $ipVersion;

    /**
     * @var string
     */
    public $ispType;

    /**
     * @var string
     */
    public $requestId;

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
    protected $_name = [
        'accelerateRegionId' => 'AccelerateRegionId',
        'acceleratorId' => 'AcceleratorId',
        'bandwidth' => 'Bandwidth',
        'ipAddressList' => 'IpAddressList',
        'ipSetId' => 'IpSetId',
        'ipVersion' => 'IpVersion',
        'ispType' => 'IspType',
        'requestId' => 'RequestId',
        'serviceId' => 'ServiceId',
        'serviceManaged' => 'ServiceManaged',
        'serviceManagedInfos' => 'ServiceManagedInfos',
        'state' => 'State',
    ];

    public function validate()
    {
        if (\is_array($this->ipAddressList)) {
            Model::validateArray($this->ipAddressList);
        }
        if (\is_array($this->serviceManagedInfos)) {
            Model::validateArray($this->serviceManagedInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accelerateRegionId) {
            $res['AccelerateRegionId'] = $this->accelerateRegionId;
        }

        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }

        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }

        if (null !== $this->ipAddressList) {
            if (\is_array($this->ipAddressList)) {
                $res['IpAddressList'] = [];
                $n1 = 0;
                foreach ($this->ipAddressList as $item1) {
                    $res['IpAddressList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ipSetId) {
            $res['IpSetId'] = $this->ipSetId;
        }

        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }

        if (null !== $this->ispType) {
            $res['IspType'] = $this->ispType;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccelerateRegionId'])) {
            $model->accelerateRegionId = $map['AccelerateRegionId'];
        }

        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }

        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }

        if (isset($map['IpAddressList'])) {
            if (!empty($map['IpAddressList'])) {
                $model->ipAddressList = [];
                $n1 = 0;
                foreach ($map['IpAddressList'] as $item1) {
                    $model->ipAddressList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['IpSetId'])) {
            $model->ipSetId = $map['IpSetId'];
        }

        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }

        if (isset($map['IspType'])) {
            $model->ispType = $map['IspType'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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

        return $model;
    }
}
