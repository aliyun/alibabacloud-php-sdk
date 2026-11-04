<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeCloudConnectNetworksResponseBody\cloudConnectNetworks\cloudConnectNetwork\vpcNetworkConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeCloudConnectNetworksResponseBody\cloudConnectNetworks\cloudConnectNetwork\vpcNetworkConfig\regionBindingList\regionBinding;

class regionBindingList extends Model
{
    /**
     * @var regionBinding[]
     */
    public $regionBinding;
    protected $_name = [
        'regionBinding' => 'RegionBinding',
    ];

    public function validate()
    {
        if (\is_array($this->regionBinding)) {
            Model::validateArray($this->regionBinding);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionBinding) {
            if (\is_array($this->regionBinding)) {
                $res['RegionBinding'] = [];
                $n1 = 0;
                foreach ($this->regionBinding as $item1) {
                    $res['RegionBinding'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RegionBinding'])) {
            if (!empty($map['RegionBinding'])) {
                $model->regionBinding = [];
                $n1 = 0;
                foreach ($map['RegionBinding'] as $item1) {
                    $model->regionBinding[$n1] = regionBinding::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
