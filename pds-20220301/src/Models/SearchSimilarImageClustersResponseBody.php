<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Pds\V20220301\Models\SearchSimilarImageClustersResponseBody\similarImageClusters;

class SearchSimilarImageClustersResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextMarker;

    /**
     * @var similarImageClusters[]
     */
    public $similarImageClusters;
    protected $_name = [
        'nextMarker' => 'next_marker',
        'similarImageClusters' => 'similar_image_clusters',
    ];

    public function validate()
    {
        if (\is_array($this->similarImageClusters)) {
            Model::validateArray($this->similarImageClusters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextMarker) {
            $res['next_marker'] = $this->nextMarker;
        }

        if (null !== $this->similarImageClusters) {
            if (\is_array($this->similarImageClusters)) {
                $res['similar_image_clusters'] = [];
                $n1 = 0;
                foreach ($this->similarImageClusters as $item1) {
                    $res['similar_image_clusters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['next_marker'])) {
            $model->nextMarker = $map['next_marker'];
        }

        if (isset($map['similar_image_clusters'])) {
            if (!empty($map['similar_image_clusters'])) {
                $model->similarImageClusters = [];
                $n1 = 0;
                foreach ($map['similar_image_clusters'] as $item1) {
                    $model->similarImageClusters[$n1++] = similarImageClusters::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
