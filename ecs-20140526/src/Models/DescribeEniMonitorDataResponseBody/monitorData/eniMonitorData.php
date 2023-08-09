<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeEniMonitorDataResponseBody\monitorData;

use AlibabaCloud\Tea\Model;

class eniMonitorData extends Model
{
    /**
     * @description The number of dropped packets received by the secondary ENI over the internal network.
     *
     * @example 0
     *
     * @var string
     */
    public $dropPacketRx;

    /**
     * @description The number of dropped packets sent by the secondary ENI over the internal network.
     *
     * @example 0
     *
     * @var string
     */
    public $dropPacketTx;

    /**
     * @description The secondary ENI ID.
     *
     * @example eni-bp19da36d6xdwey****
     *
     * @var string
     */
    public $eniId;

    /**
     * @description The average rate of data received by the secondary ENI over the internal network. Unit: Kbit/s.
     *
     * @example 0
     *
     * @var string
     */
    public $intranetRx;

    /**
     * @description The average rate of data sent by the secondary ENI over the internal network. Unit: Kbit/s.
     *
     * @example 0
     *
     * @var string
     */
    public $intranetTx;

    /**
     * @description The number of packets received by the secondary ENI over the internal network.
     *
     * @example 0
     *
     * @var string
     */
    public $packetRx;

    /**
     * @description The number of packets sent by the secondary ENI over the internal network.
     *
     * @example 0
     *
     * @var string
     */
    public $packetTx;

    /**
     * @description The timestamp to query the monitoring data. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2018-05-21T03:22:00Z
     *
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
