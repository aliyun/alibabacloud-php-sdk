<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models\PartitionSpec;

use AlibabaCloud\SDK\DataLake\V20200710\Models\FieldSchema;
use AlibabaCloud\Tea\Model;

class sharedStorageDescriptor extends Model
{
    /**
     * @var FieldSchema[]
     */
    public $cols;

    /**
     * @example 相对路径
     *
     * @var string
     */
    public $location;
    protected $_name = [
        'cols'     => 'Cols',
        'location' => 'Location',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cols) {
            $res['Cols'] = [];
            if (null !== $this->cols && \is_array($this->cols)) {
                $n = 0;
                foreach ($this->cols as $item) {
                    $res['Cols'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sharedStorageDescriptor
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cols'])) {
            if (!empty($map['Cols'])) {
                $model->cols = [];
                $n           = 0;
                foreach ($map['Cols'] as $item) {
                    $model->cols[$n++] = null !== $item ? FieldSchema::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }

        return $model;
    }
}
