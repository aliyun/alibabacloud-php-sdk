<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFileTypeResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFileTypeResponseBody\nodeTypeInfoList\nodeTypeInfo;
use AlibabaCloud\Tea\Model;

class nodeTypeInfoList extends Model
{
    /**
     * @var nodeTypeInfo[]
     */
    public $nodeTypeInfo;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 50
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 127
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'nodeTypeInfo' => 'NodeTypeInfo',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeTypeInfo) {
            $res['NodeTypeInfo'] = [];
            if (null !== $this->nodeTypeInfo && \is_array($this->nodeTypeInfo)) {
                $n = 0;
                foreach ($this->nodeTypeInfo as $item) {
                    $res['NodeTypeInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeTypeInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeTypeInfo'])) {
            if (!empty($map['NodeTypeInfo'])) {
                $model->nodeTypeInfo = [];
                $n                   = 0;
                foreach ($map['NodeTypeInfo'] as $item) {
                    $model->nodeTypeInfo[$n++] = null !== $item ? nodeTypeInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
