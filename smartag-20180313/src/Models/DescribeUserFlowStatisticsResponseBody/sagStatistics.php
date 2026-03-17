<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeUserFlowStatisticsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeUserFlowStatisticsResponseBody\sagStatistics\statistics;

class sagStatistics extends Model
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
        if (\is_array($this->statistics)) {
            Model::validateArray($this->statistics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->statistics) {
            if (\is_array($this->statistics)) {
                $res['Statistics'] = [];
                $n1 = 0;
                foreach ($this->statistics as $item1) {
                    $res['Statistics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Statistics'])) {
            if (!empty($map['Statistics'])) {
                $model->statistics = [];
                $n1 = 0;
                foreach ($map['Statistics'] as $item1) {
                    $model->statistics[$n1] = statistics::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
