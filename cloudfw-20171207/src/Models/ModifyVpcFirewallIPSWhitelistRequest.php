<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class ModifyVpcFirewallIPSWhitelistRequest extends Model
{
    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example 1
     *
     * @var int
     */
    public $listType;

    /**
     * @example 10.130.0.0/20,10.130.17.11/32
     *
     * @var string
     */
    public $listValue;

    /**
     * @example 1415189284827022
     *
     * @var int
     */
    public $memberUid;

    /**
     * @example vfw-d7b8ce273791475b9b0b
     *
     * @var string
     */
    public $vpcFirewallId;

    /**
     * @example 1
     *
     * @var int
     */
    public $whiteType;
    protected $_name = [
        'lang'          => 'Lang',
        'listType'      => 'ListType',
        'listValue'     => 'ListValue',
        'memberUid'     => 'MemberUid',
        'vpcFirewallId' => 'VpcFirewallId',
        'whiteType'     => 'WhiteType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->listType) {
            $res['ListType'] = $this->listType;
        }
        if (null !== $this->listValue) {
            $res['ListValue'] = $this->listValue;
        }
        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }
        if (null !== $this->vpcFirewallId) {
            $res['VpcFirewallId'] = $this->vpcFirewallId;
        }
        if (null !== $this->whiteType) {
            $res['WhiteType'] = $this->whiteType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyVpcFirewallIPSWhitelistRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['ListType'])) {
            $model->listType = $map['ListType'];
        }
        if (isset($map['ListValue'])) {
            $model->listValue = $map['ListValue'];
        }
        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }
        if (isset($map['VpcFirewallId'])) {
            $model->vpcFirewallId = $map['VpcFirewallId'];
        }
        if (isset($map['WhiteType'])) {
            $model->whiteType = $map['WhiteType'];
        }

        return $model;
    }
}
