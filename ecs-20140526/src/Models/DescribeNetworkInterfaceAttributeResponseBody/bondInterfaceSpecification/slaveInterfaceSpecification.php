<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody\bondInterfaceSpecification;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody\bondInterfaceSpecification\slaveInterfaceSpecification\slaveInterfaceSpecificationSet;

class slaveInterfaceSpecification extends Model
{
    /**
     * @var slaveInterfaceSpecificationSet[]
     */
    public $slaveInterfaceSpecificationSet;
    protected $_name = [
        'slaveInterfaceSpecificationSet' => 'SlaveInterfaceSpecificationSet',
    ];

    public function validate()
    {
        if (\is_array($this->slaveInterfaceSpecificationSet)) {
            Model::validateArray($this->slaveInterfaceSpecificationSet);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->slaveInterfaceSpecificationSet) {
            if (\is_array($this->slaveInterfaceSpecificationSet)) {
                $res['SlaveInterfaceSpecificationSet'] = [];
                $n1                                    = 0;
                foreach ($this->slaveInterfaceSpecificationSet as $item1) {
                    $res['SlaveInterfaceSpecificationSet'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SlaveInterfaceSpecificationSet'])) {
            if (!empty($map['SlaveInterfaceSpecificationSet'])) {
                $model->slaveInterfaceSpecificationSet = [];
                $n1                                    = 0;
                foreach ($map['SlaveInterfaceSpecificationSet'] as $item1) {
                    $model->slaveInterfaceSpecificationSet[$n1++] = slaveInterfaceSpecificationSet::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
