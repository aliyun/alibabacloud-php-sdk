<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdmeter\V20210425\Models\DescribeMeterRtcApproxPeakRateResponseBody;

use AlibabaCloud\Tea\Model;

class peakRateVoList extends Model
{
    /**
     * @var float
     */
    public $peakRate;

    /**
     * @var int
     */
    public $peakTs;

    /**
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'peakRate'  => 'PeakRate',
        'peakTs'    => 'PeakTs',
        'timestamp' => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->peakRate) {
            $res['PeakRate'] = $this->peakRate;
        }
        if (null !== $this->peakTs) {
            $res['PeakTs'] = $this->peakTs;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return peakRateVoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PeakRate'])) {
            $model->peakRate = $map['PeakRate'];
        }
        if (isset($map['PeakTs'])) {
            $model->peakTs = $map['PeakTs'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
