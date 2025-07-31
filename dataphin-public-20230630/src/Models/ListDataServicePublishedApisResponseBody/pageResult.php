<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataServicePublishedApisResponseBody;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataServicePublishedApisResponseBody\pageResult\apiList;
use AlibabaCloud\Tea\Model;

class pageResult extends Model
{
    /**
     * @var apiList[]
     */
    public $apiList;

    /**
     * @example 68
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'apiList' => 'ApiList',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiList) {
            $res['ApiList'] = [];
            if (null !== $this->apiList && \is_array($this->apiList)) {
                $n = 0;
                foreach ($this->apiList as $item) {
                    $res['ApiList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pageResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiList'])) {
            if (!empty($map['ApiList'])) {
                $model->apiList = [];
                $n = 0;
                foreach ($map['ApiList'] as $item) {
                    $model->apiList[$n++] = null !== $item ? apiList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
