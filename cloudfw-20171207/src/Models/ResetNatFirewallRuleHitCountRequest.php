<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class ResetNatFirewallRuleHitCountRequest extends Model
{
    /**
     * @example 3de3aed5-6de7-4ecd-9106-cfe994b9c49f
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
     * @example ngw-zm0h3c1exm5bifuorg8c5
     *
     * @var string
     */
    public $natGatewayId;
    protected $_name = [
        'aclUuid'      => 'AclUuid',
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
     * @return ResetNatFirewallRuleHitCountRequest
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

        return $model;
    }
}
