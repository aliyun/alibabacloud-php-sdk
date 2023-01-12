<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\CreateIpSetsRequest;

use AlibabaCloud\Tea\Model;

class accelerateRegion extends Model
{
    /**
     * @description The ID of the region that requires acceleration.
     *
     * The number of regions that can be added varies based on the specification of the GA instance. For more information, see [Overview](~~153127~~).
     * @example cn-huhehaote
     *
     * @var string
     */
    public $accelerateRegionId;

    /**
     * @description The bandwidth to be allocated to the acceleration region. Unit: **Mbit/s**.
     *
     * >
     *   Each acceleration region must be allocated a minimum of 2 Mbit/s of bandwidth.
     *   The total bandwidth for all acceleration regions cannot exceed the bandwidth limit of your basic bandwidth plan.
     *
     * @example 2
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The IP version used to connect to the GA instance. Valid values:
     *
     *   **IPv4** (default): IPv4
     *   **IPv6**: IPv6
     *
     * @example IPv6
     *
     * @var string
     */
    public $ipVersion;

    /**
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
