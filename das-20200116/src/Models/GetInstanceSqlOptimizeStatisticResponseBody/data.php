<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetInstanceSqlOptimizeStatisticResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The total number of automatic SQL optimization events.
     *
     * @example 16
     *
     * @var int
     */
    public $count;

    /**
     * @description The multiple of the maximum improvement for returned automatic SQL optimization events.
     *
     * @example 1003
     *
     * @var float
     */
    public $improvement;
    protected $_name = [
        'count'       => 'count',
        'improvement' => 'improvement',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }
        if (null !== $this->improvement) {
            $res['improvement'] = $this->improvement;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }
        if (isset($map['improvement'])) {
            $model->improvement = $map['improvement'];
        }

        return $model;
    }
}
