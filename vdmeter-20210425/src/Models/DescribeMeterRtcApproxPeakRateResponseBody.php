<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdmeter\V20210425\Models;

use AlibabaCloud\SDK\Vdmeter\V20210425\Models\DescribeMeterRtcApproxPeakRateResponseBody\peakRateVoList;
use AlibabaCloud\Tea\Model;

class DescribeMeterRtcApproxPeakRateResponseBody extends Model
{
    /**
     * @var float
     */
    public $approxPeakRate;

    /**
     * @var int
     */
    public $approxPeakTs;

    /**
     * @var peakRateVoList[]
     */
    public $peakRateVoList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'approxPeakRate' => 'ApproxPeakRate',
        'approxPeakTs'   => 'ApproxPeakTs',
        'peakRateVoList' => 'PeakRateVoList',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->approxPeakRate) {
            $res['ApproxPeakRate'] = $this->approxPeakRate;
        }
        if (null !== $this->approxPeakTs) {
            $res['ApproxPeakTs'] = $this->approxPeakTs;
        }
        if (null !== $this->peakRateVoList) {
            $res['PeakRateVoList'] = [];
            if (null !== $this->peakRateVoList && \is_array($this->peakRateVoList)) {
                $n = 0;
                foreach ($this->peakRateVoList as $item) {
                    $res['PeakRateVoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMeterRtcApproxPeakRateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApproxPeakRate'])) {
            $model->approxPeakRate = $map['ApproxPeakRate'];
        }
        if (isset($map['ApproxPeakTs'])) {
            $model->approxPeakTs = $map['ApproxPeakTs'];
        }
        if (isset($map['PeakRateVoList'])) {
            if (!empty($map['PeakRateVoList'])) {
                $model->peakRateVoList = [];
                $n                     = 0;
                foreach ($map['PeakRateVoList'] as $item) {
                    $model->peakRateVoList[$n++] = null !== $item ? peakRateVoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
