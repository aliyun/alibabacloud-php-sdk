<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\UpdateLoadBalancerZonesRequest;

use AlibabaCloud\Tea\Model;

class zoneMappings extends Model
{
    /**
     * @description The type of EIP. Valid values:
     *
     *   **Common**: an EIP.
     *   **Anycast**: an Anycast EIP.
     *
     * >  For more information about the regions in which ALB supports Anycast EIPs, see [Limits](https://help.aliyun.com/document_detail/460727.html).
     * @example Common
     *
     * @var string
     */
    public $eipType;

    /**
     * @description The private IPv4 address. You must specify at least two zones. You can specify a maximum of 10 zones.
     *
     * @example 192.168.10.1
     *
     * @var string
     */
    public $intranetAddress;

    /**
     * @description The ID of the vSwitch in the zone. By default, each zone contains one vSwitch and one subnet. You can specify at most 10 zones. If the region supports two or more zones, specify at least two zones.
     *
     * This parameter is required.
     * @example vsw-bp1rmcrwg3erh1fh8****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The zone name. You can call the [DescribeZones](https://help.aliyun.com/document_detail/189196.html) operation to query the most recent zone list. You can specify at most 10 zones. If the region supports two or more zones, specify at least two zones.
     *
     * This parameter is required.
     * @example cn-hangzhou-a
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'eipType'         => 'EipType',
        'intranetAddress' => 'IntranetAddress',
        'vSwitchId'       => 'VSwitchId',
        'zoneId'          => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eipType) {
            $res['EipType'] = $this->eipType;
        }
        if (null !== $this->intranetAddress) {
            $res['IntranetAddress'] = $this->intranetAddress;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return zoneMappings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EipType'])) {
            $model->eipType = $map['EipType'];
        }
        if (isset($map['IntranetAddress'])) {
            $model->intranetAddress = $map['IntranetAddress'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
