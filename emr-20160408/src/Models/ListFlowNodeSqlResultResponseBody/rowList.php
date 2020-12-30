<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowNodeSqlResultResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowNodeSqlResultResponseBody\rowList\row;
use AlibabaCloud\Tea\Model;

class rowList extends Model
{
    /**
     * @var row[]
     */
    public $row;
    protected $_name = [
        'row' => 'Row',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->row) {
            $res['Row'] = [];
            if (null !== $this->row && \is_array($this->row)) {
                $n = 0;
                foreach ($this->row as $item) {
                    $res['Row'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rowList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Row'])) {
            if (!empty($map['Row'])) {
                $model->row = [];
                $n          = 0;
                foreach ($map['Row'] as $item) {
                    $model->row[$n++] = null !== $item ? row::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
