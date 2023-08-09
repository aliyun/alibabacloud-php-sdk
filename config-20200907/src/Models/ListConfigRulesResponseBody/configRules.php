<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListConfigRulesResponseBody;

use AlibabaCloud\SDK\Config\V20200907\Models\ListConfigRulesResponseBody\configRules\configRuleList;
use AlibabaCloud\Tea\Model;

class configRules extends Model
{
    /**
     * @description The types of resources evaluated by the rule. Separate multiple resource types with commas (,).
     *
     * @var configRuleList[]
     */
    public $configRuleList;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The total number of rules.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'configRuleList' => 'ConfigRuleList',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configRuleList) {
            $res['ConfigRuleList'] = [];
            if (null !== $this->configRuleList && \is_array($this->configRuleList)) {
                $n = 0;
                foreach ($this->configRuleList as $item) {
                    $res['ConfigRuleList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return configRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigRuleList'])) {
            if (!empty($map['ConfigRuleList'])) {
                $model->configRuleList = [];
                $n                     = 0;
                foreach ($map['ConfigRuleList'] as $item) {
                    $model->configRuleList[$n++] = null !== $item ? configRuleList::fromMap($item) : $item;
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
