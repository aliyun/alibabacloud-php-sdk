<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeTableResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ColumnMetadata;

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
        if (\is_array($this->columnList)) {
            Model::validateArray($this->columnList);
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
                    $res['ColumnList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                    $model->columnList[$n1++] = ColumnMetadata::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
