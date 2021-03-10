<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDetailSceneRuleLogResponse;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDetailSceneRuleLogResponse\data\logList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $total;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var logList[]
     */
    public $logList;
    protected $_name = [
        'total'       => 'Total',
        'pageSize'    => 'PageSize',
        'currentPage' => 'CurrentPage',
        'logList'     => 'LogList',
    ];

    public function validate()
    {
        Model::validateRequired('total', $this->total, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('currentPage', $this->currentPage, true);
        Model::validateRequired('logList', $this->logList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->logList) {
            $res['LogList'] = [];
            if (null !== $this->logList && \is_array($this->logList)) {
                $n = 0;
                foreach ($this->logList as $item) {
                    $res['LogList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['LogList'])) {
            if (!empty($map['LogList'])) {
                $model->logList = [];
                $n              = 0;
                foreach ($map['LogList'] as $item) {
                    $model->logList[$n++] = null !== $item ? logList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
