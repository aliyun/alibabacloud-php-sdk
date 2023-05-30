<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class ModifyVpcFirewallDefaultIPSConfigRequest extends Model
{
    /**
     * @description Specifies whether to enable basic protection. Valid values:
     *
     *   **1**: yes
     *   **0**: no
     *
     * @example 1
     *
     * @var string
     */
    public $basicRules;

    /**
     * @description Specifies whether to enable virtual patching. Valid values:
     *
     *   **1**: yes
     *   **0**: no
     *
     * @example 1
     *
     * @var string
     */
    public $enableAllPatch;

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
     * @description The mode of the intrusion prevention system (IPS). Valid values:
     *
     *   **1**: block mode
     *   **0**: monitor mode
     *
     * @example 0
     *
     * @var string
     */
    public $runMode;

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
     * @description The instance ID of the VPC firewall. Valid values:
     *
     *   If the VPC firewall protects mutual access traffic between a VPC and a specified network instance that is attached to a Cloud Enterprise Network (CEN) instance, the value of this parameter is the ID of the CEN instance. The network instance can be a VPC, a virtual border router (VBR), or a Cloud Connect Network (CCN) instance. You can call the [DescribeVpcFirewallCenList](~~345777~~) operation to query the IDs of CEN instances.
     *   If the VPC firewall protects mutual access traffic between two VPCs that are connected by using an Express Connect circuit, the value of this parameter is the ID of the VPC firewall. You can call the [DescribeVpcFirewallList](~~342932~~) operation to query the instance IDs of VPC firewalls.
     *
     * @example vfw-m5e7dbc4y****
     *
     * @var string
     */
    public $vpcFirewallId;
    protected $_name = [
        'basicRules'     => 'BasicRules',
        'enableAllPatch' => 'EnableAllPatch',
        'lang'           => 'Lang',
        'memberUid'      => 'MemberUid',
        'runMode'        => 'RunMode',
        'sourceIp'       => 'SourceIp',
        'vpcFirewallId'  => 'VpcFirewallId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->basicRules) {
            $res['BasicRules'] = $this->basicRules;
        }
        if (null !== $this->enableAllPatch) {
            $res['EnableAllPatch'] = $this->enableAllPatch;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }
        if (null !== $this->runMode) {
            $res['RunMode'] = $this->runMode;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->vpcFirewallId) {
            $res['VpcFirewallId'] = $this->vpcFirewallId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyVpcFirewallDefaultIPSConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BasicRules'])) {
            $model->basicRules = $map['BasicRules'];
        }
        if (isset($map['EnableAllPatch'])) {
            $model->enableAllPatch = $map['EnableAllPatch'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }
        if (isset($map['RunMode'])) {
            $model->runMode = $map['RunMode'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['VpcFirewallId'])) {
            $model->vpcFirewallId = $map['VpcFirewallId'];
        }

        return $model;
    }
}
