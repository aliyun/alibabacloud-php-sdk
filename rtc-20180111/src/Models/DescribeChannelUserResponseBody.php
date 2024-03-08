<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelUserResponseBody\sessions;
use AlibabaCloud\Tea\Model;

class DescribeChannelUserResponseBody extends Model
{
    /**
     * @var bool
     */
    public $channelExist;

    /**
     * @var bool
     */
    public $inChannel;

    /**
     * @example 16A96B9A-F203-4EC5-8E43-CB92E68F4CF8
     *
     * @var string
     */
    public $requestId;

    /**
     * @var sessions[]
     */
    public $sessions;
    protected $_name = [
        'channelExist' => 'ChannelExist',
        'inChannel'    => 'InChannel',
        'requestId'    => 'RequestId',
        'sessions'     => 'Sessions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelExist) {
            $res['ChannelExist'] = $this->channelExist;
        }
        if (null !== $this->inChannel) {
            $res['InChannel'] = $this->inChannel;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sessions) {
            $res['Sessions'] = [];
            if (null !== $this->sessions && \is_array($this->sessions)) {
                $n = 0;
                foreach ($this->sessions as $item) {
                    $res['Sessions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeChannelUserResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelExist'])) {
            $model->channelExist = $map['ChannelExist'];
        }
        if (isset($map['InChannel'])) {
            $model->inChannel = $map['InChannel'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Sessions'])) {
            if (!empty($map['Sessions'])) {
                $model->sessions = [];
                $n               = 0;
                foreach ($map['Sessions'] as $item) {
                    $model->sessions[$n++] = null !== $item ? sessions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
