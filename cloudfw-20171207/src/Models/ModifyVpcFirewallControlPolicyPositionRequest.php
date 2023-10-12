<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class ModifyVpcFirewallControlPolicyPositionRequest extends Model
{
    /**
     * @description The UUID of the access control policy.
     *
     * If you want to modify the configurations of an access control policy, you must provide the UUID of the policy. You can call the [DescribeVpcFirewallControlPolicy](~~159758~~) operation to query the UUID.
     * @example 2746d9ff-5d7c-449d-a2a9-ccaa15fe****
     *
     * @var string
     */
    public $aclUuid;

    /**
     * @description The language of the content within the request and the response.
     *
     * Valid values:
     *
     *   **zh**: Chinese (default)
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The new priority of the access control policy.
     *
     * @example 1
     *
     * @var string
     */
    public $newOrder;

    /**
     * @description The original priority of the access control policy.
     *
     * > This parameter is not recommended. We recommend that you use the AclUuid parameter to specify the policy that you want to modify.
     * @example 5
     *
     * @var string
     */
    public $oldOrder;

    /**
     * @description The ID of the group to which the access control policy belongs. You can call the [DescribeVpcFirewallAclGroupList](~~159760~~) operation to query the ID.
     *
     * Valid values:
     *
     *   If the VPC firewall is used to protect a CEN instance, the value of this parameter must be the ID of the CEN instance.
     *
     * Example: cen-ervw0g12b5jbw\*\*\*\*
     *
     *   If the VPC firewall is used to protect an Express Connect circuit, the value of this parameter must be the instance ID of the VPC firewall.
     *
     * Example: vfw-a42bbb7b887148c9\*\*\*\*
     * @example vfw-a42bbb7b887148c9****
     *
     * @var string
     */
    public $vpcFirewallId;
    protected $_name = [
        'aclUuid'       => 'AclUuid',
        'lang'          => 'Lang',
        'newOrder'      => 'NewOrder',
        'oldOrder'      => 'OldOrder',
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
        if (null !== $this->newOrder) {
            $res['NewOrder'] = $this->newOrder;
        }
        if (null !== $this->oldOrder) {
            $res['OldOrder'] = $this->oldOrder;
        }
        if (null !== $this->vpcFirewallId) {
            $res['VpcFirewallId'] = $this->vpcFirewallId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyVpcFirewallControlPolicyPositionRequest
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
        if (isset($map['NewOrder'])) {
            $model->newOrder = $map['NewOrder'];
        }
        if (isset($map['OldOrder'])) {
            $model->oldOrder = $map['OldOrder'];
        }
        if (isset($map['VpcFirewallId'])) {
            $model->vpcFirewallId = $map['VpcFirewallId'];
        }

        return $model;
    }
}
