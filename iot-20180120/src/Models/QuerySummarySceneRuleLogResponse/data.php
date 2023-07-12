<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QuerySummarySceneRuleLogResponse;

use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySummarySceneRuleLogResponse\data\logList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $total;

    /**
     * @var logList
     */
    public $logList;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'pageSize'    => 'PageSize',
        'total'       => 'Total',
        'logList'     => 'LogList',
    ];

    public function validate()
    {
        Model::validateRequired('currentPage', $this->currentPage, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('total', $this->total, true);
        Model::validateRequired('logList', $this->logList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->logList) {
            $res['LogList'] = null !== $this->logList ? $this->logList->toMap() : null;
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
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['LogList'])) {
            $model->logList = logList::fromMap($map['LogList']);
        }

        return $model;
    }
}
