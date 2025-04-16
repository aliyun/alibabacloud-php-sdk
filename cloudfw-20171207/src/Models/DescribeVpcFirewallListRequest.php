<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeVpcFirewallListRequest extends Model
{
    /**
     * @var string
     */
    public $connectSubType;

    /**
     * @var string
     */
    public $currentPage;

    /**
     * @var string
     */
    public $firewallSwitchStatus;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $memberUid;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $peerUid;

    /**
     * @var string
     */
    public $regionNo;

    /**
     * @var string
     */
    public $vpcFirewallId;

    /**
     * @var string
     */
    public $vpcFirewallName;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'connectSubType' => 'ConnectSubType',
        'currentPage' => 'CurrentPage',
        'firewallSwitchStatus' => 'FirewallSwitchStatus',
        'lang' => 'Lang',
        'memberUid' => 'MemberUid',
        'pageSize' => 'PageSize',
        'peerUid' => 'PeerUid',
        'regionNo' => 'RegionNo',
        'vpcFirewallId' => 'VpcFirewallId',
        'vpcFirewallName' => 'VpcFirewallName',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectSubType) {
            $res['ConnectSubType'] = $this->connectSubType;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->firewallSwitchStatus) {
            $res['FirewallSwitchStatus'] = $this->firewallSwitchStatus;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->peerUid) {
            $res['PeerUid'] = $this->peerUid;
        }

        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }

        if (null !== $this->vpcFirewallId) {
            $res['VpcFirewallId'] = $this->vpcFirewallId;
        }

        if (null !== $this->vpcFirewallName) {
            $res['VpcFirewallName'] = $this->vpcFirewallName;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['ConnectSubType'])) {
            $model->connectSubType = $map['ConnectSubType'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['FirewallSwitchStatus'])) {
            $model->firewallSwitchStatus = $map['FirewallSwitchStatus'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PeerUid'])) {
            $model->peerUid = $map['PeerUid'];
        }

        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }

        if (isset($map['VpcFirewallId'])) {
            $model->vpcFirewallId = $map['VpcFirewallId'];
        }

        if (isset($map['VpcFirewallName'])) {
            $model->vpcFirewallName = $map['VpcFirewallName'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
