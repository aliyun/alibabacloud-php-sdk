<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeInstanceSpecsResponseBody\instanceSpecs;

use AlibabaCloud\Tea\Model;

class packConfig extends Model
{
    /**
     * @var int
     */
    public $packBasicThre;

    /**
     * @var int
     */
    public $bindIpCount;

    /**
     * @var int
     */
    public $packAdvThre;

    /**
     * @var int
     */
    public $ipBasicThre;

    /**
     * @var int
     */
    public $ipAdvanceThre;

    /**
     * @var int
     */
    public $ipSpec;
    protected $_name = [
        'packBasicThre' => 'PackBasicThre',
        'bindIpCount'   => 'BindIpCount',
        'packAdvThre'   => 'PackAdvThre',
        'ipBasicThre'   => 'IpBasicThre',
        'ipAdvanceThre' => 'IpAdvanceThre',
        'ipSpec'        => 'IpSpec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->packBasicThre) {
            $res['PackBasicThre'] = $this->packBasicThre;
        }
        if (null !== $this->bindIpCount) {
            $res['BindIpCount'] = $this->bindIpCount;
        }
        if (null !== $this->packAdvThre) {
            $res['PackAdvThre'] = $this->packAdvThre;
        }
        if (null !== $this->ipBasicThre) {
            $res['IpBasicThre'] = $this->ipBasicThre;
        }
        if (null !== $this->ipAdvanceThre) {
            $res['IpAdvanceThre'] = $this->ipAdvanceThre;
        }
        if (null !== $this->ipSpec) {
            $res['IpSpec'] = $this->ipSpec;
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
        if (isset($map['PackBasicThre'])) {
            $model->packBasicThre = $map['PackBasicThre'];
        }
        if (isset($map['BindIpCount'])) {
            $model->bindIpCount = $map['BindIpCount'];
        }
        if (isset($map['PackAdvThre'])) {
            $model->packAdvThre = $map['PackAdvThre'];
        }
        if (isset($map['IpBasicThre'])) {
            $model->ipBasicThre = $map['IpBasicThre'];
        }
        if (isset($map['IpAdvanceThre'])) {
            $model->ipAdvanceThre = $map['IpAdvanceThre'];
        }
        if (isset($map['IpSpec'])) {
            $model->ipSpec = $map['IpSpec'];
        }

        return $model;
    }
}
