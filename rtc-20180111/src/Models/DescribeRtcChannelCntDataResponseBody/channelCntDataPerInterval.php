<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelCntDataResponseBody;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelCntDataResponseBody\channelCntDataPerInterval\channelCntModule;
use AlibabaCloud\Tea\Model;

class channelCntDataPerInterval extends Model
{
    /**
     * @var channelCntModule[]
     */
    public $channelCntModule;
    protected $_name = [
        'channelCntModule' => 'ChannelCntModule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelCntModule) {
            $res['ChannelCntModule'] = [];
            if (null !== $this->channelCntModule && \is_array($this->channelCntModule)) {
                $n = 0;
                foreach ($this->channelCntModule as $item) {
                    $res['ChannelCntModule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return channelCntDataPerInterval
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelCntModule'])) {
            if (!empty($map['ChannelCntModule'])) {
                $model->channelCntModule = [];
                $n                       = 0;
                foreach ($map['ChannelCntModule'] as $item) {
                    $model->channelCntModule[$n++] = null !== $item ? channelCntModule::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
