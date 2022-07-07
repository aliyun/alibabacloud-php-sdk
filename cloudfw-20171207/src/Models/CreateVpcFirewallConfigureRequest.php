<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class CreateVpcFirewallConfigureRequest extends Model
{
    /**
     * @var string
     */
    public $firewallSwitch;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $localVpcCidrTableList;

    /**
     * @var string
     */
    public $localVpcId;

    /**
     * @var string
     */
    public $localVpcRegion;

    /**
     * @var string
     */
    public $memberUid;

    /**
     * @var string
     */
    public $peerVpcCidrTableList;

    /**
     * @var string
     */
    public $peerVpcId;

    /**
     * @var string
     */
    public $peerVpcRegion;

    /**
     * @var string
     */
    public $vpcFirewallName;
    protected $_name = [
        'firewallSwitch'        => 'FirewallSwitch',
        'lang'                  => 'Lang',
        'localVpcCidrTableList' => 'LocalVpcCidrTableList',
        'localVpcId'            => 'LocalVpcId',
        'localVpcRegion'        => 'LocalVpcRegion',
        'memberUid'             => 'MemberUid',
        'peerVpcCidrTableList'  => 'PeerVpcCidrTableList',
        'peerVpcId'             => 'PeerVpcId',
        'peerVpcRegion'         => 'PeerVpcRegion',
        'vpcFirewallName'       => 'VpcFirewallName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->firewallSwitch) {
            $res['FirewallSwitch'] = $this->firewallSwitch;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->localVpcCidrTableList) {
            $res['LocalVpcCidrTableList'] = $this->localVpcCidrTableList;
        }
        if (null !== $this->localVpcId) {
            $res['LocalVpcId'] = $this->localVpcId;
        }
        if (null !== $this->localVpcRegion) {
            $res['LocalVpcRegion'] = $this->localVpcRegion;
        }
        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }
        if (null !== $this->peerVpcCidrTableList) {
            $res['PeerVpcCidrTableList'] = $this->peerVpcCidrTableList;
        }
        if (null !== $this->peerVpcId) {
            $res['PeerVpcId'] = $this->peerVpcId;
        }
        if (null !== $this->peerVpcRegion) {
            $res['PeerVpcRegion'] = $this->peerVpcRegion;
        }
        if (null !== $this->vpcFirewallName) {
            $res['VpcFirewallName'] = $this->vpcFirewallName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVpcFirewallConfigureRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FirewallSwitch'])) {
            $model->firewallSwitch = $map['FirewallSwitch'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['LocalVpcCidrTableList'])) {
            $model->localVpcCidrTableList = $map['LocalVpcCidrTableList'];
        }
        if (isset($map['LocalVpcId'])) {
            $model->localVpcId = $map['LocalVpcId'];
        }
        if (isset($map['LocalVpcRegion'])) {
            $model->localVpcRegion = $map['LocalVpcRegion'];
        }
        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }
        if (isset($map['PeerVpcCidrTableList'])) {
            $model->peerVpcCidrTableList = $map['PeerVpcCidrTableList'];
        }
        if (isset($map['PeerVpcId'])) {
            $model->peerVpcId = $map['PeerVpcId'];
        }
        if (isset($map['PeerVpcRegion'])) {
            $model->peerVpcRegion = $map['PeerVpcRegion'];
        }
        if (isset($map['VpcFirewallName'])) {
            $model->vpcFirewallName = $map['VpcFirewallName'];
        }

        return $model;
    }
}
