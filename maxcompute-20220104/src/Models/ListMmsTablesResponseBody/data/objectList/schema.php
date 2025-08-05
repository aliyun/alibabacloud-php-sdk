<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListMmsTablesResponseBody\data\objectList;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListMmsTablesResponseBody\data\objectList\schema\columns;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListMmsTablesResponseBody\data\objectList\schema\partitions;
use AlibabaCloud\Tea\Model;

class schema extends Model
{
    /**
     * @var columns[]
     */
    public $columns;

    /**
     * @example for mms test
     *
     * @var string
     */
    public $comment;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @var partitions[]
     */
    public $partitions;
    protected $_name = [
        'columns' => 'columns',
        'comment' => 'comment',
        'name' => 'name',
        'partitions' => 'partitions',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->columns) {
            $res['columns'] = [];
            if (null !== $this->columns && \is_array($this->columns)) {
                $n = 0;
                foreach ($this->columns as $item) {
                    $res['columns'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->comment) {
            $res['comment'] = $this->comment;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->partitions) {
            $res['partitions'] = [];
            if (null !== $this->partitions && \is_array($this->partitions)) {
                $n = 0;
                foreach ($this->partitions as $item) {
                    $res['partitions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return schema
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['columns'])) {
            if (!empty($map['columns'])) {
                $model->columns = [];
                $n = 0;
                foreach ($map['columns'] as $item) {
                    $model->columns[$n++] = null !== $item ? columns::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['comment'])) {
            $model->comment = $map['comment'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['partitions'])) {
            if (!empty($map['partitions'])) {
                $model->partitions = [];
                $n = 0;
                foreach ($map['partitions'] as $item) {
                    $model->partitions[$n++] = null !== $item ? partitions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
