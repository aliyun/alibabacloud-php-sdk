<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudphone\V20201230\Models\ListInstancesResponseBody\instances\instance;

use AlibabaCloud\Tea\Model;

class eipAddress extends Model
{
    /**
     * @description The ID of the EIP that is used by the instance.
     *
     * @example eip-bp1vctqgcoi6i9nxxxxxx
     *
     * @var string
     */
    public $allocationId;

    /**
     * @description The bandwidth of the EIP.
     *
     * @example 2
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The billing method of the EIP.
     *
     * @example PayByTraffic
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The EIP.
     *
     * @example 120.55.XX.XX
     *
     * @var string
     */
    public $ipAddress;
    protected $_name = [
        'allocationId'       => 'AllocationId',
        'bandwidth'          => 'Bandwidth',
        'internetChargeType' => 'InternetChargeType',
        'ipAddress'          => 'IpAddress',
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
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
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
        if (isset($map['AllocationId'])) {
            $model->allocationId = $map['AllocationId'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }

        return $model;
    }
}
