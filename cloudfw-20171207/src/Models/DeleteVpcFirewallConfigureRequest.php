<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DeleteVpcFirewallConfigureRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $memberUid;

    /**
     * @var string[]
     */
    public $vpcFirewallIdList;
    protected $_name = [
        'lang'              => 'Lang',
        'memberUid'         => 'MemberUid',
        'vpcFirewallIdList' => 'VpcFirewallIdList',
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
        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }
        if (null !== $this->vpcFirewallIdList) {
            $res['VpcFirewallIdList'] = $this->vpcFirewallIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteVpcFirewallConfigureRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }
        if (isset($map['VpcFirewallIdList'])) {
            if (!empty($map['VpcFirewallIdList'])) {
                $model->vpcFirewallIdList = $map['VpcFirewallIdList'];
            }
        }

        return $model;
    }
}
