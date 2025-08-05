<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeConsumerGroupResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeConsumerGroupResponseBody\consumerChannels\describeConsumerChannel;

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
        if (\is_array($this->describeConsumerChannel)) {
            Model::validateArray($this->describeConsumerChannel);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->describeConsumerChannel) {
            if (\is_array($this->describeConsumerChannel)) {
                $res['DescribeConsumerChannel'] = [];
                $n1 = 0;
                foreach ($this->describeConsumerChannel as $item1) {
                    $res['DescribeConsumerChannel'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DescribeConsumerChannel'])) {
            if (!empty($map['DescribeConsumerChannel'])) {
                $model->describeConsumerChannel = [];
                $n1 = 0;
                foreach ($map['DescribeConsumerChannel'] as $item1) {
                    $model->describeConsumerChannel[$n1] = describeConsumerChannel::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
