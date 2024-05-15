<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class BatchCopyVpcFirewallControlPolicyRequest extends Model
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
     * @description The source IP address of the request.
     *
     * @example 192.0.XX.XX
     *
     * @deprecated
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The ID of the policy group of the source VPC firewall. Valid values:
     *
     *   If the VPC firewall protects mutual access traffic between a VPC and a specified network instance that is attached to a Cloud Enterprise Network (CEN) instance, the value of this parameter is the ID of the CEN instance. The network instance can be a VPC, a virtual border router (VBR), or a Cloud Connect Network (CCN) instance.
     *   If the VPC firewall protects traffic between two VPCs that are connected by using an Express Connect circuit, the value of this parameter is the instance ID of the VPC firewall.
     *
     * This parameter is required.
     * @example vfw-a42bbb7b887148c9****
     *
     * @var string
     */
    public $sourceVpcFirewallId;

    /**
     * @description The ID of the policy group of the destination VPC firewall. Valid values:
     *
     *   If the VPC firewall protects mutual access traffic between a VPC and a specified network instance that is attached to a CEN instance, the value of this parameter is the ID of the CEN instance. The network instance can be a VPC, a VBR, or a CCN instance.
     *   If the VPC firewall protects traffic between two VPCs that are connected by using an Express Connect circuit, the value of this parameter is the instance ID of the VPC firewall.
     *
     * This parameter is required.
     * @example vfw-e37d3a04cf79446a****
     *
     * @var string
     */
    public $targetVpcFirewallId;
    protected $_name = [
        'lang'                => 'Lang',
        'sourceIp'            => 'SourceIp',
        'sourceVpcFirewallId' => 'SourceVpcFirewallId',
        'targetVpcFirewallId' => 'TargetVpcFirewallId',
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
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->sourceVpcFirewallId) {
            $res['SourceVpcFirewallId'] = $this->sourceVpcFirewallId;
        }
        if (null !== $this->targetVpcFirewallId) {
            $res['TargetVpcFirewallId'] = $this->targetVpcFirewallId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchCopyVpcFirewallControlPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['SourceVpcFirewallId'])) {
            $model->sourceVpcFirewallId = $map['SourceVpcFirewallId'];
        }
        if (isset($map['TargetVpcFirewallId'])) {
            $model->targetVpcFirewallId = $map['TargetVpcFirewallId'];
        }

        return $model;
    }
}
