<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryTouchListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryTouchListResponseBody\resultData\data;

class resultData extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var data[]
     */
    public $data;

    /**
     * @var bool
     */
    public $empty;

    /**
     * @var int
     */
    public $nextPage;

    /**
     * @var int
     */
    public $onePageSize;

    /**
     * @var int
     */
    public $previousPage;

    /**
     * @var int
     */
    public $totalPage;

    /**
     * @var int
     */
    public $totalResults;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'data' => 'Data',
        'empty' => 'Empty',
        'nextPage' => 'NextPage',
        'onePageSize' => 'OnePageSize',
        'previousPage' => 'PreviousPage',
        'totalPage' => 'TotalPage',
        'totalResults' => 'TotalResults',
    ];

    public function validate()
    {
        if (\is_array($this->data)) {
            Model::validateArray($this->data);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->data) {
            if (\is_array($this->data)) {
                $res['Data'] = [];
                $n1 = 0;
                foreach ($this->data as $item1) {
                    $res['Data'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n1 = 0;
                foreach ($map['Data'] as $item1) {
                    $model->data[$n1] = data::fromMap($item1);
                    ++$n1;
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
