<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeDomainWithIntegrityResponseBody;

use AlibabaCloud\Dara\Model;

class content extends Model
{
    /**
     * @var string[]
     */
    public $columns;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $points;
    protected $_name = [
        'columns' => 'Columns',
        'name' => 'Name',
        'points' => 'Points',
    ];

    public function validate()
    {
        if (\is_array($this->columns)) {
            Model::validateArray($this->columns);
        }
        if (\is_array($this->points)) {
            Model::validateArray($this->points);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columns) {
            if (\is_array($this->columns)) {
                $res['Columns'] = [];
                $n1 = 0;
                foreach ($this->columns as $item1) {
                    $res['Columns'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->points) {
            if (\is_array($this->points)) {
                $res['Points'] = [];
                $n1 = 0;
                foreach ($this->points as $item1) {
                    $res['Points'][$n1] = $item1;
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
        if (isset($map['Columns'])) {
            if (!empty($map['Columns'])) {
                $model->columns = [];
                $n1 = 0;
                foreach ($map['Columns'] as $item1) {
                    $model->columns[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Points'])) {
            if (!empty($map['Points'])) {
                $model->points = [];
                $n1 = 0;
                foreach ($map['Points'] as $item1) {
                    $model->points[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
