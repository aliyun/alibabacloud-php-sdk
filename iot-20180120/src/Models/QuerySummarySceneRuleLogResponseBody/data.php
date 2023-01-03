<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QuerySummarySceneRuleLogResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySummarySceneRuleLogResponseBody\data\logList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @var logList
     */
    public $logList;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 3
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'logList'     => 'LogList',
        'pageSize'    => 'PageSize',
        'total'       => 'Total',
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
        if (null !== $this->logList) {
            $res['LogList'] = null !== $this->logList ? $this->logList->toMap() : null;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['LogList'])) {
            $model->logList = logList::fromMap($map['LogList']);
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
