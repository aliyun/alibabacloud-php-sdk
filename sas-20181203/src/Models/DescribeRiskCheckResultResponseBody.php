<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskCheckResultResponseBody\list_;

class DescribeRiskCheckResultResponseBody extends Model
{
    /**
     * @var int
     */
    public $count;
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var list_[]
     */
    public $list;
    /**
     * @var int
     */
    public $pageCount;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'count'       => 'Count',
        'currentPage' => 'CurrentPage',
        'list'        => 'List',
        'pageCount'   => 'PageCount',
        'pageSize'    => 'PageSize',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
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
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->list) {
            if (\is_array($this->list)) {
                $res['List'] = [];
                $n1          = 0;
                foreach ($this->list as $item1) {
                    $res['List'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pageCount) {
            $res['PageCount'] = $this->pageCount;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['List'])) {
            if (!empty($map['List'])) {
                $model->list = [];
                $n1          = 0;
                foreach ($map['List'] as $item1) {
                    $model->list[$n1++] = list_::fromMap($item1);
                }
            }
        }

        if (isset($map['PageCount'])) {
            $model->pageCount = $map['PageCount'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
