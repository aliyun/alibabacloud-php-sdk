<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeUserOnlineClientStatisticsResponseBody;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeUserOnlineClientStatisticsResponseBody\userStatistics\statistics;
use AlibabaCloud\Tea\Model;

class userStatistics extends Model
{
    /**
     * @var statistics[]
     */
    public $statistics;
    protected $_name = [
        'statistics' => 'Statistics',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->statistics) {
            $res['Statistics'] = [];
            if (null !== $this->statistics && \is_array($this->statistics)) {
                $n = 0;
                foreach ($this->statistics as $item) {
                    $res['Statistics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userStatistics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Statistics'])) {
            if (!empty($map['Statistics'])) {
                $model->statistics = [];
                $n                 = 0;
                foreach ($map['Statistics'] as $item) {
                    $model->statistics[$n++] = null !== $item ? statistics::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
