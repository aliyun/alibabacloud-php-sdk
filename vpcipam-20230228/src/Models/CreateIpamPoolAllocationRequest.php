<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models;

use AlibabaCloud\Dara\Model;

class CreateIpamPoolAllocationRequest extends Model
{
    /**
     * @var string
     */
    public $cidr;
    /**
     * @var int
     */
    public $cidrMask;
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var bool
     */
    public $dryRun;
    /**
     * @var string
     */
    public $ipamPoolAllocationDescription;
    /**
     * @var string
     */
    public $ipamPoolAllocationName;
    /**
     * @var string
     */
    public $ipamPoolId;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'cidr'                          => 'Cidr',
        'cidrMask'                      => 'CidrMask',
        'clientToken'                   => 'ClientToken',
        'dryRun'                        => 'DryRun',
        'ipamPoolAllocationDescription' => 'IpamPoolAllocationDescription',
        'ipamPoolAllocationName'        => 'IpamPoolAllocationName',
        'ipamPoolId'                    => 'IpamPoolId',
        'regionId'                      => 'RegionId',
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

        if (null !== $this->cidrMask) {
            $res['CidrMask'] = $this->cidrMask;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->ipamPoolAllocationDescription) {
            $res['IpamPoolAllocationDescription'] = $this->ipamPoolAllocationDescription;
        }

        if (null !== $this->ipamPoolAllocationName) {
            $res['IpamPoolAllocationName'] = $this->ipamPoolAllocationName;
        }

        if (null !== $this->ipamPoolId) {
            $res['IpamPoolId'] = $this->ipamPoolId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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

        if (isset($map['CidrMask'])) {
            $model->cidrMask = $map['CidrMask'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['IpamPoolAllocationDescription'])) {
            $model->ipamPoolAllocationDescription = $map['IpamPoolAllocationDescription'];
        }

        if (isset($map['IpamPoolAllocationName'])) {
            $model->ipamPoolAllocationName = $map['IpamPoolAllocationName'];
        }

        if (isset($map['IpamPoolId'])) {
            $model->ipamPoolId = $map['IpamPoolId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
