<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\GenerateAgentStatisticReportResponseBody\dataList;

use AlibabaCloud\SDK\CCC\V20170705\Models\GenerateAgentStatisticReportResponseBody\dataList\list_\generateAgentStatistic;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var generateAgentStatistic[]
     */
    public $generateAgentStatistic;
    protected $_name = [
        'generateAgentStatistic' => 'GenerateAgentStatistic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->generateAgentStatistic) {
            $res['GenerateAgentStatistic'] = [];
            if (null !== $this->generateAgentStatistic && \is_array($this->generateAgentStatistic)) {
                $n = 0;
                foreach ($this->generateAgentStatistic as $item) {
                    $res['GenerateAgentStatistic'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GenerateAgentStatistic'])) {
            if (!empty($map['GenerateAgentStatistic'])) {
                $model->generateAgentStatistic = [];
                $n                             = 0;
                foreach ($map['GenerateAgentStatistic'] as $item) {
                    $model->generateAgentStatistic[$n++] = null !== $item ? generateAgentStatistic::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
