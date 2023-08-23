<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class ModifyNatFirewallControlPolicyPositionRequest extends Model
{
    /**
     * @example 66961eea-e659-4225-84c9-9b6da76ec401
     *
     * @var string
     */
    public $aclUuid;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example ngw-xxxxxx
     *
     * @var string
     */
    public $natGatewayId;

    /**
     * @example 5
     *
     * @var int
     */
    public $newOrder;
    protected $_name = [
        'aclUuid'      => 'AclUuid',
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
