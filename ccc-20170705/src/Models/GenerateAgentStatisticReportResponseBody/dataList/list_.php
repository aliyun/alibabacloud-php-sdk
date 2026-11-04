<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\GenerateAgentStatisticReportResponseBody\dataList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20170705\Models\GenerateAgentStatisticReportResponseBody\dataList\list_\generateAgentStatistic;

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
        if (\is_array($this->generateAgentStatistic)) {
            Model::validateArray($this->generateAgentStatistic);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->generateAgentStatistic) {
            if (\is_array($this->generateAgentStatistic)) {
                $res['GenerateAgentStatistic'] = [];
                $n1 = 0;
                foreach ($this->generateAgentStatistic as $item1) {
                    $res['GenerateAgentStatistic'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['GenerateAgentStatistic'])) {
            if (!empty($map['GenerateAgentStatistic'])) {
                $model->generateAgentStatistic = [];
                $n1 = 0;
                foreach ($map['GenerateAgentStatistic'] as $item1) {
                    $model->generateAgentStatistic[$n1] = generateAgentStatistic::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
