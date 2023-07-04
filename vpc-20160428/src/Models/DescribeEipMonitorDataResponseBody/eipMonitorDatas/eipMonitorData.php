<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipMonitorDataResponseBody\eipMonitorDatas;

use AlibabaCloud\Tea\Model;

class eipMonitorData extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $eipBandwidth;

    /**
     * @description The sum of inbound and outbound traffic.
     *
     * @example 465
     *
     * @var int
     */
    public $eipFlow;

    /**
     * @description The number of packets.
     *
     * @example 3434
     *
     * @var int
     */
    public $eipPackets;

    /**
     * @description The inbound traffic. Unit: bytes.
     *
     * @example 122
     *
     * @var int
     */
    public $eipRX;

    /**
     * @description The outbound traffic. Unit: bytes.
     *
     * @example 343
     *
     * @var int
     */
    public $eipTX;

    /**
     * @description The timestamp of the monitoring data. Specify the time in the ISO8601 standard. Example: `2020-01-21T09:50:23Z`.
     *
     * @example 2020-01-21T09:50:23Z
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'eipBandwidth' => 'EipBandwidth',
        'eipFlow'      => 'EipFlow',
        'eipPackets'   => 'EipPackets',
        'eipRX'        => 'EipRX',
        'eipTX'        => 'EipTX',
        'timeStamp'    => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eipBandwidth) {
            $res['EipBandwidth'] = $this->eipBandwidth;
        }
        if (null !== $this->eipFlow) {
            $res['EipFlow'] = $this->eipFlow;
        }
        if (null !== $this->eipPackets) {
            $res['EipPackets'] = $this->eipPackets;
        }
        if (null !== $this->eipRX) {
            $res['EipRX'] = $this->eipRX;
        }
        if (null !== $this->eipTX) {
            $res['EipTX'] = $this->eipTX;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eipMonitorData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EipBandwidth'])) {
            $model->eipBandwidth = $map['EipBandwidth'];
        }
        if (isset($map['EipFlow'])) {
            $model->eipFlow = $map['EipFlow'];
        }
        if (isset($map['EipPackets'])) {
            $model->eipPackets = $map['EipPackets'];
        }
        if (isset($map['EipRX'])) {
            $model->eipRX = $map['EipRX'];
        }
        if (isset($map['EipTX'])) {
            $model->eipTX = $map['EipTX'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
