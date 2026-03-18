<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeInstanceSpecsResponseBody\instanceSpecs;

use AlibabaCloud\Dara\Model;

class packConfig extends Model
{
    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var int
     */
    public $bindIpCount;

    /**
     * @var int
     */
    public $elasticBwMbps;

    /**
     * @var string
     */
    public $elasticBwMode;

    /**
     * @var int
     */
    public $ipAdvanceThre;

    /**
     * @var int
     */
    public $ipBasicThre;

    /**
     * @var int
     */
    public $ipSpec;

    /**
     * @var int
     */
    public $normalBandwidth;

    /**
     * @var int
     */
    public $packAdvThre;

    /**
     * @var int
     */
    public $packBasicThre;
    protected $_name = [
        'bandwidth' => 'Bandwidth',
        'bindIpCount' => 'BindIpCount',
        'elasticBwMbps' => 'ElasticBwMbps',
        'elasticBwMode' => 'ElasticBwMode',
        'ipAdvanceThre' => 'IpAdvanceThre',
        'ipBasicThre' => 'IpBasicThre',
        'ipSpec' => 'IpSpec',
        'normalBandwidth' => 'NormalBandwidth',
        'packAdvThre' => 'PackAdvThre',
        'packBasicThre' => 'PackBasicThre',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
