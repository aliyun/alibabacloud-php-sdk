<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class PrimaryKey extends Model
{
    /**
     * @var string[]
     */
    public $columns;

    /**
     * @var string
     */
    public $constraintName;

    /**
     * @var string
     */
    public $constraintType;

    /**
     * @var bool
     */
    public $enforced;
    protected $_name = [
        'columns' => 'columns',
        'constraintName' => 'constraintName',
        'constraintType' => 'constraintType',
        'enforced' => 'enforced',
    ];

    public function validate()
    {
        if (\is_array($this->columns)) {
            Model::validateArray($this->columns);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columns) {
            if (\is_array($this->columns)) {
                $res['columns'] = [];
                $n1 = 0;
                foreach ($this->columns as $item1) {
                    $res['columns'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->constraintName) {
            $res['constraintName'] = $this->constraintName;
        }

        if (null !== $this->constraintType) {
            $res['constraintType'] = $this->constraintType;
        }

        if (null !== $this->enforced) {
            $res['enforced'] = $this->enforced;
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
                $n1 = 0;
                foreach ($map['columns'] as $item1) {
                    $model->columns[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['constraintName'])) {
            $model->constraintName = $map['constraintName'];
        }

        if (isset($map['constraintType'])) {
            $model->constraintType = $map['constraintType'];
        }

        if (isset($map['enforced'])) {
            $model->enforced = $map['enforced'];
        }

        return $model;
    }
}
