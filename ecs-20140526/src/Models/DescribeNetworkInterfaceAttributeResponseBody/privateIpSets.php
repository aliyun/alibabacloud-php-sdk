<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody\privateIpSets\privateIpSet;

class privateIpSets extends Model
{
    /**
     * @var privateIpSet[]
     */
    public $privateIpSet;
    protected $_name = [
        'privateIpSet' => 'PrivateIpSet',
    ];

    public function validate()
    {
        if (\is_array($this->privateIpSet)) {
            Model::validateArray($this->privateIpSet);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->privateIpSet) {
            if (\is_array($this->privateIpSet)) {
                $res['PrivateIpSet'] = [];
                $n1 = 0;
                foreach ($this->privateIpSet as $item1) {
                    $res['PrivateIpSet'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PrivateIpSet'])) {
            if (!empty($map['PrivateIpSet'])) {
                $model->privateIpSet = [];
                $n1 = 0;
                foreach ($map['PrivateIpSet'] as $item1) {
                    $model->privateIpSet[$n1++] = privateIpSet::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
