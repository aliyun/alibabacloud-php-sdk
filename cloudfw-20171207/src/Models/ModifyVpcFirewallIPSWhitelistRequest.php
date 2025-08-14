<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class ModifyVpcFirewallIPSWhitelistRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $listType;

    /**
     * @var string
     */
    public $listValue;

    /**
     * @var int
     */
    public $memberUid;

    /**
     * @var string
     */
    public $vpcFirewallId;

    /**
     * @var int
     */
    public $whiteType;
    protected $_name = [
        'lang' => 'Lang',
        'listType' => 'ListType',
        'listValue' => 'ListValue',
        'memberUid' => 'MemberUid',
        'vpcFirewallId' => 'VpcFirewallId',
        'whiteType' => 'WhiteType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
