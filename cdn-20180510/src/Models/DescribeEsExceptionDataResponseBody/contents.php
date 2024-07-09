<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeEsExceptionDataResponseBody;

use AlibabaCloud\Tea\Model;

class contents extends Model
{
    /**
     * @description Information about the time column and the error column name.
     *
     * @var string[]
     */
    public $columns;

    /**
     * @description The name of the table that shows the errors of the script.
     *
     * @example 401
     *
     * @var string
     */
    public $name;

    /**
     * @description The time columns and error column names.
     *
     * @var string[]
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
            $res['Points'] = $this->points;
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
                $model->points = $map['Points'];
            }
        }

        return $model;
    }
}
