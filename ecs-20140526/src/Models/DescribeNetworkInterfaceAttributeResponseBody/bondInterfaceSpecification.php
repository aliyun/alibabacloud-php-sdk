<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody\bondInterfaceSpecification\slaveInterfaceSpecification;

class bondInterfaceSpecification extends Model
{
    /**
     * @var string
     */
    public $bondMode;

    /**
     * @var slaveInterfaceSpecification
     */
    public $slaveInterfaceSpecification;
    protected $_name = [
        'bondMode' => 'BondMode',
        'slaveInterfaceSpecification' => 'SlaveInterfaceSpecification',
    ];

    public function validate()
    {
        if (null !== $this->slaveInterfaceSpecification) {
            $this->slaveInterfaceSpecification->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bondMode) {
            $res['BondMode'] = $this->bondMode;
        }

        if (null !== $this->slaveInterfaceSpecification) {
            $res['SlaveInterfaceSpecification'] = null !== $this->slaveInterfaceSpecification ? $this->slaveInterfaceSpecification->toArray($noStream) : $this->slaveInterfaceSpecification;
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
        if (isset($map['BondMode'])) {
            $model->bondMode = $map['BondMode'];
        }

        if (isset($map['SlaveInterfaceSpecification'])) {
            $model->slaveInterfaceSpecification = slaveInterfaceSpecification::fromMap($map['SlaveInterfaceSpecification']);
        }

        return $model;
    }
}
