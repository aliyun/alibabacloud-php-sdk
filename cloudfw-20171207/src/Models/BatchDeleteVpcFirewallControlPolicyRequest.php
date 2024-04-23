<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class BatchDeleteVpcFirewallControlPolicyRequest extends Model
{
    /**
     * @description The UUIDs of access control policies.
     *
     * @var string[]
     */
    public $aclUuidList;

    /**
     * @description The instance ID of the VPC firewall.
     *
     * @example vfw-m5e7dbc4y****
     *
     * @var string
     */
    public $vpcFirewallId;
    protected $_name = [
        'aclUuidList'   => 'AclUuidList',
        'vpcFirewallId' => 'VpcFirewallId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclUuidList) {
            $res['AclUuidList'] = $this->aclUuidList;
        }
        if (null !== $this->vpcFirewallId) {
            $res['VpcFirewallId'] = $this->vpcFirewallId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchDeleteVpcFirewallControlPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclUuidList'])) {
            if (!empty($map['AclUuidList'])) {
                $model->aclUuidList = $map['AclUuidList'];
            }
        }
        if (isset($map['VpcFirewallId'])) {
            $model->vpcFirewallId = $map['VpcFirewallId'];
        }

        return $model;
    }
}
