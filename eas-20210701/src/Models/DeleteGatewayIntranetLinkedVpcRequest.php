<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class DeleteGatewayIntranetLinkedVpcRequest extends Model
{
    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-8vbqn2at0kljjxxxx****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The virtual private cloud (VPC) ID.
     *
     * @example vpc-uf66uio7md****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteGatewayIntranetLinkedVpcRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
