<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class CreateVpcFirewallCenConfigureRequest extends Model
{
    /**
     * @var string
     */
    public $cenId;

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
    public $memberUid;

    /**
     * @var string
     */
    public $networkInstanceId;

    /**
     * @var string
     */
    public $vpcFirewallName;

    /**
     * @var string
     */
    public $vpcRegion;
    protected $_name = [
        'cenId'             => 'CenId',
        'firewallSwitch'    => 'FirewallSwitch',
        'lang'              => 'Lang',
        'memberUid'         => 'MemberUid',
        'networkInstanceId' => 'NetworkInstanceId',
        'vpcFirewallName'   => 'VpcFirewallName',
        'vpcRegion'         => 'VpcRegion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->firewallSwitch) {
            $res['FirewallSwitch'] = $this->firewallSwitch;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }
        if (null !== $this->networkInstanceId) {
            $res['NetworkInstanceId'] = $this->networkInstanceId;
        }
        if (null !== $this->vpcFirewallName) {
            $res['VpcFirewallName'] = $this->vpcFirewallName;
        }
        if (null !== $this->vpcRegion) {
            $res['VpcRegion'] = $this->vpcRegion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVpcFirewallCenConfigureRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['FirewallSwitch'])) {
            $model->firewallSwitch = $map['FirewallSwitch'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }
        if (isset($map['NetworkInstanceId'])) {
            $model->networkInstanceId = $map['NetworkInstanceId'];
        }
        if (isset($map['VpcFirewallName'])) {
            $model->vpcFirewallName = $map['VpcFirewallName'];
        }
        if (isset($map['VpcRegion'])) {
            $model->vpcRegion = $map['VpcRegion'];
        }

        return $model;
    }
}
