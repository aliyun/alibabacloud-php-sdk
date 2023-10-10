<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClustersV1ResponseBody\clusters;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClustersV1ResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class DescribeClustersV1ResponseBody extends Model
{
    /**
     * @description The details of the clusters.
     *
     * @var clusters[]
     */
    public $clusters;

    /**
     * @description The pagination information.
     *
     * @var pageInfo
     */
    public $pageInfo;
    protected $_name = [
        'clusters' => 'clusters',
        'pageInfo' => 'page_info',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusters) {
            $res['clusters'] = [];
            if (null !== $this->clusters && \is_array($this->clusters)) {
                $n = 0;
                foreach ($this->clusters as $item) {
                    $res['clusters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageInfo) {
            $res['page_info'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClustersV1ResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clusters'])) {
            if (!empty($map['clusters'])) {
                $model->clusters = [];
                $n               = 0;
                foreach ($map['clusters'] as $item) {
                    $model->clusters[$n++] = null !== $item ? clusters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['page_info'])) {
            $model->pageInfo = pageInfo::fromMap($map['page_info']);
        }

        return $model;
    }
}
