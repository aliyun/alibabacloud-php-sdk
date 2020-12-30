<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListNatGatewayEcsMetricResponseBody;

use AlibabaCloud\Tea\Model;

class metricDataList extends Model
{
    /**
     * @var int
     */
    public $rxBps;

    /**
     * @var int
     */
    public $activeSessionNum;

    /**
     * @var int
     */
    public $txBps;

    /**
     * @var int
     */
    public $newSessionRate;

    /**
     * @var int
     */
    public $txPps;

    /**
     * @var string
     */
    public $natGatewayId;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var int
     */
    public $rxPps;

    /**
     * @var string
     */
    public $privateIpAddress;
    protected $_name = [
        'rxBps'            => 'RxBps',
        'activeSessionNum' => 'ActiveSessionNum',
        'txBps'            => 'TxBps',
        'newSessionRate'   => 'NewSessionRate',
        'txPps'            => 'TxPps',
        'natGatewayId'     => 'NatGatewayId',
        'timestamp'        => 'Timestamp',
        'rxPps'            => 'RxPps',
        'privateIpAddress' => 'PrivateIpAddress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rxBps) {
            $res['RxBps'] = $this->rxBps;
        }
        if (null !== $this->activeSessionNum) {
            $res['ActiveSessionNum'] = $this->activeSessionNum;
        }
        if (null !== $this->txBps) {
            $res['TxBps'] = $this->txBps;
        }
        if (null !== $this->newSessionRate) {
            $res['NewSessionRate'] = $this->newSessionRate;
        }
        if (null !== $this->txPps) {
            $res['TxPps'] = $this->txPps;
        }
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->rxPps) {
            $res['RxPps'] = $this->rxPps;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metricDataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RxBps'])) {
            $model->rxBps = $map['RxBps'];
        }
        if (isset($map['ActiveSessionNum'])) {
            $model->activeSessionNum = $map['ActiveSessionNum'];
        }
        if (isset($map['TxBps'])) {
            $model->txBps = $map['TxBps'];
        }
        if (isset($map['NewSessionRate'])) {
            $model->newSessionRate = $map['NewSessionRate'];
        }
        if (isset($map['TxPps'])) {
            $model->txPps = $map['TxPps'];
        }
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['RxPps'])) {
            $model->rxPps = $map['RxPps'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }

        return $model;
    }
}
