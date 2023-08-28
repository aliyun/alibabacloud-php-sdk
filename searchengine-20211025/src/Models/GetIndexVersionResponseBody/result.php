<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetIndexVersionResponseBody;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetIndexVersionResponseBody\result\indexVersions;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example ayoss-cn-zhangjiakou-b
     *
     * @var string
     */
    public $cluster;

    /**
     * @var indexVersions[]
     */
    public $indexVersions;
    protected $_name = [
        'cluster'       => 'cluster',
        'indexVersions' => 'indexVersions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cluster) {
            $res['cluster'] = $this->cluster;
        }
        if (null !== $this->indexVersions) {
            $res['indexVersions'] = [];
            if (null !== $this->indexVersions && \is_array($this->indexVersions)) {
                $n = 0;
                foreach ($this->indexVersions as $item) {
                    $res['indexVersions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cluster'])) {
            $model->cluster = $map['cluster'];
        }
        if (isset($map['indexVersions'])) {
            if (!empty($map['indexVersions'])) {
                $model->indexVersions = [];
                $n                    = 0;
                foreach ($map['indexVersions'] as $item) {
                    $model->indexVersions[$n++] = null !== $item ? indexVersions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
