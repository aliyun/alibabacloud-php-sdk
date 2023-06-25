<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\SDK\Pds\V20220301\Models\SearchSimilarImageClustersResponseBody\similarImageClusters;
use AlibabaCloud\Tea\Model;

class SearchSimilarImageClustersResponseBody extends Model
{
    /**
     * @example NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0***
     *
     * @var string
     */
    public $nextMarker;

    /**
     * @var similarImageClusters[]
     */
    public $similarImageClusters;
    protected $_name = [
        'nextMarker'           => 'next_marker',
        'similarImageClusters' => 'similar_image_clusters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextMarker) {
            $res['next_marker'] = $this->nextMarker;
        }
        if (null !== $this->similarImageClusters) {
            $res['similar_image_clusters'] = [];
            if (null !== $this->similarImageClusters && \is_array($this->similarImageClusters)) {
                $n = 0;
                foreach ($this->similarImageClusters as $item) {
                    $res['similar_image_clusters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchSimilarImageClustersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['next_marker'])) {
            $model->nextMarker = $map['next_marker'];
        }
        if (isset($map['similar_image_clusters'])) {
            if (!empty($map['similar_image_clusters'])) {
                $model->similarImageClusters = [];
                $n                           = 0;
                foreach ($map['similar_image_clusters'] as $item) {
                    $model->similarImageClusters[$n++] = null !== $item ? similarImageClusters::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
