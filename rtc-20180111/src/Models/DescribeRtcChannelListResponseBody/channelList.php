<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelListResponseBody;

use AlibabaCloud\Tea\Model;

class channelList extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelListResponseBody\channelList\channelList[]
     */
    public $channelList;
    protected $_name = [
        'channelList' => 'ChannelList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelList) {
            $res['ChannelList'] = [];
            if (null !== $this->channelList && \is_array($this->channelList)) {
                $n = 0;
                foreach ($this->channelList as $item) {
                    $res['ChannelList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return channelList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelList'])) {
            if (!empty($map['ChannelList'])) {
                $model->channelList = [];
                $n                  = 0;
                foreach ($map['ChannelList'] as $item) {
                    $model->channelList[$n++] = null !== $item ? \AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelListResponseBody\channelList\channelList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
