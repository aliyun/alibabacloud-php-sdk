<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryStatementsResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryStatementsResponseBody\model\statementList;
use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var statementList[]
     */
    public $statementList;
    protected $_name = [
        'pageSize'      => 'PageSize',
        'pageNumber'    => 'PageNumber',
        'totalCount'    => 'TotalCount',
        'statementList' => 'StatementList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->statementList) {
            $res['StatementList'] = [];
            if (null !== $this->statementList && \is_array($this->statementList)) {
                $n = 0;
                foreach ($this->statementList as $item) {
                    $res['StatementList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['StatementList'])) {
            if (!empty($map['StatementList'])) {
                $model->statementList = [];
                $n                    = 0;
                foreach ($map['StatementList'] as $item) {
                    $model->statementList[$n++] = null !== $item ? statementList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
