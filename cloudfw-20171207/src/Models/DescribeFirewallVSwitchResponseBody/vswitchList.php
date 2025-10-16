<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeFirewallVSwitchResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeFirewallVSwitchResponseBody\vswitchList\firewallList;

class vswitchList extends Model
{
    /**
     * @var string
     */
    public $availableIpCount;

    /**
     * @var string
     */
    public $cidrBlock;

    /**
     * @var string
     */
    public $firewallCount;

    /**
     * @var firewallList[]
     */
    public $firewallList;

    /**
     * @var string
     */
    public $memberUid;

    /**
     * @var string
     */
    public $regionNo;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vswitchId;

    /**
     * @var string
     */
    public $vswitchName;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'availableIpCount' => 'AvailableIpCount',
        'cidrBlock' => 'CidrBlock',
        'firewallCount' => 'FirewallCount',
        'firewallList' => 'FirewallList',
        'memberUid' => 'MemberUid',
        'regionNo' => 'RegionNo',
        'vpcId' => 'VpcId',
        'vswitchId' => 'VswitchId',
        'vswitchName' => 'VswitchName',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->firewallList)) {
            Model::validateArray($this->firewallList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableIpCount) {
            $res['AvailableIpCount'] = $this->availableIpCount;
        }

        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }

        if (null !== $this->firewallCount) {
            $res['FirewallCount'] = $this->firewallCount;
        }

        if (null !== $this->firewallList) {
            if (\is_array($this->firewallList)) {
                $res['FirewallList'] = [];
                $n1 = 0;
                foreach ($this->firewallList as $item1) {
                    $res['FirewallList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }

        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }

        if (null !== $this->vswitchName) {
            $res['VswitchName'] = $this->vswitchName;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['AvailableIpCount'])) {
            $model->availableIpCount = $map['AvailableIpCount'];
        }

        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }

        if (isset($map['FirewallCount'])) {
            $model->firewallCount = $map['FirewallCount'];
        }

        if (isset($map['FirewallList'])) {
            if (!empty($map['FirewallList'])) {
                $model->firewallList = [];
                $n1 = 0;
                foreach ($map['FirewallList'] as $item1) {
                    $model->firewallList[$n1] = firewallList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }

        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }

        if (isset($map['VswitchName'])) {
            $model->vswitchName = $map['VswitchName'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
