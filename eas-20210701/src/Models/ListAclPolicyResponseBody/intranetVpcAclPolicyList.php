<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\ListAclPolicyResponseBody;

use AlibabaCloud\SDK\Eas\V20210701\Models\ListAclPolicyResponseBody\intranetVpcAclPolicyList\aclPolicyList;
use AlibabaCloud\Tea\Model;

class intranetVpcAclPolicyList extends Model
{
    /**
     * @description The whitelisted IP CIDR blocks in the VPC that can access the private gateway over the internal network.
     *
     * @var aclPolicyList[]
     */
    public $aclPolicyList;

    /**
     * @description The VPC ID. For more information about how to obtain the VPC ID, see DescribeVpcs.
     *
     * @example vpc-uf66uio7md****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'aclPolicyList' => 'AclPolicyList',
        'vpcId'         => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclPolicyList) {
            $res['AclPolicyList'] = [];
            if (null !== $this->aclPolicyList && \is_array($this->aclPolicyList)) {
                $n = 0;
                foreach ($this->aclPolicyList as $item) {
                    $res['AclPolicyList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return intranetVpcAclPolicyList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclPolicyList'])) {
            if (!empty($map['AclPolicyList'])) {
                $model->aclPolicyList = [];
                $n                    = 0;
                foreach ($map['AclPolicyList'] as $item) {
                    $model->aclPolicyList[$n++] = null !== $item ? aclPolicyList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
