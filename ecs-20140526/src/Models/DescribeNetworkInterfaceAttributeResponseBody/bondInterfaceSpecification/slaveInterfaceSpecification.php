<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody\bondInterfaceSpecification;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody\bondInterfaceSpecification\slaveInterfaceSpecification\slaveInterfaceSpecificationSet;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->slaveInterfaceSpecificationSet) {
            $res['SlaveInterfaceSpecificationSet'] = [];
            if (null !== $this->slaveInterfaceSpecificationSet && \is_array($this->slaveInterfaceSpecificationSet)) {
                $n = 0;
                foreach ($this->slaveInterfaceSpecificationSet as $item) {
                    $res['SlaveInterfaceSpecificationSet'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slaveInterfaceSpecification
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SlaveInterfaceSpecificationSet'])) {
            if (!empty($map['SlaveInterfaceSpecificationSet'])) {
                $model->slaveInterfaceSpecificationSet = [];
                $n                                     = 0;
                foreach ($map['SlaveInterfaceSpecificationSet'] as $item) {
                    $model->slaveInterfaceSpecificationSet[$n++] = null !== $item ? slaveInterfaceSpecificationSet::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
