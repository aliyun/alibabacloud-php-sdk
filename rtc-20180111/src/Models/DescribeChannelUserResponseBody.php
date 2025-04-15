<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelUserResponseBody\sessions;

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
     * @var string
     */
    public $requestId;

    /**
     * @var sessions[]
     */
    public $sessions;
    protected $_name = [
        'channelExist' => 'ChannelExist',
        'inChannel' => 'InChannel',
        'requestId' => 'RequestId',
        'sessions' => 'Sessions',
    ];

    public function validate()
    {
        if (\is_array($this->sessions)) {
            Model::validateArray($this->sessions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->sessions)) {
                $res['Sessions'] = [];
                $n1 = 0;
                foreach ($this->sessions as $item1) {
                    $res['Sessions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                $n1 = 0;
                foreach ($map['Sessions'] as $item1) {
                    $model->sessions[$n1++] = sessions::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
