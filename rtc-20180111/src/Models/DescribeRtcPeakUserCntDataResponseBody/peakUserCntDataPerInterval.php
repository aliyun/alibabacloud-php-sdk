<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcPeakUserCntDataResponseBody;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcPeakUserCntDataResponseBody\peakUserCntDataPerInterval\peakUserCntModule;
use AlibabaCloud\Tea\Model;

class peakUserCntDataPerInterval extends Model
{
    /**
     * @var peakUserCntModule[]
     */
    public $peakUserCntModule;
    protected $_name = [
        'peakUserCntModule' => 'PeakUserCntModule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->peakUserCntModule) {
            $res['PeakUserCntModule'] = [];
            if (null !== $this->peakUserCntModule && \is_array($this->peakUserCntModule)) {
                $n = 0;
                foreach ($this->peakUserCntModule as $item) {
                    $res['PeakUserCntModule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return peakUserCntDataPerInterval
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PeakUserCntModule'])) {
            if (!empty($map['PeakUserCntModule'])) {
                $model->peakUserCntModule = [];
                $n                        = 0;
                foreach ($map['PeakUserCntModule'] as $item) {
                    $model->peakUserCntModule[$n++] = null !== $item ? peakUserCntModule::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
