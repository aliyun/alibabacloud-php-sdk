<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class ListExternalStoreResponseBody extends Model
{
    /**
     * @description The number of external stores returned on the current page.
     *
     * @example 3
     *
     * @var int
     */
    public $count;

    /**
     * @description The names of the external stores.
     *
     * @var string[]
     */
    public $externalstores;

    /**
     * @description The number of external stores that meet the query conditions.
     *
     * @example 3
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'count'          => 'count',
        'externalstores' => 'externalstores',
        'total'          => 'total',
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
        if (null !== $this->externalstores) {
            $res['externalstores'] = $this->externalstores;
        }
        if (null !== $this->total) {
            $res['total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListExternalStoreResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }
        if (isset($map['externalstores'])) {
            if (!empty($map['externalstores'])) {
                $model->externalstores = $map['externalstores'];
            }
        }
        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
