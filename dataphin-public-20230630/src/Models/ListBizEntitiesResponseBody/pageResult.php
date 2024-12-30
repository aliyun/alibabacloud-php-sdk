<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListBizEntitiesResponseBody;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListBizEntitiesResponseBody\pageResult\bizEntityList;
use AlibabaCloud\Tea\Model;

class pageResult extends Model
{
    /**
     * @var bizEntityList[]
     */
    public $bizEntityList;

    /**
     * @example 66
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'bizEntityList' => 'BizEntityList',
        'totalCount'    => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizEntityList) {
            $res['BizEntityList'] = [];
            if (null !== $this->bizEntityList && \is_array($this->bizEntityList)) {
                $n = 0;
                foreach ($this->bizEntityList as $item) {
                    $res['BizEntityList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['BizEntityList'])) {
            if (!empty($map['BizEntityList'])) {
                $model->bizEntityList = [];
                $n                    = 0;
                foreach ($map['BizEntityList'] as $item) {
                    $model->bizEntityList[$n++] = null !== $item ? bizEntityList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
