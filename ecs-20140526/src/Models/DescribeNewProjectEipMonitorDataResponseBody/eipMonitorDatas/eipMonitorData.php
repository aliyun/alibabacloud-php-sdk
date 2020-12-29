<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNewProjectEipMonitorDataResponseBody\eipMonitorDatas;

use AlibabaCloud\Tea\Model;

class eipMonitorData extends Model
{
    /**
     * @var int
     */
    public $eipTX;

    /**
     * @var int
     */
    public $eipPackets;

    /**
     * @var int
     */
    public $eipBandwidth;

    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var int
     */
    public $eipFlow;

    /**
     * @var int
     */
    public $eipRX;
    protected $_name = [
        'eipTX'        => 'EipTX',
        'eipPackets'   => 'EipPackets',
        'eipBandwidth' => 'EipBandwidth',
        'timeStamp'    => 'TimeStamp',
        'eipFlow'      => 'EipFlow',
        'eipRX'        => 'EipRX',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eipTX) {
            $res['EipTX'] = $this->eipTX;
        }
        if (null !== $this->eipPackets) {
            $res['EipPackets'] = $this->eipPackets;
        }
        if (null !== $this->eipBandwidth) {
            $res['EipBandwidth'] = $this->eipBandwidth;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->eipFlow) {
            $res['EipFlow'] = $this->eipFlow;
        }
        if (null !== $this->eipRX) {
            $res['EipRX'] = $this->eipRX;
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
        if (isset($map['EipTX'])) {
            $model->eipTX = $map['EipTX'];
        }
        if (isset($map['EipPackets'])) {
            $model->eipPackets = $map['EipPackets'];
        }
        if (isset($map['EipBandwidth'])) {
            $model->eipBandwidth = $map['EipBandwidth'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['EipFlow'])) {
            $model->eipFlow = $map['EipFlow'];
        }
        if (isset($map['EipRX'])) {
            $model->eipRX = $map['EipRX'];
        }

        return $model;
    }
}
