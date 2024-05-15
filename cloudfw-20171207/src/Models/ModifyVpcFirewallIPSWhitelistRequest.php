<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class ModifyVpcFirewallIPSWhitelistRequest extends Model
{
    /**
     * @description The language of the content within the request and response. Valid values:
     *
     *   **zh** (default): Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The type of the list. Valid values:
     *
     *   **1**: user-defined
     *   **2**: address book
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $listType;

    /**
     * @description The entry in the list.
     *
     * @example 10.130.0.0/20,10.130.17.11/32
     *
     * @var string
     */
    public $listValue;

    /**
     * @description The UID of the member that is managed by your Alibaba Cloud account.
     *
     * @example 1415189284827022
     *
     * @var int
     */
    public $memberUid;

    /**
     * @description The instance ID of the VPC firewall.
     *
     * This parameter is required.
     * @example vfw-d7b8ce273791475b9b0b
     *
     * @var string
     */
    public $vpcFirewallId;

    /**
     * @description The type of the whitelist. Valid values:
     *
     *   **1**: destination
     *   **2**: source
     *
     * This parameter is required.
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
