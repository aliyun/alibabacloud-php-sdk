<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class ListExternalStoreResponseBody extends Model
{
    /**
     * @example 3
     *
     * @var int
     */
    public $count;

    /**
     * @var ExternalStore[]
     */
    public $externalstores;

    /**
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
            $res['externalstores'] = [];
            if (null !== $this->externalstores && \is_array($this->externalstores)) {
                $n = 0;
                foreach ($this->externalstores as $item) {
                    $res['externalstores'][$n++] = null !== $item ? $item->toMap() : $item;
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
                $model->externalstores = [];
                $n                     = 0;
                foreach ($map['externalstores'] as $item) {
                    $model->externalstores[$n++] = null !== $item ? ExternalStore::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
