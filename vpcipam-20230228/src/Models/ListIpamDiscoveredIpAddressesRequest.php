<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models;

use AlibabaCloud\Dara\Model;

class ListIpamDiscoveredIpAddressesRequest extends Model
{
    /**
     * @var string
     */
    public $cidr;

    /**
     * @var string
     */
    public $ipVersion;

    /**
     * @var string
     */
    public $ipamResourceDiscoveryId;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'cidr' => 'Cidr',
        'ipVersion' => 'IpVersion',
        'ipamResourceDiscoveryId' => 'IpamResourceDiscoveryId',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'regionId' => 'RegionId',
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
        if (null !== $this->cidr) {
            $res['Cidr'] = $this->cidr;
        }

        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }

        if (null !== $this->ipamResourceDiscoveryId) {
            $res['IpamResourceDiscoveryId'] = $this->ipamResourceDiscoveryId;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['Cidr'])) {
            $model->cidr = $map['Cidr'];
        }

        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }

        if (isset($map['IpamResourceDiscoveryId'])) {
            $model->ipamResourceDiscoveryId = $map['IpamResourceDiscoveryId'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
