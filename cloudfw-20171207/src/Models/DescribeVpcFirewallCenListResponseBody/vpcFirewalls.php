<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallCenListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallCenListResponseBody\vpcFirewalls\aclConfig;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallCenListResponseBody\vpcFirewalls\ipsConfig;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallCenListResponseBody\vpcFirewalls\localVpc;

class vpcFirewalls extends Model
{
    /**
     * @var aclConfig
     */
    public $aclConfig;

    /**
     * @var string
     */
    public $cenId;

    /**
     * @var string
     */
    public $cenName;

    /**
     * @var string
     */
    public $connectType;

    /**
     * @var string
     */
    public $firewallSwitchStatus;

    /**
     * @var ipsConfig
     */
    public $ipsConfig;

    /**
     * @var localVpc
     */
    public $localVpc;

    /**
     * @var string
     */
    public $memberUid;

    /**
     * @var string
     */
    public $precheckStatus;

    /**
     * @var string
     */
    public $regionStatus;

    /**
     * @var string
     */
    public $resultCode;

    /**
     * @var string
     */
    public $vpcFirewallId;

    /**
     * @var string
     */
    public $vpcFirewallName;
    protected $_name = [
        'aclConfig' => 'AclConfig',
        'cenId' => 'CenId',
        'cenName' => 'CenName',
        'connectType' => 'ConnectType',
        'firewallSwitchStatus' => 'FirewallSwitchStatus',
        'ipsConfig' => 'IpsConfig',
        'localVpc' => 'LocalVpc',
        'memberUid' => 'MemberUid',
        'precheckStatus' => 'PrecheckStatus',
        'regionStatus' => 'RegionStatus',
        'resultCode' => 'ResultCode',
        'vpcFirewallId' => 'VpcFirewallId',
        'vpcFirewallName' => 'VpcFirewallName',
    ];

    public function validate()
    {
        if (null !== $this->aclConfig) {
            $this->aclConfig->validate();
        }
        if (null !== $this->ipsConfig) {
            $this->ipsConfig->validate();
        }
        if (null !== $this->localVpc) {
            $this->localVpc->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclConfig) {
            $res['AclConfig'] = null !== $this->aclConfig ? $this->aclConfig->toArray($noStream) : $this->aclConfig;
        }

        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }

        if (null !== $this->cenName) {
            $res['CenName'] = $this->cenName;
        }

        if (null !== $this->connectType) {
            $res['ConnectType'] = $this->connectType;
        }

        if (null !== $this->firewallSwitchStatus) {
            $res['FirewallSwitchStatus'] = $this->firewallSwitchStatus;
        }

        if (null !== $this->ipsConfig) {
            $res['IpsConfig'] = null !== $this->ipsConfig ? $this->ipsConfig->toArray($noStream) : $this->ipsConfig;
        }

        if (null !== $this->localVpc) {
            $res['LocalVpc'] = null !== $this->localVpc ? $this->localVpc->toArray($noStream) : $this->localVpc;
        }

        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }

        if (null !== $this->precheckStatus) {
            $res['PrecheckStatus'] = $this->precheckStatus;
        }

        if (null !== $this->regionStatus) {
            $res['RegionStatus'] = $this->regionStatus;
        }

        if (null !== $this->resultCode) {
            $res['ResultCode'] = $this->resultCode;
        }

        if (null !== $this->vpcFirewallId) {
            $res['VpcFirewallId'] = $this->vpcFirewallId;
        }

        if (null !== $this->vpcFirewallName) {
            $res['VpcFirewallName'] = $this->vpcFirewallName;
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
        if (isset($map['AclConfig'])) {
            $model->aclConfig = aclConfig::fromMap($map['AclConfig']);
        }

        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }

        if (isset($map['CenName'])) {
            $model->cenName = $map['CenName'];
        }

        if (isset($map['ConnectType'])) {
            $model->connectType = $map['ConnectType'];
        }

        if (isset($map['FirewallSwitchStatus'])) {
            $model->firewallSwitchStatus = $map['FirewallSwitchStatus'];
        }

        if (isset($map['IpsConfig'])) {
            $model->ipsConfig = ipsConfig::fromMap($map['IpsConfig']);
        }

        if (isset($map['LocalVpc'])) {
            $model->localVpc = localVpc::fromMap($map['LocalVpc']);
        }

        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }

        if (isset($map['PrecheckStatus'])) {
            $model->precheckStatus = $map['PrecheckStatus'];
        }

        if (isset($map['RegionStatus'])) {
            $model->regionStatus = $map['RegionStatus'];
        }

        if (isset($map['ResultCode'])) {
            $model->resultCode = $map['ResultCode'];
        }

        if (isset($map['VpcFirewallId'])) {
            $model->vpcFirewallId = $map['VpcFirewallId'];
        }

        if (isset($map['VpcFirewallName'])) {
            $model->vpcFirewallName = $map['VpcFirewallName'];
        }

        return $model;
    }
}
