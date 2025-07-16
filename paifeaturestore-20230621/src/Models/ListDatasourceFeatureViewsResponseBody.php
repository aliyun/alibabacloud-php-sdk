<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListDatasourceFeatureViewsResponseBody\featureViews;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListDatasourceFeatureViewsResponseBody\totalUsageStatistics;
use AlibabaCloud\Tea\Model;

class ListDatasourceFeatureViewsResponseBody extends Model
{
    /**
     * @var featureViews[]
     */
    public $featureViews;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalCount;

    /**
     * @var totalUsageStatistics
     */
    public $totalUsageStatistics;

    /**
     * @description Id of the request
     *
     * @example 514F82AF-3C04-5C3D-8F38-A11261BF37B0
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'featureViews' => 'FeatureViews',
        'totalCount' => 'TotalCount',
        'totalUsageStatistics' => 'TotalUsageStatistics',
        'requestId' => 'requestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->featureViews) {
            $res['FeatureViews'] = [];
            if (null !== $this->featureViews && \is_array($this->featureViews)) {
                $n = 0;
                foreach ($this->featureViews as $item) {
                    $res['FeatureViews'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->totalUsageStatistics) {
            $res['TotalUsageStatistics'] = null !== $this->totalUsageStatistics ? $this->totalUsageStatistics->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDatasourceFeatureViewsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FeatureViews'])) {
            if (!empty($map['FeatureViews'])) {
                $model->featureViews = [];
                $n = 0;
                foreach ($map['FeatureViews'] as $item) {
                    $model->featureViews[$n++] = null !== $item ? featureViews::fromMap($item) : $item;
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
