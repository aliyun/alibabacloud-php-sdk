<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeNetworkChannelResponseBody\channelInfos;

class DescribeNetworkChannelResponseBody extends Model
{
    /**
     * @var channelInfos[]
     */
    public $channelInfos;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'channelInfos' => 'ChannelInfos',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->channelInfos)) {
            Model::validateArray($this->channelInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelInfos) {
            if (\is_array($this->channelInfos)) {
                $res['ChannelInfos'] = [];
                $n1 = 0;
                foreach ($this->channelInfos as $item1) {
                    $res['ChannelInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ChannelInfos'])) {
            if (!empty($map['ChannelInfos'])) {
                $model->channelInfos = [];
                $n1 = 0;
                foreach ($map['ChannelInfos'] as $item1) {
                    $model->channelInfos[$n1] = channelInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
