<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelListResponseBody\channelList\channelList;

class channelList extends Model
{
    /**
     * @var channelList[]
     */
    public $channelList;
    protected $_name = [
        'channelList' => 'ChannelList',
    ];

    public function validate()
    {
        if (\is_array($this->channelList)) {
            Model::validateArray($this->channelList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelList) {
            if (\is_array($this->channelList)) {
                $res['ChannelList'] = [];
                $n1 = 0;
                foreach ($this->channelList as $item1) {
                    $res['ChannelList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['ChannelList'])) {
            if (!empty($map['ChannelList'])) {
                $model->channelList = [];
                $n1 = 0;
                foreach ($map['ChannelList'] as $item1) {
                    $model->channelList[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
