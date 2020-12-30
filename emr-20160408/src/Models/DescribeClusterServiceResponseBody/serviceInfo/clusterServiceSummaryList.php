<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceResponseBody\serviceInfo;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceResponseBody\serviceInfo\clusterServiceSummaryList\clusterServiceSummary;
use AlibabaCloud\Tea\Model;

class clusterServiceSummaryList extends Model
{
    /**
     * @var clusterServiceSummary[]
     */
    public $clusterServiceSummary;
    protected $_name = [
        'clusterServiceSummary' => 'ClusterServiceSummary',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterServiceSummary) {
            $res['ClusterServiceSummary'] = [];
            if (null !== $this->clusterServiceSummary && \is_array($this->clusterServiceSummary)) {
                $n = 0;
                foreach ($this->clusterServiceSummary as $item) {
                    $res['ClusterServiceSummary'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterServiceSummaryList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterServiceSummary'])) {
            if (!empty($map['ClusterServiceSummary'])) {
                $model->clusterServiceSummary = [];
                $n                            = 0;
                foreach ($map['ClusterServiceSummary'] as $item) {
                    $model->clusterServiceSummary[$n++] = null !== $item ? clusterServiceSummary::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
