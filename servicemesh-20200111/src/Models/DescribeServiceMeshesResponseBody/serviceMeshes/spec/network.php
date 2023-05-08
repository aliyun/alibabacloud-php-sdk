<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshesResponseBody\serviceMeshes\spec;

use AlibabaCloud\Tea\Model;

class network extends Model
{
    /**
     * @description The ID of the security group.
     *
     * @example sg-2ze384sxttxbctnj****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The IDs of vSwitches.
     *
     * @var string[]
     */
    public $vSwitches;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * @example vpc-2zew0rajjkmxy2369****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'securityGroupId' => 'SecurityGroupId',
        'vSwitches'       => 'VSwitches',
        'vpcId'           => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->vSwitches) {
            $res['VSwitches'] = $this->vSwitches;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return network
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['VSwitches'])) {
            if (!empty($map['VSwitches'])) {
                $model->vSwitches = $map['VSwitches'];
            }
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
