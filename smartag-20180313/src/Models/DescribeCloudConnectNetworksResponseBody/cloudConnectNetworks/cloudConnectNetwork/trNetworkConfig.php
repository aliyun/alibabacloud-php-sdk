<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeCloudConnectNetworksResponseBody\cloudConnectNetworks\cloudConnectNetwork;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeCloudConnectNetworksResponseBody\cloudConnectNetworks\cloudConnectNetwork\trNetworkConfig\regionBindingList;

class trNetworkConfig extends Model
{
    /**
     * @var string
     */
    public $cidrAllocationMode;

    /**
     * @var regionBindingList
     */
    public $regionBindingList;

    /**
     * @var string
     */
    public $subnet;
    protected $_name = [
        'cidrAllocationMode' => 'CidrAllocationMode',
        'regionBindingList' => 'RegionBindingList',
        'subnet' => 'Subnet',
    ];

    public function validate()
    {
        if (null !== $this->regionBindingList) {
            $this->regionBindingList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cidrAllocationMode) {
            $res['CidrAllocationMode'] = $this->cidrAllocationMode;
        }

        if (null !== $this->regionBindingList) {
            $res['RegionBindingList'] = null !== $this->regionBindingList ? $this->regionBindingList->toArray($noStream) : $this->regionBindingList;
        }

        if (null !== $this->subnet) {
            $res['Subnet'] = $this->subnet;
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
        if (isset($map['CidrAllocationMode'])) {
            $model->cidrAllocationMode = $map['CidrAllocationMode'];
        }

        if (isset($map['RegionBindingList'])) {
            $model->regionBindingList = regionBindingList::fromMap($map['RegionBindingList']);
        }

        if (isset($map['Subnet'])) {
            $model->subnet = $map['Subnet'];
        }

        return $model;
    }
}
