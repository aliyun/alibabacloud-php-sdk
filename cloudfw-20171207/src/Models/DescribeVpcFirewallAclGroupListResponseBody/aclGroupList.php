<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallAclGroupListResponseBody;

use AlibabaCloud\Tea\Model;

class aclGroupList extends Model
{
    /**
     * @description The ID of the policy group.
     *
     * Valid values:
     *
     *   If the VPC firewall is used to protect a Cloud Enterprise Network (CEN) instance, the value of this parameter is the ID of the CEN instance.
     *
     * Example: cen-ervw0g12b5jbw\*\*\*\*
     *
     *   If the VPC firewall is used to protect an Express Connect circuit, the value of this parameter is the ID of the VPC firewall instance.
     *
     * Example: vfw-a42bbb7b887148c9\*\*\*\*
     * @example vfw-a42bbb7b887148c9****
     *
     * @var string
     */
    public $aclGroupId;

    /**
     * @description The name of the policy group. Valid values:
     *
     *   If the VPC firewall is used to protect a CEN instance, the value of this parameter is the name of the CEN instance.
     *   If the VPC firewall is used to protect an Express Connect circuit, the value of this parameter is the name of the VPC firewall instance.
     *
     * @example group_test
     *
     * @var string
     */
    public $aclGroupName;

    /**
     * @var int
     */
    public $aclRuleCount;

    /**
     * @var bool
     */
    public $isDefault;

    /**
     * @description The UID of the member that is managed by your Alibaba Cloud account.
     *
     * @example 258039427902****
     *
     * @var string
     */
    public $memberUid;
    protected $_name = [
        'aclGroupId'   => 'AclGroupId',
        'aclGroupName' => 'AclGroupName',
        'aclRuleCount' => 'AclRuleCount',
        'isDefault'    => 'IsDefault',
        'memberUid'    => 'MemberUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclGroupId) {
            $res['AclGroupId'] = $this->aclGroupId;
        }
        if (null !== $this->aclGroupName) {
            $res['AclGroupName'] = $this->aclGroupName;
        }
        if (null !== $this->aclRuleCount) {
            $res['AclRuleCount'] = $this->aclRuleCount;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aclGroupList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclGroupId'])) {
            $model->aclGroupId = $map['AclGroupId'];
        }
        if (isset($map['AclGroupName'])) {
            $model->aclGroupName = $map['AclGroupName'];
        }
        if (isset($map['AclRuleCount'])) {
            $model->aclRuleCount = $map['AclRuleCount'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }

        return $model;
    }
}
