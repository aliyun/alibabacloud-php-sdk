<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeInstanceSpecsResponseBody\instanceSpecs;

use AlibabaCloud\Tea\Model;

class packConfig extends Model
{
    /**
     * @description The bandwidth. Unit: Gbit/s.
     *
     * @example 2
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The number of IP addresses that are protected by the Anti-DDoS Origin Enterprise instance.
     *
     * @example 0
     *
     * @var int
     */
    public $bindIpCount;

    /**
     * @description The burstable clean bandwidth. Unit: Mbit/s.
     *
     * @example 100
     *
     * @var int
     */
    public $elasticBwMbps;

    /**
     * @description The metering method of burstable clean bandwidth. Valid values:
     *
     *   **month**: the monthly 95th percentile metering method.
     *   **day**: the daily 95th percentile metering method.
     *
     * @example day
     *
     * @var string
     */
    public $elasticBwMode;

    /**
     * @description The burstable protection bandwidth of each protected IP address. Unit: Gbit/s.
     *
     * @example 300
     *
     * @var int
     */
    public $ipAdvanceThre;

    /**
     * @description The basic protection bandwidth of each protected IP address. Unit: Gbit/s.
     *
     * @example 20
     *
     * @var int
     */
    public $ipBasicThre;

    /**
     * @description The number of IP addresses that can be protected by the Anti-DDoS Origin Enterprise instance.
     *
     * @example 100
     *
     * @var int
     */
    public $ipSpec;

    /**
     * @description The clean bandwidth. Unit: Mbit/s.
     *
     * @example 200
     *
     * @var int
     */
    public $normalBandwidth;

    /**
     * @description The burstable protection bandwidth of the Anti-DDoS Origin instance. Unit: Gbit/s.
     *
     * @example 300
     *
     * @var int
     */
    public $packAdvThre;

    /**
     * @description The basic protection bandwidth of the Anti-DDoS Origin instance. Unit: Gbit/s.
     *
     * @example 20
     *
     * @var int
     */
    public $packBasicThre;
    protected $_name = [
        'bandwidth'       => 'Bandwidth',
        'bindIpCount'     => 'BindIpCount',
        'elasticBwMbps'   => 'ElasticBwMbps',
        'elasticBwMode'   => 'ElasticBwMode',
        'ipAdvanceThre'   => 'IpAdvanceThre',
        'ipBasicThre'     => 'IpBasicThre',
        'ipSpec'          => 'IpSpec',
        'normalBandwidth' => 'NormalBandwidth',
        'packAdvThre'     => 'PackAdvThre',
        'packBasicThre'   => 'PackBasicThre',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->bindIpCount) {
            $res['BindIpCount'] = $this->bindIpCount;
        }
        if (null !== $this->elasticBwMbps) {
            $res['ElasticBwMbps'] = $this->elasticBwMbps;
        }
        if (null !== $this->elasticBwMode) {
            $res['ElasticBwMode'] = $this->elasticBwMode;
        }
        if (null !== $this->ipAdvanceThre) {
            $res['IpAdvanceThre'] = $this->ipAdvanceThre;
        }
        if (null !== $this->ipBasicThre) {
            $res['IpBasicThre'] = $this->ipBasicThre;
        }
        if (null !== $this->ipSpec) {
            $res['IpSpec'] = $this->ipSpec;
        }
        if (null !== $this->normalBandwidth) {
            $res['NormalBandwidth'] = $this->normalBandwidth;
        }
        if (null !== $this->packAdvThre) {
            $res['PackAdvThre'] = $this->packAdvThre;
        }
        if (null !== $this->packBasicThre) {
            $res['PackBasicThre'] = $this->packBasicThre;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return packConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['BindIpCount'])) {
            $model->bindIpCount = $map['BindIpCount'];
        }
        if (isset($map['ElasticBwMbps'])) {
            $model->elasticBwMbps = $map['ElasticBwMbps'];
        }
        if (isset($map['ElasticBwMode'])) {
            $model->elasticBwMode = $map['ElasticBwMode'];
        }
        if (isset($map['IpAdvanceThre'])) {
            $model->ipAdvanceThre = $map['IpAdvanceThre'];
        }
        if (isset($map['IpBasicThre'])) {
            $model->ipBasicThre = $map['IpBasicThre'];
        }
        if (isset($map['IpSpec'])) {
            $model->ipSpec = $map['IpSpec'];
        }
        if (isset($map['NormalBandwidth'])) {
            $model->normalBandwidth = $map['NormalBandwidth'];
        }
        if (isset($map['PackAdvThre'])) {
            $model->packAdvThre = $map['PackAdvThre'];
        }
        if (isset($map['PackBasicThre'])) {
            $model->packBasicThre = $map['PackBasicThre'];
        }

        return $model;
    }
}
