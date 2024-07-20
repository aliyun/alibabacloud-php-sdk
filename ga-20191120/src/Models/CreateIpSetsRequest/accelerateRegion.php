<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\CreateIpSetsRequest;

use AlibabaCloud\Tea\Model;

class accelerateRegion extends Model
{
    /**
     * @description The ID of the acceleration region.
     *
     * This parameter is required.
     * @example cn-huhehaote
     *
     * @var string
     */
    public $accelerateRegionId;

    /**
     * @description The bandwidth that you want to allocate to the acceleration region. Unit: **Mbit/s**.
     *
     * >*  This parameter is required.
     * >*   You must allocate at least 2 Mbit/s of bandwidth to each acceleration region.
     * >*   The total bandwidth of all acceleration regions cannot exceed the bandwidth limit of your basic bandwidth plan.
     * @example 2
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The IP version used to connect to the GA instance. Valid values:
     *
     *   **IPv4** (default)
     *   **IPv6**
     *   **DUAL_STACK**: IPv4 and IPv6
     *
     * > Only pay-as-you-go standard GA instances support DUAL_STACK.
     * @example IPv6
     *
     * @var string
     */
    public $ipVersion;

    /**
     * @description The line type of the elastic IP address (EIP) in the acceleration region. Valid values:
     *
     *   **BGP**: BGP (Multi-ISP) lines.
     *   **BGP_PRO**: BGP (Multi-ISP) Pro lines
     *
     * > *   This parameter is required only if the bandwidth metering method of the GA instance is **pay-by-data transfer**.
     * >*   Different acceleration regions support different line types of EIPs.
     * @example BGP
     *
     * @var string
     */
    public $ispType;
    protected $_name = [
        'accelerateRegionId' => 'AccelerateRegionId',
        'bandwidth'          => 'Bandwidth',
        'ipVersion'          => 'IpVersion',
        'ispType'            => 'IspType',
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
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }
        if (null !== $this->ispType) {
            $res['IspType'] = $this->ispType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accelerateRegion
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
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['IspType'])) {
            $model->ispType = $map['IspType'];
        }

        return $model;
    }
}
