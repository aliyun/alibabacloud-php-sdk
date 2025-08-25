<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypesResponseBody\instanceTypes\instanceType\networkInfo\bandwidthWeighting\weightingInfos;

use AlibabaCloud\Dara\Model;

class weightingInfo extends Model
{
    /**
     * @var int
     */
    public $ebsBandwidth;

    /**
     * @var int
     */
    public $ebsBurstBandwidth;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $vpcBandwidth;

    /**
     * @var int
     */
    public $vpcBurstBandwidth;
    protected $_name = [
        'ebsBandwidth' => 'EbsBandwidth',
        'ebsBurstBandwidth' => 'EbsBurstBandwidth',
        'name' => 'Name',
        'vpcBandwidth' => 'VpcBandwidth',
        'vpcBurstBandwidth' => 'VpcBurstBandwidth',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ebsBandwidth) {
            $res['EbsBandwidth'] = $this->ebsBandwidth;
        }

        if (null !== $this->ebsBurstBandwidth) {
            $res['EbsBurstBandwidth'] = $this->ebsBurstBandwidth;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->vpcBandwidth) {
            $res['VpcBandwidth'] = $this->vpcBandwidth;
        }

        if (null !== $this->vpcBurstBandwidth) {
            $res['VpcBurstBandwidth'] = $this->vpcBurstBandwidth;
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
        if (isset($map['EbsBandwidth'])) {
            $model->ebsBandwidth = $map['EbsBandwidth'];
        }

        if (isset($map['EbsBurstBandwidth'])) {
            $model->ebsBurstBandwidth = $map['EbsBurstBandwidth'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['VpcBandwidth'])) {
            $model->vpcBandwidth = $map['VpcBandwidth'];
        }

        if (isset($map['VpcBurstBandwidth'])) {
            $model->vpcBurstBandwidth = $map['VpcBurstBandwidth'];
        }

        return $model;
    }
}
