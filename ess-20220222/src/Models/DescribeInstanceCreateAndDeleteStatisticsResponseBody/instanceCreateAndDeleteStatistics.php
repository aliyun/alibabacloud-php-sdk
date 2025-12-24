<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeInstanceCreateAndDeleteStatisticsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeInstanceCreateAndDeleteStatisticsResponseBody\instanceCreateAndDeleteStatistics\statistic;

class instanceCreateAndDeleteStatistics extends Model
{
    /**
     * @var statistic[]
     */
    public $statistic;
    protected $_name = [
        'statistic' => 'Statistic',
    ];

    public function validate()
    {
        if (\is_array($this->statistic)) {
            Model::validateArray($this->statistic);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->statistic) {
            if (\is_array($this->statistic)) {
                $res['Statistic'] = [];
                $n1 = 0;
                foreach ($this->statistic as $item1) {
                    $res['Statistic'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Statistic'])) {
            if (!empty($map['Statistic'])) {
                $model->statistic = [];
                $n1 = 0;
                foreach ($map['Statistic'] as $item1) {
                    $model->statistic[$n1] = statistic::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
