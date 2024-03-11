<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BizWorks\V20210408\Models\QueryUsageResponseBody;

use AlibabaCloud\SDK\BizWorks\V20210408\Models\QueryUsageResponseBody\data\articleInfos;
use AlibabaCloud\SDK\BizWorks\V20210408\Models\QueryUsageResponseBody\data\commoditySpecUsageInfos;
use AlibabaCloud\SDK\BizWorks\V20210408\Models\QueryUsageResponseBody\data\subProductInfos;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var articleInfos[]
     */
    public $articleInfos;

    /**
     * @var commoditySpecUsageInfos[]
     */
    public $commoditySpecUsageInfos;

    /**
     * @var subProductInfos[]
     */
    public $subProductInfos;
    protected $_name = [
        'articleInfos'            => 'articleInfos',
        'commoditySpecUsageInfos' => 'commoditySpecUsageInfos',
        'subProductInfos'         => 'subProductInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->articleInfos) {
            $res['articleInfos'] = [];
            if (null !== $this->articleInfos && \is_array($this->articleInfos)) {
                $n = 0;
                foreach ($this->articleInfos as $item) {
                    $res['articleInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->commoditySpecUsageInfos) {
            $res['commoditySpecUsageInfos'] = [];
            if (null !== $this->commoditySpecUsageInfos && \is_array($this->commoditySpecUsageInfos)) {
                $n = 0;
                foreach ($this->commoditySpecUsageInfos as $item) {
                    $res['commoditySpecUsageInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->subProductInfos) {
            $res['subProductInfos'] = [];
            if (null !== $this->subProductInfos && \is_array($this->subProductInfos)) {
                $n = 0;
                foreach ($this->subProductInfos as $item) {
                    $res['subProductInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['articleInfos'])) {
            if (!empty($map['articleInfos'])) {
                $model->articleInfos = [];
                $n                   = 0;
                foreach ($map['articleInfos'] as $item) {
                    $model->articleInfos[$n++] = null !== $item ? articleInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['commoditySpecUsageInfos'])) {
            if (!empty($map['commoditySpecUsageInfos'])) {
                $model->commoditySpecUsageInfos = [];
                $n                              = 0;
                foreach ($map['commoditySpecUsageInfos'] as $item) {
                    $model->commoditySpecUsageInfos[$n++] = null !== $item ? commoditySpecUsageInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['subProductInfos'])) {
            if (!empty($map['subProductInfos'])) {
                $model->subProductInfos = [];
                $n                      = 0;
                foreach ($map['subProductInfos'] as $item) {
                    $model->subProductInfos[$n++] = null !== $item ? subProductInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
