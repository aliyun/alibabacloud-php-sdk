<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAllDataSourceResponseBody;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAllDataSourceResponseBody\schemas\schema;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->schema) {
            $res['Schema'] = [];
            if (null !== $this->schema && \is_array($this->schema)) {
                $n = 0;
                foreach ($this->schema as $item) {
                    $res['Schema'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return schemas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Schema'])) {
            if (!empty($map['Schema'])) {
                $model->schema = [];
                $n             = 0;
                foreach ($map['Schema'] as $item) {
                    $model->schema[$n++] = null !== $item ? schema::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
