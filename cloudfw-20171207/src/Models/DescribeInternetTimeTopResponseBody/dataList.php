<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInternetTimeTopResponseBody;

use AlibabaCloud\Dara\Model;

class dataList extends Model
{
    /**
     * @var string
     */
    public $IP;

    /**
     * @var int
     */
    public $inBps;

    /**
     * @var int
     */
    public $inPps;

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
    public $natIP;

    /**
     * @var int
     */
    public $newConn;

    /**
     * @var int
     */
    public $outBps;

    /**
     * @var int
     */
    public $outPps;

    /**
     * @var string
     */
    public $privateIP;

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
    public $resourceType;

    /**
     * @var int
     */
    public $sessionCount;

    /**
     * @var int
     */
    public $totalBps;

    /**
     * @var int
     */
    public $totalPps;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'IP' => 'IP',
        'inBps' => 'InBps',
        'inPps' => 'InPps',
        'natGatewayId' => 'NatGatewayId',
        'natGatewayName' => 'NatGatewayName',
        'natIP' => 'NatIP',
        'newConn' => 'NewConn',
        'outBps' => 'OutBps',
        'outPps' => 'OutPps',
        'privateIP' => 'PrivateIP',
        'regionNo' => 'RegionNo',
        'resourceInstanceId' => 'ResourceInstanceId',
        'resourceInstanceName' => 'ResourceInstanceName',
        'resourceType' => 'ResourceType',
        'sessionCount' => 'SessionCount',
        'totalBps' => 'TotalBps',
        'totalPps' => 'TotalPps',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->IP) {
            $res['IP'] = $this->IP;
        }

        if (null !== $this->inBps) {
            $res['InBps'] = $this->inBps;
        }

        if (null !== $this->inPps) {
            $res['InPps'] = $this->inPps;
        }

        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }

        if (null !== $this->natGatewayName) {
            $res['NatGatewayName'] = $this->natGatewayName;
        }

        if (null !== $this->natIP) {
            $res['NatIP'] = $this->natIP;
        }

        if (null !== $this->newConn) {
            $res['NewConn'] = $this->newConn;
        }

        if (null !== $this->outBps) {
            $res['OutBps'] = $this->outBps;
        }

        if (null !== $this->outPps) {
            $res['OutPps'] = $this->outPps;
        }

        if (null !== $this->privateIP) {
            $res['PrivateIP'] = $this->privateIP;
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

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->sessionCount) {
            $res['SessionCount'] = $this->sessionCount;
        }

        if (null !== $this->totalBps) {
            $res['TotalBps'] = $this->totalBps;
        }

        if (null !== $this->totalPps) {
            $res['TotalPps'] = $this->totalPps;
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
        if (isset($map['IP'])) {
            $model->IP = $map['IP'];
        }

        if (isset($map['InBps'])) {
            $model->inBps = $map['InBps'];
        }

        if (isset($map['InPps'])) {
            $model->inPps = $map['InPps'];
        }

        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }

        if (isset($map['NatGatewayName'])) {
            $model->natGatewayName = $map['NatGatewayName'];
        }

        if (isset($map['NatIP'])) {
            $model->natIP = $map['NatIP'];
        }

        if (isset($map['NewConn'])) {
            $model->newConn = $map['NewConn'];
        }

        if (isset($map['OutBps'])) {
            $model->outBps = $map['OutBps'];
        }

        if (isset($map['OutPps'])) {
            $model->outPps = $map['OutPps'];
        }

        if (isset($map['PrivateIP'])) {
            $model->privateIP = $map['PrivateIP'];
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

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['SessionCount'])) {
            $model->sessionCount = $map['SessionCount'];
        }

        if (isset($map['TotalBps'])) {
            $model->totalBps = $map['TotalBps'];
        }

        if (isset($map['TotalPps'])) {
            $model->totalPps = $map['TotalPps'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
