<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeProcessListResponseBody\processList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeProcessListResponseBody\processList\tableSchema\resultSet;

class tableSchema extends Model
{
    /**
     * @var resultSet[]
     */
    public $resultSet;
    protected $_name = [
        'resultSet' => 'ResultSet',
    ];

    public function validate()
    {
        if (\is_array($this->resultSet)) {
            Model::validateArray($this->resultSet);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resultSet) {
            if (\is_array($this->resultSet)) {
                $res['ResultSet'] = [];
                $n1 = 0;
                foreach ($this->resultSet as $item1) {
                    $res['ResultSet'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ResultSet'])) {
            if (!empty($map['ResultSet'])) {
                $model->resultSet = [];
                $n1 = 0;
                foreach ($map['ResultSet'] as $item1) {
                    $model->resultSet[$n1++] = resultSet::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
