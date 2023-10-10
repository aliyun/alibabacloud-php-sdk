<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ListSlbRequest extends Model
{
    /**
     * @description The type of the IP addresses. Valid values:
     *
     *   Internet: Users can connect to the SLB instance over the Internet.
     *   Intranet: Users can connect to the SLB instance over the internal network.
     *
     * @example internet
     *
     * @var string
     */
    public $addressType;

    /**
     * @description The type of the SLB instance. Valid values:
     *
     *   clb: Classic Load Balancer (CLB)
     *   alb: Application Load Balancer (ALB)
     *
     * @example clb
     *
     * @var string
     */
    public $slbType;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * @example vpc-bp1f90rfybszjogyw****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'addressType' => 'AddressType',
        'slbType'     => 'SlbType',
        'vpcId'       => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressType) {
            $res['AddressType'] = $this->addressType;
        }
        if (null !== $this->slbType) {
            $res['SlbType'] = $this->slbType;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSlbRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressType'])) {
            $model->addressType = $map['AddressType'];
        }
        if (isset($map['SlbType'])) {
            $model->slbType = $map['SlbType'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
