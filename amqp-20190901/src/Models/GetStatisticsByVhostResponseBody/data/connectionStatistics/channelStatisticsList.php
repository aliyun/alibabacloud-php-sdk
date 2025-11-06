<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models\GetStatisticsByVhostResponseBody\data\connectionStatistics;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetStatisticsByVhostResponseBody\data\connectionStatistics\channelStatisticsList\channelStatistics;

class channelStatisticsList extends Model
{
    /**
     * @var channelStatistics[]
     */
    public $channelStatistics;
    protected $_name = [
        'channelStatistics' => 'ChannelStatistics',
    ];

    public function validate()
    {
        if (\is_array($this->channelStatistics)) {
            Model::validateArray($this->channelStatistics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelStatistics) {
            if (\is_array($this->channelStatistics)) {
                $res['ChannelStatistics'] = [];
                $n1 = 0;
                foreach ($this->channelStatistics as $item1) {
                    $res['ChannelStatistics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ChannelStatistics'])) {
            if (!empty($map['ChannelStatistics'])) {
                $model->channelStatistics = [];
                $n1 = 0;
                foreach ($map['ChannelStatistics'] as $item1) {
                    $model->channelStatistics[$n1] = channelStatistics::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
