<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DeleteVpcFirewallControlPolicyRequest extends Model
{
    /**
     * @description The ID of the access control policy.
     *
     * To delete an access control policy, you must provide the ID of the policy. You can call the **DescribeVpcFirewallControlPolicy** operation to query the ID.
     * @example 00281255-d220-4db1-8f4f-c4df2214****
     *
     * @var string
     */
    public $aclUuid;

    /**
     * @description The natural language of the request and response. Valid values:
     *
     * - **zh**: Chinese
     * - **en**: English
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The ID of the group to which the access control policy belongs. You can call the **DescribeVpcFirewallAclGroupList** operation to query the ID.
     *
     * - If the VPC firewall is used to protect a CEN instance, the value of this parameter is the ID of the CEN instance.
     *
     * Example: cen-ervw0g12b5jbw****
     * - If the VPC firewall is used to protect an Express Connect circuit, the value of this parameter is the ID of the VPC firewall.
     *
     * Example: vfw-a42bbb7b887148c9****
     * @example vfw-a42bbb7b887148c91****
     *
     * @var string
     */
    public $vpcFirewallId;
    protected $_name = [
        'aclUuid'       => 'AclUuid',
        'lang'          => 'Lang',
        'vpcFirewallId' => 'VpcFirewallId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclUuid) {
            $res['AclUuid'] = $this->aclUuid;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->vpcFirewallId) {
            $res['VpcFirewallId'] = $this->vpcFirewallId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteVpcFirewallControlPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclUuid'])) {
            $model->aclUuid = $map['AclUuid'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['VpcFirewallId'])) {
            $model->vpcFirewallId = $map['VpcFirewallId'];
        }

        return $model;
    }
}
