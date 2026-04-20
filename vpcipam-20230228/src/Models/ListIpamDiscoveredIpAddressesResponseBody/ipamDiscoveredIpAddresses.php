<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamDiscoveredIpAddressesResponseBody;

use AlibabaCloud\Dara\Model;

class ipamDiscoveredIpAddresses extends Model
{
    /**
     * @var string
     */
    public $ipAddress;

    /**
     * @var string
     */
    public $ipVersion;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceRegionId;

    /**
     * @var string
     */
    public $resourceServiceType;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'ipAddress' => 'IpAddress',
        'ipVersion' => 'IpVersion',
        'resourceId' => 'ResourceId',
        'resourceRegionId' => 'ResourceRegionId',
        'resourceServiceType' => 'ResourceServiceType',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }

        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceRegionId) {
            $res['ResourceRegionId'] = $this->resourceRegionId;
        }

        if (null !== $this->resourceServiceType) {
            $res['ResourceServiceType'] = $this->resourceServiceType;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }

        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ResourceRegionId'])) {
            $model->resourceRegionId = $map['ResourceRegionId'];
        }

        if (isset($map['ResourceServiceType'])) {
            $model->resourceServiceType = $map['ResourceServiceType'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
