<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingActivityStatisticsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingActivityStatisticsResponseBody\scalingActivityErrorCodeStatistics\errorStatistic;

class scalingActivityErrorCodeStatistics extends Model
{
    /**
     * @var errorStatistic[]
     */
    public $errorStatistic;
    protected $_name = [
        'errorStatistic' => 'ErrorStatistic',
    ];

    public function validate()
    {
        if (\is_array($this->errorStatistic)) {
            Model::validateArray($this->errorStatistic);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorStatistic) {
            if (\is_array($this->errorStatistic)) {
                $res['ErrorStatistic'] = [];
                $n1 = 0;
                foreach ($this->errorStatistic as $item1) {
                    $res['ErrorStatistic'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ErrorStatistic'])) {
            if (!empty($map['ErrorStatistic'])) {
                $model->errorStatistic = [];
                $n1 = 0;
                foreach ($map['ErrorStatistic'] as $item1) {
                    $model->errorStatistic[$n1] = errorStatistic::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
