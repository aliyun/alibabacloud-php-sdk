<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacesResponseBody\networkInterfaceSets\networkInterfaceSet;

class networkInterfaceSets extends Model
{
    /**
     * @var networkInterfaceSet[]
     */
    public $networkInterfaceSet;
    protected $_name = [
        'networkInterfaceSet' => 'NetworkInterfaceSet',
    ];

    public function validate()
    {
        if (\is_array($this->networkInterfaceSet)) {
            Model::validateArray($this->networkInterfaceSet);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkInterfaceSet) {
            if (\is_array($this->networkInterfaceSet)) {
                $res['NetworkInterfaceSet'] = [];
                $n1                         = 0;
                foreach ($this->networkInterfaceSet as $item1) {
                    $res['NetworkInterfaceSet'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NetworkInterfaceSet'])) {
            if (!empty($map['NetworkInterfaceSet'])) {
                $model->networkInterfaceSet = [];
                $n1                         = 0;
                foreach ($map['NetworkInterfaceSet'] as $item1) {
                    $model->networkInterfaceSet[$n1++] = networkInterfaceSet::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
