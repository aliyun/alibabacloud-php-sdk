<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class CreateAclPolicyShrinkRequest extends Model
{
    /**
     * @description The whitelisted IP CIDR blocks in the VPC that can access the private gateway.
     *
     * @var string
     */
    public $aclPolicyListShrink;

    /**
     * @description The ID of the virtual private cloud (VPC). For more information about how to obtain the VPC ID, see DescribeVpcs.
     *
     * @example vpc-uf66uio7md****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'aclPolicyListShrink' => 'AclPolicyList',
        'vpcId'               => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclPolicyListShrink) {
            $res['AclPolicyList'] = $this->aclPolicyListShrink;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAclPolicyShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclPolicyList'])) {
            $model->aclPolicyListShrink = $map['AclPolicyList'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
