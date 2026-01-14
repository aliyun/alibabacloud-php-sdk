<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\UpdateCustomRoutingEndpointsRequest\endpointConfigurations;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateCustomRoutingEndpointsRequest\endpointConfigurations\policyConfigurations\portRanges;

class policyConfigurations extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var portRanges[]
     */
    public $portRanges;
    protected $_name = [
        'address' => 'Address',
        'portRanges' => 'PortRanges',
    ];

    public function validate()
    {
        if (\is_array($this->portRanges)) {
            Model::validateArray($this->portRanges);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }

        if (null !== $this->portRanges) {
            if (\is_array($this->portRanges)) {
                $res['PortRanges'] = [];
                $n1 = 0;
                foreach ($this->portRanges as $item1) {
                    $res['PortRanges'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }

        if (isset($map['PortRanges'])) {
            if (!empty($map['PortRanges'])) {
                $model->portRanges = [];
                $n1 = 0;
                foreach ($map['PortRanges'] as $item1) {
                    $model->portRanges[$n1] = portRanges::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
