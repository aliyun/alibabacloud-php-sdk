<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAiOutboundTaskListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAiOutboundTaskListResponseBody\data\list_;

class data extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var bool
     */
    public $hasNextPage;

    /**
     * @var list_[]
     */
    public $list;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalResults;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'hasNextPage' => 'HasNextPage',
        'list' => 'List',
        'pageSize' => 'PageSize',
        'totalResults' => 'TotalResults',
    ];

    public function validate()
    {
        if (\is_array($this->list)) {
            Model::validateArray($this->list);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->hasNextPage) {
            $res['HasNextPage'] = $this->hasNextPage;
        }

        if (null !== $this->list) {
            if (\is_array($this->list)) {
                $res['List'] = [];
                $n1 = 0;
                foreach ($this->list as $item1) {
                    $res['List'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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

        if (isset($map['HasNextPage'])) {
            $model->hasNextPage = $map['HasNextPage'];
        }

        if (isset($map['List'])) {
            if (!empty($map['List'])) {
                $model->list = [];
                $n1 = 0;
                foreach ($map['List'] as $item1) {
                    $model->list[$n1] = list_::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['TotalResults'])) {
            $model->totalResults = $map['TotalResults'];
        }

        return $model;
    }
}
