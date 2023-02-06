<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody\privateIpSets\privateIpSet;

use AlibabaCloud\Tea\Model;

class associatedPublicIp extends Model
{
    /**
     * @description > This parameter is in invitational preview and unavailable to general users.
     *
     * @example null
     *
     * @var string
     */
    public $allocationId;

    /**
     * @description The EIP of the ENI.
     *
     * @example 116.62.**.**
     *
     * @var string
     */
    public $publicIpAddress;
    protected $_name = [
        'allocationId'    => 'AllocationId',
        'publicIpAddress' => 'PublicIpAddress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocationId) {
            $res['AllocationId'] = $this->allocationId;
        }
        if (null !== $this->publicIpAddress) {
            $res['PublicIpAddress'] = $this->publicIpAddress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return associatedPublicIp
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocationId'])) {
            $model->allocationId = $map['AllocationId'];
        }
        if (isset($map['PublicIpAddress'])) {
            $model->publicIpAddress = $map['PublicIpAddress'];
        }

        return $model;
    }
}
