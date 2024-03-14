<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeVpcFirewallIPSWhitelistRequest extends Model
{
    /**
     * @description The language of the content within the request and response.
     *
     * Valid values:
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
     * @description The UID of the member in Cloud Firewall.
     *
     * @example 1766185894104675
     *
     * @var int
     */
    public $memberUid;

    /**
     * @description The instance ID of the VPC firewall.
     *
     * @example vfw-3547deab1c9b4190a53f
     *
     * @var string
     */
    public $vpcFirewallId;
    protected $_name = [
        'lang'          => 'Lang',
        'memberUid'     => 'MemberUid',
        'vpcFirewallId' => 'VpcFirewallId',
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
        if (null !== $this->vpcFirewallId) {
            $res['VpcFirewallId'] = $this->vpcFirewallId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVpcFirewallIPSWhitelistRequest
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
        if (isset($map['VpcFirewallId'])) {
            $model->vpcFirewallId = $map['VpcFirewallId'];
        }

        return $model;
    }
}
