<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeEsExecuteDataResponseBody;

use AlibabaCloud\Tea\Model;

class contents extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $points;

    /**
     * @var string[]
     */
    public $columns;
    protected $_name = [
        'name'    => 'Name',
        'points'  => 'Points',
        'columns' => 'Columns',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->points) {
            $res['Points'] = $this->points;
        }
        if (null !== $this->columns) {
            $res['Columns'] = $this->columns;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Points'])) {
            if (!empty($map['Points'])) {
                $model->points = $map['Points'];
            }
        }
        if (isset($map['Columns'])) {
            if (!empty($map['Columns'])) {
                $model->columns = $map['Columns'];
            }
        }

        return $model;
    }
}
