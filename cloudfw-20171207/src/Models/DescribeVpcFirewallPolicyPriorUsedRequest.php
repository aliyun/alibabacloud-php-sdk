<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeVpcFirewallPolicyPriorUsedRequest extends Model
{
    /**
     * @description The language of the content within the request and response.
     *
     * Valid values:
     *
     *   **zh** (default)
     *   **en**
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The ID of the access control policy group. You can call the [DescribeVpcFirewallAclGroupList](https://help.aliyun.com/document_detail/159760.html) operation to query the ID.
     *
     *   If the VPC firewall is used to protect a Cloud Enterprise Network (CEN) instance, the value of this parameter is the ID of the CEN instance.
     *
     * Example: cen-ervw0g12b5jbw\\*\\*\\*\\*.
     *
     *   If the VPC firewall is used to protect an Express Connect circuit, the value of this parameter is the ID of the VPC firewall.
     *
     * Example: vfw-a42bbb7b887148c9\\*\\*\\*\\*.
     *
     * This parameter is required.
     * @example vfw-a42bbb7b887148c9****
     *
     * @var string
     */
    public $vpcFirewallId;
    protected $_name = [
        'lang'          => 'Lang',
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
        if (null !== $this->vpcFirewallId) {
            $res['VpcFirewallId'] = $this->vpcFirewallId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVpcFirewallPolicyPriorUsedRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['VpcFirewallId'])) {
            $model->vpcFirewallId = $map['VpcFirewallId'];
        }

        return $model;
    }
}
