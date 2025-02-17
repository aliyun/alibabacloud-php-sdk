<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody\bondInterfaceSpecification\slaveInterfaceSpecification;

use AlibabaCloud\Dara\Model;

class slaveInterfaceSpecificationSet extends Model
{
    /**
     * @var string
     */
    public $bondNetworkInterfaceId;
    /**
     * @var string
     */
    public $slaveNetworkInterfaceId;
    /**
     * @var string
     */
    public $workState;
    protected $_name = [
        'bondNetworkInterfaceId'  => 'BondNetworkInterfaceId',
        'slaveNetworkInterfaceId' => 'SlaveNetworkInterfaceId',
        'workState'               => 'WorkState',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bondNetworkInterfaceId) {
            $res['BondNetworkInterfaceId'] = $this->bondNetworkInterfaceId;
        }

        if (null !== $this->slaveNetworkInterfaceId) {
            $res['SlaveNetworkInterfaceId'] = $this->slaveNetworkInterfaceId;
        }

        if (null !== $this->workState) {
            $res['WorkState'] = $this->workState;
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
        if (isset($map['BondNetworkInterfaceId'])) {
            $model->bondNetworkInterfaceId = $map['BondNetworkInterfaceId'];
        }

        if (isset($map['SlaveNetworkInterfaceId'])) {
            $model->slaveNetworkInterfaceId = $map['SlaveNetworkInterfaceId'];
        }

        if (isset($map['WorkState'])) {
            $model->workState = $map['WorkState'];
        }

        return $model;
    }
}
