<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeClustersResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeClustersResponseBody\clusters\cluster;
use AlibabaCloud\Tea\Model;

class clusters extends Model
{
    /**
     * @var cluster[]
     */
    public $cluster;
    protected $_name = [
        'cluster' => 'Cluster',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cluster) {
            $res['Cluster'] = [];
            if (null !== $this->cluster && \is_array($this->cluster)) {
                $n = 0;
                foreach ($this->cluster as $item) {
                    $res['Cluster'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cluster'])) {
            if (!empty($map['Cluster'])) {
                $model->cluster = [];
                $n              = 0;
                foreach ($map['Cluster'] as $item) {
                    $model->cluster[$n++] = null !== $item ? cluster::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
