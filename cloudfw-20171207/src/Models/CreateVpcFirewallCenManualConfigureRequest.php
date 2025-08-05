<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class CreateVpcFirewallCenManualConfigureRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example cen-37nddhri7jf0d2****
     *
     * @var string
     */
    public $cenId;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example 258039427902****
     *
     * @var string
     */
    public $memberUid;

    /**
     * @description This parameter is required.
     *
     * @example vsw-qzeaol304m***
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $vpcFirewallName;

    /**
     * @description This parameter is required.
     *
     * @example vpc-8vbwbo90rq0anm6t****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'cenId' => 'CenId',
        'lang' => 'Lang',
        'memberUid' => 'MemberUid',
        'vSwitchId' => 'VSwitchId',
        'vpcFirewallName' => 'VpcFirewallName',
        'vpcId' => 'VpcId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcFirewallName) {
            $res['VpcFirewallName'] = $this->vpcFirewallName;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVpcFirewallCenManualConfigureRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
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
