<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class ListConfigResponseBody extends Model
{
    /**
     * @description The Logtail configurations that are returned on the current page.
     *
     * @var string[]
     */
    public $configs;

    /**
     * @description The number of Logtail configurations that are returned on the current page.
     *
     * @example 3
     *
     * @var int
     */
    public $count;

    /**
     * @description The total number of Logtail configurations that meet the query conditions.
     *
     * @example 2
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'configs' => 'configs',
        'count'   => 'count',
        'total'   => 'total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configs) {
            $res['configs'] = $this->configs;
        }
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }
        if (null !== $this->total) {
            $res['total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['configs'])) {
            if (!empty($map['configs'])) {
                $model->configs = $map['configs'];
            }
        }
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }
        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
