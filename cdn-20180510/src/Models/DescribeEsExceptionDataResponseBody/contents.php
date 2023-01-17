<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeEsExceptionDataResponseBody;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeEsExceptionDataResponseBody\contents\points;
use AlibabaCloud\Tea\Model;

class contents extends Model
{
    /**
     * @description The column names of the chart that shows the errors of the script and the time of each data entry.
     *
     * @var string[]
     */
    public $columns;

    /**
     * @description The name of the chart that shows the errors of the script.
     *
     * @example 401
     *
     * @var string
     */
    public $name;

    /**
     * @description The value of each time and the column of each data entry.
     *
     * @var points[]
     */
    public $points;
    protected $_name = [
        'columns' => 'Columns',
        'name'    => 'Name',
        'points'  => 'Points',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columns) {
            $res['Columns'] = $this->columns;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->points) {
            $res['Points'] = [];
            if (null !== $this->points && \is_array($this->points)) {
                $n = 0;
                foreach ($this->points as $item) {
                    $res['Points'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Columns'])) {
            if (!empty($map['Columns'])) {
                $model->columns = $map['Columns'];
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Points'])) {
            if (!empty($map['Points'])) {
                $model->points = [];
                $n             = 0;
                foreach ($map['Points'] as $item) {
                    $model->points[$n++] = null !== $item ? points::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
