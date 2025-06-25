<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAllDataSourceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAllDataSourceResponseBody\schemas\schema;

class schemas extends Model
{
    /**
     * @var schema[]
     */
    public $schema;
    protected $_name = [
        'schema' => 'Schema',
    ];

    public function validate()
    {
        if (\is_array($this->schema)) {
            Model::validateArray($this->schema);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->schema) {
            if (\is_array($this->schema)) {
                $res['Schema'] = [];
                $n1 = 0;
                foreach ($this->schema as $item1) {
                    $res['Schema'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Schema'])) {
            if (!empty($map['Schema'])) {
                $model->schema = [];
                $n1 = 0;
                foreach ($map['Schema'] as $item1) {
                    $model->schema[$n1] = schema::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
