<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListIpSetsResponseBody;

use AlibabaCloud\SDK\Ga\V20191120\Models\ListIpSetsResponseBody\ipSets\serviceManagedInfos;
use AlibabaCloud\Tea\Model;

class ipSets extends Model
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
     * @description The bandwidth that is allocated to the acceleration region. Unit: **Mbit/s**.
     *
     * @example 2
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The accelerated IP addresses.
     *
     * @var string[]
     */
    public $ipAddressList;

    /**
     * @description The ID of the acceleration region.
     *
     * @example ips-bp11r5jb8ogp122xl****
     *
     * @var string
     */
    public $ipSetId;

    /**
     * @description The IP version. Valid values:
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
     * @description The line type of the elastic IP address (EIP) in the acceleration region. Valid values:
     *
     *   **BGP** (default)
     *   **BGP_PRO** If the acceleration region is China (Hong Kong) and a basic bandwidth plan whose bandwidth type is Premium is associated with the GA instance, the default value of IspType is BGP_PRO.
     *
     * If you are allowed to use single-ISP bandwidth, one of the following values is supported:
     *
     *   **ChinaTelecom**
     *   **ChinaUnicom**
     *   **ChinaMobile**
     *   **ChinaTelecom_L2**
     *   **ChinaUnicom_L2**
     *   **ChinaMobile_L2**
     *
     * >  The supported line types vary based on the acceleration region.
     * @example BGP
     *
     * @var string
     */
    public $ispType;

    /**
     * @description The service that manages the instance.
     *
     * >  This parameter takes effect only if **ServiceManaged** is set to **True**.
     * @example ALB
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description Indicates whether the GA instance is managed. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $serviceManaged;

    /**
     * @description The actions that users can perform on the managed instance.
     *
     * >  This parameter takes effect only if **ServiceManaged** is set to **True**.
     *
     *   Users can perform only specific actions on a managed instance.
     *
     * @var serviceManagedInfos[]
     */
    public $serviceManagedInfos;

    /**
     * @description The status of the acceleration region. Valid values:
     *
     *   **init**
     *   **active**
     *   **updating**
     *   **deleting**
     *
     * @example active
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'accelerateRegionId'  => 'AccelerateRegionId',
        'bandwidth'           => 'Bandwidth',
        'ipAddressList'       => 'IpAddressList',
        'ipSetId'             => 'IpSetId',
        'ipVersion'           => 'IpVersion',
        'ispType'             => 'IspType',
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
     * @return ipSets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccelerateRegionId'])) {
            $model->accelerateRegionId = $map['AccelerateRegionId'];
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
