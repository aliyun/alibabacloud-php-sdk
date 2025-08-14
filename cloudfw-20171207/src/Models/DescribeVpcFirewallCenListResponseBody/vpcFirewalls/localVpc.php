<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallCenListResponseBody\vpcFirewalls;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallCenListResponseBody\vpcFirewalls\localVpc\vpcCidrTableList;

class localVpc extends Model
{
    /**
     * @var string
     */
    public $authorizationStatus;

    /**
     * @var string[]
     */
    public $defendCidrList;

    /**
     * @var string
     */
    public $manualVSwitchId;

    /**
     * @var string
     */
    public $networkInstanceId;

    /**
     * @var string
     */
    public $networkInstanceName;

    /**
     * @var string
     */
    public $networkInstanceType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionNo;

    /**
     * @var string
     */
    public $routeMode;

    /**
     * @var string
     */
    public $supportManualMode;

    /**
     * @var string
     */
    public $transitRouterType;

    /**
     * @var vpcCidrTableList[]
     */
    public $vpcCidrTableList;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vpcName;
    protected $_name = [
        'authorizationStatus' => 'AuthorizationStatus',
        'defendCidrList' => 'DefendCidrList',
        'manualVSwitchId' => 'ManualVSwitchId',
        'networkInstanceId' => 'NetworkInstanceId',
        'networkInstanceName' => 'NetworkInstanceName',
        'networkInstanceType' => 'NetworkInstanceType',
        'ownerId' => 'OwnerId',
        'regionNo' => 'RegionNo',
        'routeMode' => 'RouteMode',
        'supportManualMode' => 'SupportManualMode',
        'transitRouterType' => 'TransitRouterType',
        'vpcCidrTableList' => 'VpcCidrTableList',
        'vpcId' => 'VpcId',
        'vpcName' => 'VpcName',
    ];

    public function validate()
    {
        if (\is_array($this->defendCidrList)) {
            Model::validateArray($this->defendCidrList);
        }
        if (\is_array($this->vpcCidrTableList)) {
            Model::validateArray($this->vpcCidrTableList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizationStatus) {
            $res['AuthorizationStatus'] = $this->authorizationStatus;
        }

        if (null !== $this->defendCidrList) {
            if (\is_array($this->defendCidrList)) {
                $res['DefendCidrList'] = [];
                $n1 = 0;
                foreach ($this->defendCidrList as $item1) {
                    $res['DefendCidrList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->manualVSwitchId) {
            $res['ManualVSwitchId'] = $this->manualVSwitchId;
        }

        if (null !== $this->networkInstanceId) {
            $res['NetworkInstanceId'] = $this->networkInstanceId;
        }

        if (null !== $this->networkInstanceName) {
            $res['NetworkInstanceName'] = $this->networkInstanceName;
        }

        if (null !== $this->networkInstanceType) {
            $res['NetworkInstanceType'] = $this->networkInstanceType;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }

        if (null !== $this->routeMode) {
            $res['RouteMode'] = $this->routeMode;
        }

        if (null !== $this->supportManualMode) {
            $res['SupportManualMode'] = $this->supportManualMode;
        }

        if (null !== $this->transitRouterType) {
            $res['TransitRouterType'] = $this->transitRouterType;
        }

        if (null !== $this->vpcCidrTableList) {
            if (\is_array($this->vpcCidrTableList)) {
                $res['VpcCidrTableList'] = [];
                $n1 = 0;
                foreach ($this->vpcCidrTableList as $item1) {
                    $res['VpcCidrTableList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->vpcName) {
            $res['VpcName'] = $this->vpcName;
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
        if (isset($map['AuthorizationStatus'])) {
            $model->authorizationStatus = $map['AuthorizationStatus'];
        }

        if (isset($map['DefendCidrList'])) {
            if (!empty($map['DefendCidrList'])) {
                $model->defendCidrList = [];
                $n1 = 0;
                foreach ($map['DefendCidrList'] as $item1) {
                    $model->defendCidrList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ManualVSwitchId'])) {
            $model->manualVSwitchId = $map['ManualVSwitchId'];
        }

        if (isset($map['NetworkInstanceId'])) {
            $model->networkInstanceId = $map['NetworkInstanceId'];
        }

        if (isset($map['NetworkInstanceName'])) {
            $model->networkInstanceName = $map['NetworkInstanceName'];
        }

        if (isset($map['NetworkInstanceType'])) {
            $model->networkInstanceType = $map['NetworkInstanceType'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }

        if (isset($map['RouteMode'])) {
            $model->routeMode = $map['RouteMode'];
        }

        if (isset($map['SupportManualMode'])) {
            $model->supportManualMode = $map['SupportManualMode'];
        }

        if (isset($map['TransitRouterType'])) {
            $model->transitRouterType = $map['TransitRouterType'];
        }

        if (isset($map['VpcCidrTableList'])) {
            if (!empty($map['VpcCidrTableList'])) {
                $model->vpcCidrTableList = [];
                $n1 = 0;
                foreach ($map['VpcCidrTableList'] as $item1) {
                    $model->vpcCidrTableList[$n1] = vpcCidrTableList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['VpcName'])) {
            $model->vpcName = $map['VpcName'];
        }

        return $model;
    }
}
