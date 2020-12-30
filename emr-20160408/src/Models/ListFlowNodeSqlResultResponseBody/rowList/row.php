<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowNodeSqlResultResponseBody\rowList;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowNodeSqlResultResponseBody\rowList\row\rowItemList;
use AlibabaCloud\Tea\Model;

class row extends Model
{
    /**
     * @var int
     */
    public $rowIndex;

    /**
     * @var rowItemList
     */
    public $rowItemList;
    protected $_name = [
        'rowIndex'    => 'RowIndex',
        'rowItemList' => 'RowItemList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rowIndex) {
            $res['RowIndex'] = $this->rowIndex;
        }
        if (null !== $this->rowItemList) {
            $res['RowItemList'] = null !== $this->rowItemList ? $this->rowItemList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return row
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RowIndex'])) {
            $model->rowIndex = $map['RowIndex'];
        }
        if (isset($map['RowItemList'])) {
            $model->rowItemList = rowItemList::fromMap($map['RowItemList']);
        }

        return $model;
    }
}
