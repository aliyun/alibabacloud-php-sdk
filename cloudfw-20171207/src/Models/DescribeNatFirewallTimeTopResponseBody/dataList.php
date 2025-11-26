<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeNatFirewallTimeTopResponseBody;

use AlibabaCloud\Dara\Model;

class dataList extends Model
{
    /**
     * @var int
     */
    public $inBps;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $natFirewallId;

    /**
     * @var string
     */
    public $natFirewallName;

    /**
     * @var string
     */
    public $natGatewayId;

    /**
     * @var string
     */
    public $natGatewayName;

    /**
     * @var string
     */
    public $newConn;

    /**
     * @var int
     */
    public $outBps;

    /**
     * @var string
     */
    public $regionNo;

    /**
     * @var string
     */
    public $resourceInstanceId;

    /**
     * @var string
     */
    public $resourceInstanceName;

    /**
     * @var string
     */
    public $sessionCount;

    /**
     * @var int
     */
    public $totalBps;
    protected $_name = [
        'inBps' => 'InBps',
        'ip' => 'Ip',
        'natFirewallId' => 'NatFirewallId',
        'natFirewallName' => 'NatFirewallName',
        'natGatewayId' => 'NatGatewayId',
        'natGatewayName' => 'NatGatewayName',
        'newConn' => 'NewConn',
        'outBps' => 'OutBps',
        'regionNo' => 'RegionNo',
        'resourceInstanceId' => 'ResourceInstanceId',
        'resourceInstanceName' => 'ResourceInstanceName',
        'sessionCount' => 'SessionCount',
        'totalBps' => 'TotalBps',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inBps) {
            $res['InBps'] = $this->inBps;
        }

        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        if (null !== $this->natFirewallId) {
            $res['NatFirewallId'] = $this->natFirewallId;
        }

        if (null !== $this->natFirewallName) {
            $res['NatFirewallName'] = $this->natFirewallName;
        }

        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }

        if (null !== $this->natGatewayName) {
            $res['NatGatewayName'] = $this->natGatewayName;
        }

        if (null !== $this->newConn) {
            $res['NewConn'] = $this->newConn;
        }

        if (null !== $this->outBps) {
            $res['OutBps'] = $this->outBps;
        }

        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }

        if (null !== $this->resourceInstanceId) {
            $res['ResourceInstanceId'] = $this->resourceInstanceId;
        }

        if (null !== $this->resourceInstanceName) {
            $res['ResourceInstanceName'] = $this->resourceInstanceName;
        }

        if (null !== $this->sessionCount) {
            $res['SessionCount'] = $this->sessionCount;
        }

        if (null !== $this->totalBps) {
            $res['TotalBps'] = $this->totalBps;
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
        if (isset($map['InBps'])) {
            $model->inBps = $map['InBps'];
        }

        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        if (isset($map['NatFirewallId'])) {
            $model->natFirewallId = $map['NatFirewallId'];
        }

        if (isset($map['NatFirewallName'])) {
            $model->natFirewallName = $map['NatFirewallName'];
        }

        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }

        if (isset($map['NatGatewayName'])) {
            $model->natGatewayName = $map['NatGatewayName'];
        }

        if (isset($map['NewConn'])) {
            $model->newConn = $map['NewConn'];
        }

        if (isset($map['OutBps'])) {
            $model->outBps = $map['OutBps'];
        }

        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }

        if (isset($map['ResourceInstanceId'])) {
            $model->resourceInstanceId = $map['ResourceInstanceId'];
        }

        if (isset($map['ResourceInstanceName'])) {
            $model->resourceInstanceName = $map['ResourceInstanceName'];
        }

        if (isset($map['SessionCount'])) {
            $model->sessionCount = $map['SessionCount'];
        }

        if (isset($map['TotalBps'])) {
            $model->totalBps = $map['TotalBps'];
        }

        return $model;
    }
}
