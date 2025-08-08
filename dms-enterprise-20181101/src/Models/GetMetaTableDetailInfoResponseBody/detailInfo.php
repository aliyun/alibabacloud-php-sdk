<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetMetaTableDetailInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetMetaTableDetailInfoResponseBody\detailInfo\columnList;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetMetaTableDetailInfoResponseBody\detailInfo\indexList;

class detailInfo extends Model
{
    /**
     * @var columnList[]
     */
    public $columnList;

    /**
     * @var indexList[]
     */
    public $indexList;
    protected $_name = [
        'columnList' => 'ColumnList',
        'indexList' => 'IndexList',
    ];

    public function validate()
    {
        if (\is_array($this->columnList)) {
            Model::validateArray($this->columnList);
        }
        if (\is_array($this->indexList)) {
            Model::validateArray($this->indexList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columnList) {
            if (\is_array($this->columnList)) {
                $res['ColumnList'] = [];
                $n1 = 0;
                foreach ($this->columnList as $item1) {
                    $res['ColumnList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->indexList) {
            if (\is_array($this->indexList)) {
                $res['IndexList'] = [];
                $n1 = 0;
                foreach ($this->indexList as $item1) {
                    $res['IndexList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['ColumnList'])) {
            if (!empty($map['ColumnList'])) {
                $model->columnList = [];
                $n1 = 0;
                foreach ($map['ColumnList'] as $item1) {
                    $model->columnList[$n1] = columnList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['IndexList'])) {
            if (!empty($map['IndexList'])) {
                $model->indexList = [];
                $n1 = 0;
                foreach ($map['IndexList'] as $item1) {
                    $model->indexList[$n1] = indexList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
