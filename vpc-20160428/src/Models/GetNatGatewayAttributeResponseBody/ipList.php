<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\GetNatGatewayAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class ipList extends Model
{
    /**
     * @var string
     */
    public $usingStatus;

    /**
     * @var string
     */
    public $ipAddress;

    /**
     * @var string
     */
    public $allocationId;
    protected $_name = [
        'usingStatus'  => 'UsingStatus',
        'ipAddress'    => 'IpAddress',
        'allocationId' => 'AllocationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->usingStatus) {
            $res['UsingStatus'] = $this->usingStatus;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->allocationId) {
            $res['AllocationId'] = $this->allocationId;
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
        if (isset($map['UsingStatus'])) {
            $model->usingStatus = $map['UsingStatus'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['AllocationId'])) {
            $model->allocationId = $map['AllocationId'];
        }

        return $model;
    }
}
