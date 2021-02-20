<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcPeakChannelCntDataResponseBody;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcPeakChannelCntDataResponseBody\peakChannelCntDataPerInterval\peakChannelCntModule;
use AlibabaCloud\Tea\Model;

class peakChannelCntDataPerInterval extends Model
{
    /**
     * @var peakChannelCntModule[]
     */
    public $peakChannelCntModule;
    protected $_name = [
        'peakChannelCntModule' => 'PeakChannelCntModule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->peakChannelCntModule) {
            $res['PeakChannelCntModule'] = [];
            if (null !== $this->peakChannelCntModule && \is_array($this->peakChannelCntModule)) {
                $n = 0;
                foreach ($this->peakChannelCntModule as $item) {
                    $res['PeakChannelCntModule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return peakChannelCntDataPerInterval
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PeakChannelCntModule'])) {
            if (!empty($map['PeakChannelCntModule'])) {
                $model->peakChannelCntModule = [];
                $n                           = 0;
                foreach ($map['PeakChannelCntModule'] as $item) {
                    $model->peakChannelCntModule[$n++] = null !== $item ? peakChannelCntModule::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
