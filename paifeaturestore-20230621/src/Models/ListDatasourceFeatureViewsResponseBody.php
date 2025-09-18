<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListDatasourceFeatureViewsResponseBody\featureViews;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListDatasourceFeatureViewsResponseBody\totalUsageStatistics;

class ListDatasourceFeatureViewsResponseBody extends Model
{
    /**
     * @var featureViews[]
     */
    public $featureViews;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var totalUsageStatistics
     */
    public $totalUsageStatistics;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'featureViews' => 'FeatureViews',
        'totalCount' => 'TotalCount',
        'totalUsageStatistics' => 'TotalUsageStatistics',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->featureViews)) {
            Model::validateArray($this->featureViews);
        }
        if (null !== $this->totalUsageStatistics) {
            $this->totalUsageStatistics->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->featureViews) {
            if (\is_array($this->featureViews)) {
                $res['FeatureViews'] = [];
                $n1 = 0;
                foreach ($this->featureViews as $item1) {
                    $res['FeatureViews'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->totalUsageStatistics) {
            $res['TotalUsageStatistics'] = null !== $this->totalUsageStatistics ? $this->totalUsageStatistics->toArray($noStream) : $this->totalUsageStatistics;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['FeatureViews'])) {
            if (!empty($map['FeatureViews'])) {
                $model->featureViews = [];
                $n1 = 0;
                foreach ($map['FeatureViews'] as $item1) {
                    $model->featureViews[$n1] = featureViews::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['TotalUsageStatistics'])) {
            $model->totalUsageStatistics = totalUsageStatistics::fromMap($map['TotalUsageStatistics']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
