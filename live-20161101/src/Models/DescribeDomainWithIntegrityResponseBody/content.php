<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeDomainWithIntegrityResponseBody;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @description The column names.
     *
     * @var string[]
     */
    public $columns;

    /**
     * @description The table name.
     *
     * @example 1637825700000
     *
     * @var string
     */
    public $name;

    /**
     * @description The subpoints.
     *
     * @var string[]
     */
    public $points;
    protected $_name = [
        'columns' => 'Columns',
        'name' => 'Name',
        'points' => 'Points',
    ];

    public function validate() {}

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
     * @return content
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
