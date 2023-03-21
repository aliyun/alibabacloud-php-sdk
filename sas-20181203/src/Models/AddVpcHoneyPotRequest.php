<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class AddVpcHoneyPotRequest extends Model
{
    /**
     * @description The ID of the virtual private cloud (VPC) in which you want to create a honeypot.
     *
     * > You can call the [DescribeVpcList](~~DescribeVpcList~~) operation to obtain the VPC ID. The VPC ID is the value of the InstanceId parameter.
     * @example vpc-p0w5fgkfsl5a6791q****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddVpcHoneyPotRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
