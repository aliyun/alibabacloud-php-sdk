<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\GetVSwitchCidrReservationUsageResponseBody;

use AlibabaCloud\Dara\Model;

class cidrReservationUsages extends Model
{
    /**
     * @var string
     */
    public $ipPrefixCidr;
    /**
     * @var string
     */
    public $ipPrefixId;
    /**
     * @var string
     */
    public $resourceId;
    /**
     * @var string
     */
    public $resourceType;
    /**
     * @var string
     */
    public $vSwitchCidrReservationId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
