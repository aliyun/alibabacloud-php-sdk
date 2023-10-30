<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListFeatureViewsResponseBody\featureViews;
use AlibabaCloud\Tea\Model;

class ListFeatureViewsResponseBody extends Model
{
    /**
     * @var featureViews[]
     */
    public $featureViews;

    /**
     * @example C03B2680-AC9C-59CD-93C5-8142B92537FA
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'featureViews' => 'FeatureViews',
        'requestId'    => 'RequestId',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFeatureViewsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FeatureViews'])) {
            if (!empty($map['FeatureViews'])) {
                $model->featureViews = [];
                $n                   = 0;
                foreach ($map['FeatureViews'] as $item) {
                    $model->featureViews[$n++] = null !== $item ? featureViews::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
