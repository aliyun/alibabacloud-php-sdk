<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeFirewallVswitchResourcesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeFirewallVswitchResourcesResponseBody\vswitchList\firewallList;

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
    public $detail;

    /**
     * @var firewallList[]
     */
    public $firewallList;

    /**
     * @var string
     */
    public $routeTableId;

    /**
     * @var string
     */
    public $routeTableType;

    /**
     * @var string
     */
    public $status;

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
        'detail' => 'Detail',
        'firewallList' => 'FirewallList',
        'routeTableId' => 'RouteTableId',
        'routeTableType' => 'RouteTableType',
        'status' => 'Status',
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

        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
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

        if (null !== $this->routeTableId) {
            $res['RouteTableId'] = $this->routeTableId;
        }

        if (null !== $this->routeTableType) {
            $res['RouteTableType'] = $this->routeTableType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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

        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
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

        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }

        if (isset($map['RouteTableType'])) {
            $model->routeTableType = $map['RouteTableType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
