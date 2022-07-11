<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeEniMonitorDataResponseBody\monitorData;

use AlibabaCloud\Tea\Model;

class eniMonitorData extends Model
{
    /**
     * @var string
     */
    public $dropPacketRx;

    /**
     * @var string
     */
    public $dropPacketTx;

    /**
     * @var string
     */
    public $eniId;

    /**
     * @var string
     */
    public $intranetRx;

    /**
     * @var string
     */
    public $intranetTx;

    /**
     * @var string
     */
    public $packetRx;

    /**
     * @var string
     */
    public $packetTx;

    /**
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'dropPacketRx' => 'DropPacketRx',
        'dropPacketTx' => 'DropPacketTx',
        'eniId'        => 'EniId',
        'intranetRx'   => 'IntranetRx',
        'intranetTx'   => 'IntranetTx',
        'packetRx'     => 'PacketRx',
        'packetTx'     => 'PacketTx',
        'timeStamp'    => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dropPacketRx) {
            $res['DropPacketRx'] = $this->dropPacketRx;
        }
        if (null !== $this->dropPacketTx) {
            $res['DropPacketTx'] = $this->dropPacketTx;
        }
        if (null !== $this->eniId) {
            $res['EniId'] = $this->eniId;
        }
        if (null !== $this->intranetRx) {
            $res['IntranetRx'] = $this->intranetRx;
        }
        if (null !== $this->intranetTx) {
            $res['IntranetTx'] = $this->intranetTx;
        }
        if (null !== $this->packetRx) {
            $res['PacketRx'] = $this->packetRx;
        }
        if (null !== $this->packetTx) {
            $res['PacketTx'] = $this->packetTx;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eniMonitorData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DropPacketRx'])) {
            $model->dropPacketRx = $map['DropPacketRx'];
        }
        if (isset($map['DropPacketTx'])) {
            $model->dropPacketTx = $map['DropPacketTx'];
        }
        if (isset($map['EniId'])) {
            $model->eniId = $map['EniId'];
        }
        if (isset($map['IntranetRx'])) {
            $model->intranetRx = $map['IntranetRx'];
        }
        if (isset($map['IntranetTx'])) {
            $model->intranetTx = $map['IntranetTx'];
        }
        if (isset($map['PacketRx'])) {
            $model->packetRx = $map['PacketRx'];
        }
        if (isset($map['PacketTx'])) {
            $model->packetTx = $map['PacketTx'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
