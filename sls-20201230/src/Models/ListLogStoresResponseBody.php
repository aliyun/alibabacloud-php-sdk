<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class ListLogStoresResponseBody extends Model
{
    /**
     * @description The number of entries that are returned on the current page.
     *
     * @var int
     */
    public $count;

    /**
     * @description The Logstores that meet the query conditions.
     *
     * @example ["test-1","test-2"]
     *
     * @var string[]
     */
    public $logstores;

    /**
     * @description The number of the Logstores that meet the query conditions.
     *
     * @example 2
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'count'     => 'count',
        'logstores' => 'logstores',
        'total'     => 'total',
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
        if (null !== $this->logstores) {
            $res['logstores'] = $this->logstores;
        }
        if (null !== $this->total) {
            $res['total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLogStoresResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }
        if (isset($map['logstores'])) {
            if (!empty($map['logstores'])) {
                $model->logstores = $map['logstores'];
            }
        }
        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
