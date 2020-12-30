<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowNodeSqlResultResponseBody\rowList\row;

use AlibabaCloud\Tea\Model;

class rowItemList extends Model
{
    /**
     * @var string[]
     */
    public $rowItem;
    protected $_name = [
        'rowItem' => 'rowItem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rowItem) {
            $res['rowItem'] = $this->rowItem;
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
        if (isset($map['rowItem'])) {
            if (!empty($map['rowItem'])) {
                $model->rowItem = $map['rowItem'];
            }
        }

        return $model;
    }
}
