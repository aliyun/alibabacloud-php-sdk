<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeConsumerGroupResponseBody;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeConsumerGroupResponseBody\consumerChannels\describeConsumerChannel;
use AlibabaCloud\Tea\Model;

class consumerChannels extends Model
{
    /**
     * @var describeConsumerChannel[]
     */
    public $describeConsumerChannel;
    protected $_name = [
        'describeConsumerChannel' => 'DescribeConsumerChannel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->describeConsumerChannel) {
            $res['DescribeConsumerChannel'] = [];
            if (null !== $this->describeConsumerChannel && \is_array($this->describeConsumerChannel)) {
                $n = 0;
                foreach ($this->describeConsumerChannel as $item) {
                    $res['DescribeConsumerChannel'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return consumerChannels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DescribeConsumerChannel'])) {
            if (!empty($map['DescribeConsumerChannel'])) {
                $model->describeConsumerChannel = [];
                $n                              = 0;
                foreach ($map['DescribeConsumerChannel'] as $item) {
                    $model->describeConsumerChannel[$n++] = null !== $item ? describeConsumerChannel::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
