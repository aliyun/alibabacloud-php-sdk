<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\CustomFindOrderResponseBody\resultObj\pageable;

use AlibabaCloud\Tea\Model;

class sort extends Model
{
    /**
     * @var bool
     */
    public $empty;

    /**
     * @var bool
     */
    public $sorted;

    /**
     * @var bool
     */
    public $unsorted;
    protected $_name = [
        'empty'    => 'Empty',
        'sorted'   => 'Sorted',
        'unsorted' => 'Unsorted',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->empty) {
            $res['Empty'] = $this->empty;
        }
        if (null !== $this->sorted) {
            $res['Sorted'] = $this->sorted;
        }
        if (null !== $this->unsorted) {
            $res['Unsorted'] = $this->unsorted;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sort
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Empty'])) {
            $model->empty = $map['Empty'];
        }
        if (isset($map['Sorted'])) {
            $model->sorted = $map['Sorted'];
        }
        if (isset($map['Unsorted'])) {
            $model->unsorted = $map['Unsorted'];
        }

        return $model;
    }
}
