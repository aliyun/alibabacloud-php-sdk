<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAllDataSourceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAllDataSourceResponseBody\columns\column;

class columns extends Model
{
    /**
     * @var column[]
     */
    public $column;
    protected $_name = [
        'column' => 'Column',
    ];

    public function validate()
    {
        if (\is_array($this->column)) {
            Model::validateArray($this->column);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->column) {
            if (\is_array($this->column)) {
                $res['Column'] = [];
                $n1 = 0;
                foreach ($this->column as $item1) {
                    $res['Column'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Column'])) {
            if (!empty($map['Column'])) {
                $model->column = [];
                $n1 = 0;
                foreach ($map['Column'] as $item1) {
                    $model->column[$n1++] = column::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
