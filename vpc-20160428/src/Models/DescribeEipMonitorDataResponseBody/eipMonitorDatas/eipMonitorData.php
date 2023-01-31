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
     * @example 465
     *
     * @var int
     */
    public $eipFlow;

    /**
     * @example 3434
     *
     * @var int
     */
    public $eipPackets;

    /**
     * @example 122
     *
     * @var int
     */
    public $eipRX;

    /**
     * @example 343
     *
     * @var int
     */
    public $eipTX;

    /**
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
