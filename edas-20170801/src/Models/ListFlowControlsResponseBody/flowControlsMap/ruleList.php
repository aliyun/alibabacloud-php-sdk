<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListFlowControlsResponseBody\flowControlsMap;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListFlowControlsResponseBody\flowControlsMap\ruleList\ruleResultList;
use AlibabaCloud\Tea\Model;

class ruleList extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $totalSize;

    /**
     * @var ruleResultList
     */
    public $ruleResultList;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'currentPage'    => 'CurrentPage',
        'totalSize'      => 'TotalSize',
        'ruleResultList' => 'RuleResultList',
        'pageSize'       => 'pageSize',
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
        if (null !== $this->totalSize) {
            $res['TotalSize'] = $this->totalSize;
        }
        if (null !== $this->ruleResultList) {
            $res['RuleResultList'] = null !== $this->ruleResultList ? $this->ruleResultList->toMap() : null;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['TotalSize'])) {
            $model->totalSize = $map['TotalSize'];
        }
        if (isset($map['RuleResultList'])) {
            $model->ruleResultList = ruleResultList::fromMap($map['RuleResultList']);
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        return $model;
    }
}
