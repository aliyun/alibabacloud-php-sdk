<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models;

use AlibabaCloud\Dara\Model;

class UpdateIpamPoolAllocationRequest extends Model
{
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
    public $ipamPoolAllocationId;
    /**
     * @var string
     */
    public $ipamPoolAllocationName;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clientToken'                   => 'ClientToken',
        'dryRun'                        => 'DryRun',
        'ipamPoolAllocationDescription' => 'IpamPoolAllocationDescription',
        'ipamPoolAllocationId'          => 'IpamPoolAllocationId',
        'ipamPoolAllocationName'        => 'IpamPoolAllocationName',
        'regionId'                      => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->ipamPoolAllocationDescription) {
            $res['IpamPoolAllocationDescription'] = $this->ipamPoolAllocationDescription;
        }

        if (null !== $this->ipamPoolAllocationId) {
            $res['IpamPoolAllocationId'] = $this->ipamPoolAllocationId;
        }

        if (null !== $this->ipamPoolAllocationName) {
            $res['IpamPoolAllocationName'] = $this->ipamPoolAllocationName;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['IpamPoolAllocationDescription'])) {
            $model->ipamPoolAllocationDescription = $map['IpamPoolAllocationDescription'];
        }

        if (isset($map['IpamPoolAllocationId'])) {
            $model->ipamPoolAllocationId = $map['IpamPoolAllocationId'];
        }

        if (isset($map['IpamPoolAllocationName'])) {
            $model->ipamPoolAllocationName = $map['IpamPoolAllocationName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
