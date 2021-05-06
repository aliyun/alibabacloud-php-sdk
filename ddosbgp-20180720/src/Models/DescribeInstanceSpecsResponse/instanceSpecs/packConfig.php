<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeInstanceSpecsResponse\instanceSpecs;

use AlibabaCloud\Tea\Model;

class packConfig extends Model
{
    /**
     * @var int
     */
    public $packAdvThre;

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
    public $packBasicThre;

    /**
     * @var int
     */
    public $ipSpec;

    /**
     * @var int
     */
    public $bindIpCount;

    /**
     * @var int
     */
    public $normalBandwidth;
    protected $_name = [
        'packAdvThre'     => 'PackAdvThre',
        'ipAdvanceThre'   => 'IpAdvanceThre',
        'ipBasicThre'     => 'IpBasicThre',
        'packBasicThre'   => 'PackBasicThre',
        'ipSpec'          => 'IpSpec',
        'bindIpCount'     => 'BindIpCount',
        'normalBandwidth' => 'NormalBandwidth',
    ];

    public function validate()
    {
        Model::validateRequired('packAdvThre', $this->packAdvThre, true);
        Model::validateRequired('ipAdvanceThre', $this->ipAdvanceThre, true);
        Model::validateRequired('ipBasicThre', $this->ipBasicThre, true);
        Model::validateRequired('packBasicThre', $this->packBasicThre, true);
        Model::validateRequired('ipSpec', $this->ipSpec, true);
        Model::validateRequired('bindIpCount', $this->bindIpCount, true);
        Model::validateRequired('normalBandwidth', $this->normalBandwidth, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->packAdvThre) {
            $res['PackAdvThre'] = $this->packAdvThre;
        }
        if (null !== $this->ipAdvanceThre) {
            $res['IpAdvanceThre'] = $this->ipAdvanceThre;
        }
        if (null !== $this->ipBasicThre) {
            $res['IpBasicThre'] = $this->ipBasicThre;
        }
        if (null !== $this->packBasicThre) {
            $res['PackBasicThre'] = $this->packBasicThre;
        }
        if (null !== $this->ipSpec) {
            $res['IpSpec'] = $this->ipSpec;
        }
        if (null !== $this->bindIpCount) {
            $res['BindIpCount'] = $this->bindIpCount;
        }
        if (null !== $this->normalBandwidth) {
            $res['NormalBandwidth'] = $this->normalBandwidth;
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
        if (isset($map['PackAdvThre'])) {
            $model->packAdvThre = $map['PackAdvThre'];
        }
        if (isset($map['IpAdvanceThre'])) {
            $model->ipAdvanceThre = $map['IpAdvanceThre'];
        }
        if (isset($map['IpBasicThre'])) {
            $model->ipBasicThre = $map['IpBasicThre'];
        }
        if (isset($map['PackBasicThre'])) {
            $model->packBasicThre = $map['PackBasicThre'];
        }
        if (isset($map['IpSpec'])) {
            $model->ipSpec = $map['IpSpec'];
        }
        if (isset($map['BindIpCount'])) {
            $model->bindIpCount = $map['BindIpCount'];
        }
        if (isset($map['NormalBandwidth'])) {
            $model->normalBandwidth = $map['NormalBandwidth'];
        }

        return $model;
    }
}
