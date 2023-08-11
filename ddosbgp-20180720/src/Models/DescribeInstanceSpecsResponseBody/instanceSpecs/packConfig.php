<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeInstanceSpecsResponseBody\instanceSpecs;

use AlibabaCloud\Tea\Model;

class packConfig extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The ID of the Anti-DDoS Origin Enterprise instance.
     *
     * @example 0
     *
     * @var int
     */
    public $bindIpCount;

    /**
     * @description DescribeInstanceSpecs
     *
     * @example 300
     *
     * @var int
     */
    public $ipAdvanceThre;

    /**
     * @description WB269094
     *
     * @example 20
     *
     * @var int
     */
    public $ipBasicThre;

    /**
     * @example 100
     *
     * @var int
     */
    public $ipSpec;

    /**
     * @description DescribeInstanceSpecs
     *
     * @example 200
     *
     * @var int
     */
    public $normalBandwidth;

    /**
     * @description All Alibaba Cloud API operations must include common request parameters. For more information about common request parameters, see [Common parameters](~~118841~~).
     *
     * For more information about sample requests, see the **"Examples"** section of this topic.
     * @example 300
     *
     * @var int
     */
    public $packAdvThre;

    /**
     * @description The ID of the request.
     *
     * @example 20
     *
     * @var int
     */
    public $packBasicThre;
    protected $_name = [
        'bandwidth'       => 'Bandwidth',
        'bindIpCount'     => 'BindIpCount',
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
