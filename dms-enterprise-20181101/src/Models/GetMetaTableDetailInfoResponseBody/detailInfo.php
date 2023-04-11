<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetMetaTableDetailInfoResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetMetaTableDetailInfoResponseBody\detailInfo\columnList;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetMetaTableDetailInfoResponseBody\detailInfo\indexList;
use AlibabaCloud\Tea\Model;

class detailInfo extends Model
{
    /**
     * @description The columns in the table.
     *
     * @var columnList[]
     */
    public $columnList;

    /**
     * @description The list of indexes.
     *
     * @var indexList[]
     */
    public $indexList;
    protected $_name = [
        'columnList' => 'ColumnList',
        'indexList'  => 'IndexList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnList) {
            $res['ColumnList'] = [];
            if (null !== $this->columnList && \is_array($this->columnList)) {
                $n = 0;
                foreach ($this->columnList as $item) {
                    $res['ColumnList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->indexList) {
            $res['IndexList'] = [];
            if (null !== $this->indexList && \is_array($this->indexList)) {
                $n = 0;
                foreach ($this->indexList as $item) {
                    $res['IndexList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detailInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnList'])) {
            if (!empty($map['ColumnList'])) {
                $model->columnList = [];
                $n                 = 0;
                foreach ($map['ColumnList'] as $item) {
                    $model->columnList[$n++] = null !== $item ? columnList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IndexList'])) {
            if (!empty($map['IndexList'])) {
                $model->indexList = [];
                $n                = 0;
                foreach ($map['IndexList'] as $item) {
                    $model->indexList[$n++] = null !== $item ? indexList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
