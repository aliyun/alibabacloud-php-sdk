<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class ListAlertsResponseBody extends Model
{
    /**
     * @description The number of alert rules that are returned.
     *
     * @example 10
     *
     * @var int
     */
    public $count;

    /**
     * @description The alert rules.
     *
     * @var Alert[]
     */
    public $results;

    /**
     * @description The total number of alert rules in the project.
     *
     * @example 80
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'count'   => 'count',
        'results' => 'results',
        'total'   => 'total',
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
        if (null !== $this->results) {
            $res['results'] = [];
            if (null !== $this->results && \is_array($this->results)) {
                $n = 0;
                foreach ($this->results as $item) {
                    $res['results'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->total) {
            $res['total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAlertsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }
        if (isset($map['results'])) {
            if (!empty($map['results'])) {
                $model->results = [];
                $n              = 0;
                foreach ($map['results'] as $item) {
                    $model->results[$n++] = null !== $item ? Alert::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
