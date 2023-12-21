<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListTableMetasResponseBody\tableMetas;
use AlibabaCloud\Tea\Model;

class ListTableMetasResponseBody extends Model
{
    /**
     * @example 728C5E01-ABF6-5AA8-B9FC-B3BA05DECC77
     *
     * @var string
     */
    public $requestId;

    /**
     * @var tableMetas[]
     */
    public $tableMetas;

    /**
     * @example 20
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId'  => 'RequestId',
        'tableMetas' => 'TableMetas',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->tableMetas) {
            $res['TableMetas'] = [];
            if (null !== $this->tableMetas && \is_array($this->tableMetas)) {
                $n = 0;
                foreach ($this->tableMetas as $item) {
                    $res['TableMetas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTableMetasResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TableMetas'])) {
            if (!empty($map['TableMetas'])) {
                $model->tableMetas = [];
                $n                 = 0;
                foreach ($map['TableMetas'] as $item) {
                    $model->tableMetas[$n++] = null !== $item ? tableMetas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
