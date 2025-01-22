<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ExecuteStatementResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ColumnMetadata;

class columnMetadata extends Model
{
    /**
     * @var ColumnMetadata[]
     */
    public $columnMetadata;
    protected $_name = [
        'columnMetadata' => 'ColumnMetadata',
    ];

    public function validate()
    {
        if (\is_array($this->columnMetadata)) {
            Model::validateArray($this->columnMetadata);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columnMetadata) {
            if (\is_array($this->columnMetadata)) {
                $res['ColumnMetadata'] = [];
                $n1                    = 0;
                foreach ($this->columnMetadata as $item1) {
                    $res['ColumnMetadata'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ColumnMetadata'])) {
            if (!empty($map['ColumnMetadata'])) {
                $model->columnMetadata = [];
                $n1                    = 0;
                foreach ($map['ColumnMetadata'] as $item1) {
                    $model->columnMetadata[$n1++] = self::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
