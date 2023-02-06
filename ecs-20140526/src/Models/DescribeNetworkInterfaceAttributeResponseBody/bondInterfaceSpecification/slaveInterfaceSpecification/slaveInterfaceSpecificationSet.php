<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody\bondInterfaceSpecification\slaveInterfaceSpecification;

use AlibabaCloud\Tea\Model;

class slaveInterfaceSpecificationSet extends Model
{
    /**
     * @description > This parameter is in invitational preview and unavailable to general users.
     *
     * @example null
     *
     * @var string
     */
    public $bondNetworkInterfaceId;

    /**
     * @description > This parameter is in invitational preview and unavailable to general users.
     *
     * @example null
     *
     * @var string
     */
    public $slaveNetworkInterfaceId;

    /**
     * @description > This parameter is in invitational preview and unavailable to general users.
     *
     * @example null
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return slaveInterfaceSpecificationSet
     */
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
