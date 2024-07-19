<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeTableResponseBody;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\ColumnMetadata;
use AlibabaCloud\Tea\Model;

class columnList extends Model
{
    /**
     * @var ColumnMetadata[]
     */
    public $columnList;
    protected $_name = [
        'columnList' => 'ColumnList',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return columnList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnList'])) {
            if (!empty($map['ColumnList'])) {
                $model->columnList = [];
                $n                 = 0;
                foreach ($map['ColumnList'] as $item) {
                    $model->columnList[$n++] = null !== $item ? ColumnMetadata::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
