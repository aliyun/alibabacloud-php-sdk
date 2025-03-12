<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNewProjectEipMonitorDataResponseBody\eipMonitorDatas;

use AlibabaCloud\Tea\Model;

class eipMonitorData extends Model
{
    /**
     * @var int
     */
    public $eipBandwidth;

    /**
     * @var int
     */
    public $eipFlow;

    /**
     * @var int
     */
    public $eipPackets;

    /**
     * @var int
     */
    public $eipRX;

    /**
     * @var int
     */
    public $eipTX;

    /**
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
