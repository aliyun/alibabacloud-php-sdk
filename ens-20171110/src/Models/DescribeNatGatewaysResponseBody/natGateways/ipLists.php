<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNatGatewaysResponseBody\natGateways;

use AlibabaCloud\Dara\Model;

class ipLists extends Model
{
    /**
     * @var string
     */
    public $allocationId;

    /**
     * @var string
     */
    public $ipAddress;

    /**
     * @var string
     */
    public $usingStatus;
    protected $_name = [
        'allocationId' => 'AllocationId',
        'ipAddress' => 'IpAddress',
        'usingStatus' => 'UsingStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
