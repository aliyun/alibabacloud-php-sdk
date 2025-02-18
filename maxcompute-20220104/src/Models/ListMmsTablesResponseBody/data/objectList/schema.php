<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListMmsTablesResponseBody\data\objectList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListMmsTablesResponseBody\data\objectList\schema\columns;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListMmsTablesResponseBody\data\objectList\schema\partitions;

class schema extends Model
{
    /**
     * @var columns[]
     */
    public $columns;
    /**
     * @var string
     */
    public $comment;
    /**
     * @var string
     */
    public $name;
    /**
     * @var partitions[]
     */
    public $partitions;
    protected $_name = [
        'columns'    => 'columns',
        'comment'    => 'comment',
        'name'       => 'name',
        'partitions' => 'partitions',
    ];

    public function validate()
    {
        if (\is_array($this->columns)) {
            Model::validateArray($this->columns);
        }
        if (\is_array($this->partitions)) {
            Model::validateArray($this->partitions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columns) {
            if (\is_array($this->columns)) {
                $res['columns'] = [];
                $n1             = 0;
                foreach ($this->columns as $item1) {
                    $res['columns'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->partitions)) {
                $res['partitions'] = [];
                $n1                = 0;
                foreach ($this->partitions as $item1) {
                    $res['partitions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['columns'])) {
            if (!empty($map['columns'])) {
                $model->columns = [];
                $n1             = 0;
                foreach ($map['columns'] as $item1) {
                    $model->columns[$n1++] = columns::fromMap($item1);
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
                $n1                = 0;
                foreach ($map['partitions'] as $item1) {
                    $model->partitions[$n1++] = partitions::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
