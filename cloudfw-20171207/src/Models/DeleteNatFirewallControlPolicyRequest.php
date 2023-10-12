<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DeleteNatFirewallControlPolicyRequest extends Model
{
    /**
     * @description The UUID of the access control policy.
     *
     * To delete an access control policy, you must provide the ID of the policy. You can call the DescribeNatFirewallControlPolicy operation to query the UUIDs of access control policies.
     * @example b6c8f905-2eb6-442a-ba35-9416e9dbb2c5
     *
     * @var string
     */
    public $aclUuid;

    /**
     * @description The direction of the traffic to which the access control policy applies.
     *
     * Valid values:
     *
     *   **out**: outbound traffic
     *
     * @example out
     *
     * @var string
     */
    public $direction;

    /**
     * @description The language of the content within the response. Valid values:
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
     * @description The ID of the NAT gateway.
     *
     * @example ngw-xxxxxx
     *
     * @var string
     */
    public $natGatewayId;
    protected $_name = [
        'aclUuid'      => 'AclUuid',
        'direction'    => 'Direction',
        'lang'         => 'Lang',
        'natGatewayId' => 'NatGatewayId',
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
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteNatFirewallControlPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclUuid'])) {
            $model->aclUuid = $map['AclUuid'];
        }
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }

        return $model;
    }
}
