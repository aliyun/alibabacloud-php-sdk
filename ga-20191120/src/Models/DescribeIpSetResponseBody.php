<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeIpSetResponseBody\serviceManagedInfos;
use AlibabaCloud\Tea\Model;

class DescribeIpSetResponseBody extends Model
{
    /**
     * @description The ID of the acceleration region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $accelerateRegionId;

    /**
     * @description The ID of the GA instance.
     *
     * @example ga-bp1yeeq8yfoyszmqy****
     *
     * @var string
     */
    public $acceleratorId;

    /**
     * @description The bandwidth that is allocated to the acceleration region. Unit: Mbit/s.
     *
     * @example 3
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The list of accelerated IP addresses in the acceleration region.
     *
     * @var string[]
     */
    public $ipAddressList;

    /**
     * @description The ID of the acceleration region.
     *
     * @example ips-bp11ilwqjdkjeg9r7****
     *
     * @var string
     */
    public $ipSetId;

    /**
     * @description The version of the IP protocol. Valid values:
     *
     *   **IPv4**
     *   **IPv6**
     *
     * @example IPv4
     *
     * @var string
     */
    public $ipVersion;

    /**
     * @description The line type of the elastic IP address (EIP) in the acceleration region.
     *
     *   **BGP**: BGP (Multi-ISP) lines.
     *   **BGP_PRO**: BGP (Multi-ISP) Pro lines
     *
     * If you are allowed to use single-ISP bandwidth, one of the following values is returned:
     *
     *   **ChinaTelecom**: China Telecom (single ISP).
     *   **ChinaUnicom**: China Unicom (single ISP).
     *   **ChinaMobile**: China Mobile (single ISP).
     *   **ChinaTelecom_L2**: China Telecom (single ISP)\_L2.
     *   **ChinaUnicom_L2**: China Unicom (single ISP)\_L2.
     *   **ChinaMobile_L2**: China Mobile (single ISP)\_L2.
     *
     * >  The supported single-ISP line types vary based on the acceleration region.
     * @example BGP
     *
     * @var string
     */
    public $ispType;

    /**
     * @description The ID of the request.
     *
     * @example 6D2BFF54-6AF2-4679-88C4-2F2E187F16CB
     *
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
     * @description The status of the acceleration region. Valid values:
     *
     *   **init**: The acceleration region is being initialized.
     *   **active**: The acceleration region is in the running state.
     *   **updating**: The acceleration region is being configured.
     *   **deleting:** The VPN gateway is being deleted.
     *
     * @example active
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'accelerateRegionId'  => 'AccelerateRegionId',
        'acceleratorId'       => 'AcceleratorId',
        'bandwidth'           => 'Bandwidth',
        'ipAddressList'       => 'IpAddressList',
        'ipSetId'             => 'IpSetId',
        'ipVersion'           => 'IpVersion',
        'ispType'             => 'IspType',
        'requestId'           => 'RequestId',
        'serviceId'           => 'ServiceId',
        'serviceManaged'      => 'ServiceManaged',
        'serviceManagedInfos' => 'ServiceManagedInfos',
        'state'               => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['IpAddressList'] = $this->ipAddressList;
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
            $res['ServiceManagedInfos'] = [];
            if (null !== $this->serviceManagedInfos && \is_array($this->serviceManagedInfos)) {
                $n = 0;
                foreach ($this->serviceManagedInfos as $item) {
                    $res['ServiceManagedInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeIpSetResponseBody
     */
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
                $model->ipAddressList = $map['IpAddressList'];
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
                $n                          = 0;
                foreach ($map['ServiceManagedInfos'] as $item) {
                    $model->serviceManagedInfos[$n++] = null !== $item ? serviceManagedInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
