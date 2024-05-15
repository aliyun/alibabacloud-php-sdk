<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class ModifyNatFirewallControlPolicyPositionRequest extends Model
{
    /**
     * @description The UUID of the access control policy.
     *
     * This parameter is required.
     * @example 66961eea-e659-4225-84c9-9b6da76ec401
     *
     * @var string
     */
    public $aclUuid;

    /**
     * @description The direction of the traffic to which the access control policy applies.
     *
     *   Set the value to **out**.
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
     * This parameter is required.
     * @example ngw-xxxxxx
     *
     * @var string
     */
    public $natGatewayId;

    /**
     * @description The new priority of the IPv4 access control policy. You must specify a numeric value for this parameter. The value 1 indicates the highest priority. A larger value indicates a lower priority.
     *
     * This parameter is required.
     * @example 5
     *
     * @var int
     */
    public $newOrder;
    protected $_name = [
        'aclUuid'      => 'AclUuid',
        'direction'    => 'Direction',
        'lang'         => 'Lang',
        'natGatewayId' => 'NatGatewayId',
        'newOrder'     => 'NewOrder',
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
        if (null !== $this->newOrder) {
            $res['NewOrder'] = $this->newOrder;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyNatFirewallControlPolicyPositionRequest
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
        if (isset($map['NewOrder'])) {
            $model->newOrder = $map['NewOrder'];
        }

        return $model;
    }
}
