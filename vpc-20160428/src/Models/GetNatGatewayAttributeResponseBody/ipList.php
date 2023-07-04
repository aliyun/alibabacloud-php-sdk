<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\GetNatGatewayAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class ipList extends Model
{
    /**
     * @description The ID of the EIP.
     *
     * @example eip-bp13e9i2qst4g6jzi****
     *
     * @var string
     */
    public $allocationId;

    /**
     * @description The IP address of the EIP.
     *
     * @example 116.33.XX.XX
     *
     * @var string
     */
    public $ipAddress;

    /**
     * @description The association status of the EIP.
     *
     *   **idle**: The EIP is not specified in an SNAT entry or a DNAT entry.
     *   **UsedBySnatTable**: The EIP is specified in an SNAT entry.
     *   **UsedByForwardTable**: The EIP is specified in a DNAT entry.
     *
     * @example idle
     *
     * @var string
     */
    public $usingStatus;
    protected $_name = [
        'allocationId' => 'AllocationId',
        'ipAddress'    => 'IpAddress',
        'usingStatus'  => 'UsingStatus',
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
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->usingStatus) {
            $res['UsingStatus'] = $this->usingStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocationId'])) {
            $model->allocationId = $map['AllocationId'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['UsingStatus'])) {
            $model->usingStatus = $map['UsingStatus'];
        }

        return $model;
    }
}
