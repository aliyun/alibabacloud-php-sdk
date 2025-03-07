<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ExecuteStatementResponseBody\data;

use AlibabaCloud\Tea\Model;

class columnMetadata extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Gpdb\V20160503\Models\ColumnMetadata[]
     */
    public $columnMetadata;
    protected $_name = [
        'columnMetadata' => 'ColumnMetadata',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnMetadata) {
            $res['ColumnMetadata'] = [];
            if (null !== $this->columnMetadata && \is_array($this->columnMetadata)) {
                $n = 0;
                foreach ($this->columnMetadata as $item) {
                    $res['ColumnMetadata'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return columnMetadata
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnMetadata'])) {
            if (!empty($map['ColumnMetadata'])) {
                $model->columnMetadata = [];
                $n                     = 0;
                foreach ($map['ColumnMetadata'] as $item) {
                    $model->columnMetadata[$n++] = null !== $item ? \AlibabaCloud\SDK\Gpdb\V20160503\Models\ColumnMetadata::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
