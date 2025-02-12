<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcPeakChannelCntDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcPeakChannelCntDataResponseBody\peakChannelCntDataPerInterval\peakChannelCntModule;

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
        if (\is_array($this->peakChannelCntModule)) {
            Model::validateArray($this->peakChannelCntModule);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->peakChannelCntModule) {
            if (\is_array($this->peakChannelCntModule)) {
                $res['PeakChannelCntModule'] = [];
                $n1                          = 0;
                foreach ($this->peakChannelCntModule as $item1) {
                    $res['PeakChannelCntModule'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PeakChannelCntModule'])) {
            if (!empty($map['PeakChannelCntModule'])) {
                $model->peakChannelCntModule = [];
                $n1                          = 0;
                foreach ($map['PeakChannelCntModule'] as $item1) {
                    $model->peakChannelCntModule[$n1++] = peakChannelCntModule::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
