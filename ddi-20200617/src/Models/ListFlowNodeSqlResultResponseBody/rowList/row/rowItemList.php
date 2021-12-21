<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowNodeSqlResultResponseBody\rowList\row;

use AlibabaCloud\Tea\Model;

class rowItemList extends Model
{
    /**
     * @var string[]
     */
    public $rowItem;
    protected $_name = [
        'rowItem' => 'RowItem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rowItem) {
            $res['RowItem'] = $this->rowItem;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rowItemList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RowItem'])) {
            if (!empty($map['RowItem'])) {
                $model->rowItem = $map['RowItem'];
            }
        }

        return $model;
    }
}
