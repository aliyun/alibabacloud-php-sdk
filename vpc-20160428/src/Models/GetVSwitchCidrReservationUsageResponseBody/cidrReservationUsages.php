<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\GetVSwitchCidrReservationUsageResponseBody;

use AlibabaCloud\Tea\Model;

class cidrReservationUsages extends Model
{
    /**
     * @description The CIDR block allocated to the ENI from the reserved CIDR block.
     *
     * @example 192.168.1.64/28
     *
     * @var string
     */
    public $ipPrefixCidr;

    /**
     * @description The ID of the reserved CIDR block.
     *
     * @example vcr-bp1m12saqteraw3rp****
     *
     * @var string
     */
    public $ipPrefixId;

    /**
     * @description The ID of the elastic network interface (ENI) whose CIDR block is allocated from the reserved CIDR block.
     *
     * @example eni-bp14v2sdd3v8htln****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The type of the resource to which a CIDR block is allocated from the reserved CIDR block. Only **NetworkInterface** may be returned, which indicates an ENI.
     *
     * @example NetworkInterface
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The ID of the reserved CIDR block.
     *
     * @example vcr-bp1m12saqteraw3rp****
     *
     * @var string
     */
    public $vSwitchCidrReservationId;

    /**
     * @description The ID of the vSwitch to which the reserved CIDR block belongs.
     *
     * @example vsw-25navfgbue4g****
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'ipPrefixCidr'             => 'IpPrefixCidr',
        'ipPrefixId'               => 'IpPrefixId',
        'resourceId'               => 'ResourceId',
        'resourceType'             => 'ResourceType',
        'vSwitchCidrReservationId' => 'VSwitchCidrReservationId',
        'vSwitchId'                => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipPrefixCidr) {
            $res['IpPrefixCidr'] = $this->ipPrefixCidr;
        }
        if (null !== $this->ipPrefixId) {
            $res['IpPrefixId'] = $this->ipPrefixId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->vSwitchCidrReservationId) {
            $res['VSwitchCidrReservationId'] = $this->vSwitchCidrReservationId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cidrReservationUsages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpPrefixCidr'])) {
            $model->ipPrefixCidr = $map['IpPrefixCidr'];
        }
        if (isset($map['IpPrefixId'])) {
            $model->ipPrefixId = $map['IpPrefixId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['VSwitchCidrReservationId'])) {
            $model->vSwitchCidrReservationId = $map['VSwitchCidrReservationId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
