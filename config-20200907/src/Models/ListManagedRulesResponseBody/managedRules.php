<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListManagedRulesResponseBody;

use AlibabaCloud\SDK\Config\V20200907\Models\ListManagedRulesResponseBody\managedRules\managedRuleList;
use AlibabaCloud\Tea\Model;

class managedRules extends Model
{
    /**
     * @description The details of the managed rules.
     *
     * @var managedRuleList[]
     */
    public $managedRuleList;

    /**
     * @description The page number of the returned page. Minimum value: 1.
     *
     * @example 10
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page. Valid values: 1 to 500.
     *
     * @example 1
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The total number of managed rules returned.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'managedRuleList' => 'ManagedRuleList',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'totalCount'      => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->managedRuleList) {
            $res['ManagedRuleList'] = [];
            if (null !== $this->managedRuleList && \is_array($this->managedRuleList)) {
                $n = 0;
                foreach ($this->managedRuleList as $item) {
                    $res['ManagedRuleList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return managedRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ManagedRuleList'])) {
            if (!empty($map['ManagedRuleList'])) {
                $model->managedRuleList = [];
                $n                      = 0;
                foreach ($map['ManagedRuleList'] as $item) {
                    $model->managedRuleList[$n++] = null !== $item ? managedRuleList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
