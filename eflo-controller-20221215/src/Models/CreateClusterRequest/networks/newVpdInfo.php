<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest\networks;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest\networks\newVpdInfo\vpdSubnets;
use AlibabaCloud\Tea\Model;

class newVpdInfo extends Model
{
    /**
     * @example cen-1gb1eftc5qp2ao75fo
     *
     * @var string
     */
    public $cenId;

    /**
     * @example 172.16.0.0/24
     *
     * @var string
     */
    public $cloudLinkCidr;

    /**
     * @example vcc-cn-c4dtycm5i08
     *
     * @var string
     */
    public $cloudLinkId;

    /**
     * @example vpc-0jl2x45apm6odc2c10h25
     *
     * @var string
     */
    public $monitorVpcId;

    /**
     * @example vsw-0jl2w3ffbghkss0x2foff
     *
     * @var string
     */
    public $monitorVswitchId;

    /**
     * @example 192.168.0.0/16
     *
     * @var string
     */
    public $vpdCidr;

    /**
     * @var vpdSubnets[]
     */
    public $vpdSubnets;
    protected $_name = [
        'cenId'            => 'CenId',
        'cloudLinkCidr'    => 'CloudLinkCidr',
        'cloudLinkId'      => 'CloudLinkId',
        'monitorVpcId'     => 'MonitorVpcId',
        'monitorVswitchId' => 'MonitorVswitchId',
        'vpdCidr'          => 'VpdCidr',
        'vpdSubnets'       => 'VpdSubnets',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['VpdSubnets'] = [];
            if (null !== $this->vpdSubnets && \is_array($this->vpdSubnets)) {
                $n = 0;
                foreach ($this->vpdSubnets as $item) {
                    $res['VpdSubnets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return newVpdInfo
     */
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
                $n                 = 0;
                foreach ($map['VpdSubnets'] as $item) {
                    $model->vpdSubnets[$n++] = null !== $item ? vpdSubnets::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
