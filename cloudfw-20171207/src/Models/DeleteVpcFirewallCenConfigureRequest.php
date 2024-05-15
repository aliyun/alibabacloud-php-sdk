<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DeleteVpcFirewallCenConfigureRequest extends Model
{
    /**
     * @description The language of the content within the request and response. Valid values:
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
     * @description The UID of the member that is managed by your Alibaba Cloud account.
     *
     * @example 258039427902****
     *
     * @var string
     */
    public $memberUid;

    /**
     * @description The instance IDs of VPC firewalls.
     *
     * This parameter is required.
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
     * @return DeleteVpcFirewallCenConfigureRequest
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
