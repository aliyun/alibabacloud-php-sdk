<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest\networks;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest\networks\newVpdInfo\vpdSubnets;

class newVpdInfo extends Model
{
    /**
     * @var string
     */
    public $cenId;

    /**
     * @var string
     */
    public $cloudLinkCidr;

    /**
     * @var string
     */
    public $cloudLinkId;

    /**
     * @var string
     */
    public $monitorVpcId;

    /**
     * @var string
     */
    public $monitorVswitchId;

    /**
     * @var string
     */
    public $vpdCidr;

    /**
     * @var vpdSubnets[]
     */
    public $vpdSubnets;
    protected $_name = [
        'cenId' => 'CenId',
        'cloudLinkCidr' => 'CloudLinkCidr',
        'cloudLinkId' => 'CloudLinkId',
        'monitorVpcId' => 'MonitorVpcId',
        'monitorVswitchId' => 'MonitorVswitchId',
        'vpdCidr' => 'VpdCidr',
        'vpdSubnets' => 'VpdSubnets',
    ];

    public function validate()
    {
        if (\is_array($this->vpdSubnets)) {
            Model::validateArray($this->vpdSubnets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }

        if (null !== $this->cloudLinkCidr) {
            $res['CloudLinkCidr'] = $this->cloudLinkCidr;
        }

        if (null !== $this->cloudLinkId) {
            $res['CloudLinkId'] = $this->cloudLinkId;
        }

        if (null !== $this->monitorVpcId) {
            $res['MonitorVpcId'] = $this->monitorVpcId;
        }

        if (null !== $this->monitorVswitchId) {
            $res['MonitorVswitchId'] = $this->monitorVswitchId;
        }

        if (null !== $this->vpdCidr) {
            $res['VpdCidr'] = $this->vpdCidr;
        }

        if (null !== $this->vpdSubnets) {
            if (\is_array($this->vpdSubnets)) {
                $res['VpdSubnets'] = [];
                $n1 = 0;
                foreach ($this->vpdSubnets as $item1) {
                    $res['VpdSubnets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }

        if (isset($map['CloudLinkCidr'])) {
            $model->cloudLinkCidr = $map['CloudLinkCidr'];
        }

        if (isset($map['CloudLinkId'])) {
            $model->cloudLinkId = $map['CloudLinkId'];
        }

        if (isset($map['MonitorVpcId'])) {
            $model->monitorVpcId = $map['MonitorVpcId'];
        }

        if (isset($map['MonitorVswitchId'])) {
            $model->monitorVswitchId = $map['MonitorVswitchId'];
        }

        if (isset($map['VpdCidr'])) {
            $model->vpdCidr = $map['VpdCidr'];
        }

        if (isset($map['VpdSubnets'])) {
            if (!empty($map['VpdSubnets'])) {
                $model->vpdSubnets = [];
                $n1 = 0;
                foreach ($map['VpdSubnets'] as $item1) {
                    $model->vpdSubnets[$n1] = vpdSubnets::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
