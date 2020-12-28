<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances;

use AlibabaCloud\Tea\Model;

class eipAddress extends Model
{
    /**
     * @var string
     */
    public $ipAddress;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $allocationId;

    /**
     * @var bool
     */
    public $isSupportUnassociate;

    /**
     * @var string
     */
    public $internetChargeType;
    protected $_name = [
        'ipAddress'            => 'IpAddress',
        'bandwidth'            => 'Bandwidth',
        'allocationId'         => 'AllocationId',
        'isSupportUnassociate' => 'IsSupportUnassociate',
        'internetChargeType'   => 'InternetChargeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->allocationId) {
            $res['AllocationId'] = $this->allocationId;
        }
        if (null !== $this->isSupportUnassociate) {
            $res['IsSupportUnassociate'] = $this->isSupportUnassociate;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eipAddress
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['AllocationId'])) {
            $model->allocationId = $map['AllocationId'];
        }
        if (isset($map['IsSupportUnassociate'])) {
            $model->isSupportUnassociate = $map['IsSupportUnassociate'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }

        return $model;
    }
}
