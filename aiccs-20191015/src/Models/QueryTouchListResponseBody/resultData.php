<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryTouchListResponseBody;

use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryTouchListResponseBody\resultData\data;
use AlibabaCloud\Tea\Model;

class resultData extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @var data[]
     */
    public $data;

    /**
     * @example false
     *
     * @var bool
     */
    public $empty;

    /**
     * @example 2
     *
     * @var int
     */
    public $nextPage;

    /**
     * @example 2
     *
     * @var int
     */
    public $onePageSize;

    /**
     * @example 2
     *
     * @var int
     */
    public $previousPage;

    /**
     * @example 4
     *
     * @var int
     */
    public $totalPage;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalResults;
    protected $_name = [
        'currentPage'  => 'CurrentPage',
        'data'         => 'Data',
        'empty'        => 'Empty',
        'nextPage'     => 'NextPage',
        'onePageSize'  => 'OnePageSize',
        'previousPage' => 'PreviousPage',
        'totalPage'    => 'TotalPage',
        'totalResults' => 'TotalResults',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->data) {
            $res['Data'] = [];
            if (null !== $this->data && \is_array($this->data)) {
                $n = 0;
                foreach ($this->data as $item) {
                    $res['Data'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->empty) {
            $res['Empty'] = $this->empty;
        }
        if (null !== $this->nextPage) {
            $res['NextPage'] = $this->nextPage;
        }
        if (null !== $this->onePageSize) {
            $res['OnePageSize'] = $this->onePageSize;
        }
        if (null !== $this->previousPage) {
            $res['PreviousPage'] = $this->previousPage;
        }
        if (null !== $this->totalPage) {
            $res['TotalPage'] = $this->totalPage;
        }
        if (null !== $this->totalResults) {
            $res['TotalResults'] = $this->totalResults;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n           = 0;
                foreach ($map['Data'] as $item) {
                    $model->data[$n++] = null !== $item ? data::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Empty'])) {
            $model->empty = $map['Empty'];
        }
        if (isset($map['NextPage'])) {
            $model->nextPage = $map['NextPage'];
        }
        if (isset($map['OnePageSize'])) {
            $model->onePageSize = $map['OnePageSize'];
        }
        if (isset($map['PreviousPage'])) {
            $model->previousPage = $map['PreviousPage'];
        }
        if (isset($map['TotalPage'])) {
            $model->totalPage = $map['TotalPage'];
        }
        if (isset($map['TotalResults'])) {
            $model->totalResults = $map['TotalResults'];
        }

        return $model;
    }
}
