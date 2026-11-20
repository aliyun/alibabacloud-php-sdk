<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeResourceStatisticByRegionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeResourceStatisticByRegionResponseBody\statistic\regionStatistics;

class statistic extends Model
{
    /**
     * @var regionStatistics[]
     */
    public $regionStatistics;
    protected $_name = [
        'regionStatistics' => 'RegionStatistics',
    ];

    public function validate()
    {
        if (\is_array($this->regionStatistics)) {
            Model::validateArray($this->regionStatistics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionStatistics) {
            if (\is_array($this->regionStatistics)) {
                $res['RegionStatistics'] = [];
                $n1 = 0;
                foreach ($this->regionStatistics as $item1) {
                    $res['RegionStatistics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RegionStatistics'])) {
            if (!empty($map['RegionStatistics'])) {
                $model->regionStatistics = [];
                $n1 = 0;
                foreach ($map['RegionStatistics'] as $item1) {
                    $model->regionStatistics[$n1] = regionStatistics::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
