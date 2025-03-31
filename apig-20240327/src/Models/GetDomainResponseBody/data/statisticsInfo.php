<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetDomainResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\ResourceStatistic;

class statisticsInfo extends Model
{
    /**
     * @var ResourceStatistic[]
     */
    public $resourceStatistics;

    /**
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'resourceStatistics' => 'resourceStatistics',
        'totalCount' => 'totalCount',
    ];

    public function validate()
    {
        if (\is_array($this->resourceStatistics)) {
            Model::validateArray($this->resourceStatistics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resourceStatistics) {
            if (\is_array($this->resourceStatistics)) {
                $res['resourceStatistics'] = [];
                $n1 = 0;
                foreach ($this->resourceStatistics as $item1) {
                    $res['resourceStatistics'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
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
        if (isset($map['resourceStatistics'])) {
            if (!empty($map['resourceStatistics'])) {
                $model->resourceStatistics = [];
                $n1 = 0;
                foreach ($map['resourceStatistics'] as $item1) {
                    $model->resourceStatistics[$n1++] = ResourceStatistic::fromMap($item1);
                }
            }
        }

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
